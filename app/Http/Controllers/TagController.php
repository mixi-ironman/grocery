<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{

    public function __construct(readonly TagService $tagService)
    {
       
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Tag::query();

            if ($request->q) {
                $query->where('name', 'like', "%$request->q%");
            }

            $tags = $query->paginate(10, '*', 'page', $request->page);
            // dd($tags);
            // khi bạn thực hiện câu truy vấn paginate(), nó trả về một đối tượng LengthAwarePaginator
            // sử dụng phương thức items() để truy cập mảng của tất cả các bản ghi: (dd($tags); ra thì mảng của các bản ghi nằm ở key item của của đối tượng trên)
            $allTags = $tags->items();
            $tagsCollection = collect($allTags);

            $tagsMap = $tagsCollection->map(function ($tag) {
                return [
                    'id' => $tag->id,
                    'text' => $tag->name,
                ];
            });

            // dd($tagsMap);
            
            $data = [
                'lastPage' => $tags->lastPage(),
                // 'pagination' => [
                //     'more' => $tags->hasMorePages(),
                // ],
                'results' => $tagsMap,
            ];

            return response()->json($data);
        }
    }

    // public function createTag(Request $request)
    // {
    //     $tagName = $request->input('tagName');
    //     dd("tag");
    //     // Xử lý việc thêm thẻ mới vào cơ sở dữ liệu
    //     $tag = new Tag();
    //     $tag->name = $tagName;
    //     $tag->save();

    //     return response()->json([
    //         'success' => true,
    //         'tagId' => $tag->id
    //     ]);
    // }

    public function create(Request $request)
    {
        dd($request->tagName);
        
    }


    public function store(Request $request)
    {
        $this->tagService->store($request);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $tag = Tag::findOrFail($id);
        // dd($product);
        return view('admin.tag.edit',[
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();

            Tag::where('id', $id)->update(['name' => $request->tag_name,]);

            DB::commit();
            return redirect()->route('tags.list-tag')->with('success', 'Cập nhật thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }

    public function destroy(string $id)
    {
        $tag = Tag::find($id);
    
        if ($tag) {
            $tag->delete();
            return redirect()->route('tags.list-tag')->with('success', 'Xóa thành công!');
        } else {
            return "Không tìm thấy bản ghi để xóa.";
        }
    }

    public function listTag(Request $request)
    {
        $tags = Tag::all();
        return view('admin.tag.index',['tags' => $tags]);
    }
}


/*
Trong đoạn mã của bạn, khi bạn thực hiện câu truy vấn paginate(),
 nó trả về một đối tượng LengthAwarePaginator. Đây không phải là một mảng thuần túy,
  mà là một đối tượng chứa thông tin về dữ liệu trang hiện tại và các thông tin liên 
  quan đến phân trang.

Khi bạn sử dụng collect($tags) để chuyển đổi đối tượng LengthAwarePaginator thành 
một collection, bạn thực sự đang biến nó thành một collection của các trang (page) chứ không phải là một collection của các bản ghi.

Khi bạn thực hiện hàm map() trên tagsCollection, bạn đang lặp qua các trang của
 paginator, mỗi trang là một collection chứa danh sách bản ghi tương ứng trên trang đó. Do đó, khi bạn dd($tag) trong hàm map, bạn đang xem một collection của các bản ghi trên một trang cụ thể, chứ không phải là một bản ghi đơn lẻ.

Nếu bạn muốn lặp qua từng bản ghi thay vì từng trang, bạn nên sử dụng vòng lặp
 bên ngoài để truy cập từng bản ghi một trong mỗi trang:

 */