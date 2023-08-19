<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Services\TagService;

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
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
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