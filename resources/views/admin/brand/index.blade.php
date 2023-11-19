@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Thương hiệu</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('brand.create') }}"><i class="fa-brands fa-openid"></i> Add brand</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="max-width:200px;text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Image</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Status</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">description</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($brands as $key => $brand)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $brand->id }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $brand->name }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:180px;height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" src="{{ asset('uploads/') }}/{{ $brand->image }}" >
                            </td>

                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                {{-- <a href="{{ route('brand.update', ['id' => $brand->id]) }}" class="change-status change-featured" data-featured = "{{ $brand->status }}"> --}}
                                    @if( $brand->status === 1)
                                        <span class="btn btn-primary btn-xs">Có</span>
                                    @elseif($brand->status === 0)
                                        <span class="btn btn btn-danger btn-xs">Không</span>
                                    @endif
                                {{-- </a> --}}
                            </td>
                           
                            <td style="text-align: center;vertical-align:middle;max-width:350;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $brand->description }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $brand->created_at->format('d/m/Y h:i:s') }}</td>
                            <td style="text-align:center;vertical-align:middle" >
                                <form action="{{ route('brand.destroy',['id'=>$brand->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('brand.edit',['id'=>$brand->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{-- {{ $brands->links() }} --}}
            </div>
        </div>
    </div>
@endsection

