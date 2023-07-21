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
                        <th scope="col">description</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">parent_id</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">is_active</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php dd($categories)  @endphp --}}
                    @foreach($categories as $key => $category)
                        <tr>
                            <td scope="row" style="text-align: justify;vertical-align:middle;">{{ $category->id }}</td>
                            <td style="text-align: justify;vertical-align:middle;">{{ $category->name }}</td>
                            <td style="text-align: justify;vertical-align:middle;">{{ $category->slug }}</td>
                            <td style="text-align: justify;vertical-align:middle;max-width:350px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $category->description }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $category->parent_id }}</td>
                            <td style="text-align: center;vertical-align:middle;">
                                {{ $category->is_active }}
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ $category->created_at->format('d/m/Y h:i:s') }}</td>
                            <td >
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

