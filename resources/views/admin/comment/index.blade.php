@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bình luận</h4>
            </div>
            <div class="card-body">
                <table class="table" id="myTable_Cate">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Họ tên</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Email</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Nội dung bình luận</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php dd($categories)  @endphp --}}
                    @foreach($comments as $key => $comment)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;">{{ $comment->id }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $comment->name }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $comment->email }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $comment->content }}</td>
                            <td style="text-align:center;vertical-align:middle">
                                <form action="{{ route('comment.destroy',['id'=>$comment->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Bạn có chắc muốn xóa?')" type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    {{-- {!! \App\Helpers\Helper::comment($categories) !!} --}}
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function () {
            $(document).on("click", ".change-status", function (e) {
                e.preventDefault();
                const statusIcon = [
                    '<span class="btn btn btn-danger btn-xs">No</span>',
                    '<span class="btn btn-primary btn-xs">Yes</span>'
                ]
                let url = $(this).attr('href');
                let is_active = $(this).attr('data-status');

                let _this = $(this)
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: {
                        _token: '{{ csrf_token() }}',
                        is_active: is_active == 1 ? 0 : 1,
                    },
                    dataType: 'json',

                    success: function (data) {
                        _this.attr('data-status', data.is_active);
                        _this.empty();
                        _this.html(statusIcon[data.is_active]);

                        alert('Cập nhật trạng thái thành công!')
                    },
                    error: function (data) {
                        console.log(data, 1)
                    }
                })
            })
        })
    </script>
@endpush


