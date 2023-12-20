@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Images</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('product.images.create') }}"><i class="fa-brands fa-openid"></i> Add Product Images</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Image</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Product</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Default</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php
                    dd($productImages)
                    @endphp --}}

                    @foreach($productImages as $key => $productImage)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $productImage->id }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:180px;height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" src="{{ asset('uploads/') }}/{{ $productImage->image_path }}" >
                            </td>
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $productImage->product->name }}</td>

                            {{-- <td style="text-align: center;vertical-align:middle;max-width:100px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->category->name }}</td> --}}
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                {{ $productImage->is_default }}
                            </td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $productImage->created_at->format('d/m/Y h:i:s') }}</td>

                            <td style="text-align:center;vertical-align:middle" >
                                <form action="{{ route('product.images.destroy',['id'=>$productImage->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('product.images.edit',['id'=>$productImage->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash" onclick="return confirm('Bạn có chắc muốn xóa?')"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $productImages->links() }}
            </div> --}}
        </div>
    </div>
@endsection

