@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">products</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('products.create') }}"><i class="fa-brands fa-openid"></i> Add product</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Image</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">slug</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">product_id</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Price</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">IsActive</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">description</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php
                    dd($products)
                    @endphp --}}
                    @foreach($products as $key => $product)
                        <tr>
                            <td scope="row" style="text-align: justify;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->id }}</td>
                            <td style="text-align: justify;vertical-align:top;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->name }}</td>
                            <td style="text-align: justify;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:180px;height:120px;border-radius:5px;" src="{{ $product->image }}" >
                            </td>
                            <td style="text-align: justify;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->slug }}</td>
                            <td style="text-align: center;vertical-align:top;max-width:100px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->category_id }}</td>
                            <td style="text-align: center;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->price }}</td>
                            <td style="text-align: center;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                {{ $product->is_active }}
                            </td>
                            <td style="text-align: justify;vertical-align:top;max-width:350;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->description }}</td>
                            <td style="text-align: center;vertical-align:top;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->created_at->format('d/m/Y h:i:s') }}</td>
                            <td >
                                <form action="{{ route('products.destroy',['id'=>$product->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('products.edit',['id'=>$product->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

