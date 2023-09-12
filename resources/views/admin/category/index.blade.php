@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Categories</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('categories.create') }}"><i class="fa-brands fa-openid"></i> Add Category</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">slug</th>
                        {{-- <th scope="col"style="text-align: center;vertical-align:middle;">description</th> --}}
                        <th scope="col"style="text-align: center;vertical-align:middle;">Parent_category</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">is_active</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php dd($categories)  @endphp --}}
                    @foreach($categories as $key => $category)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;">{{ $category->id }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $category->name }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $category->slug }}</td>
                            {{-- <td style="text-align: center;vertical-align:middle;max-width:350px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $category->description }}</td> --}}
                            {{-- <td style="text-align: center;vertical-align:middle;">{{ $category->parent_id }}</td> --}}
                            <td style="text-align: center;vertical-align:middle;">{{ $category?->parentCategory?->name }}</td>

                            <td style="text-align: center;vertical-align:middle;">
                                <a href="{{ route('categories.update', ['id' => $category->id]) }}" class="change-status" data-status = "{{ $category->is_active }}">
                                    @if( $category->is_active === 1) 
                                        <span class="btn btn-primary btn-xs">Yes</span>
                                    @elseif($category->is_active === 0)
                                        <span class="btn btn btn-danger btn-xs">No</span>
                                    @endif
                                </a>
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ $category->created_at->format('d/m/Y h:i:s') }}</td>
                            <td style="text-align:center;vertical-align:middle">
                                <form action="{{ route('categories.destroy',['id'=>$category->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('categories.edit',['id'=>$category->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    {{-- {!! \App\Helpers\Helper::category($categories) !!} --}}
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $categories->links() }}
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


