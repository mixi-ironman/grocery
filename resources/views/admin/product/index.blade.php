@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Products</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('products.create') }}"><i class="fa-brands fa-openid"></i> Add product</a>
                {{-- <form >
                    <div class="mb-3">
                        <label for="search_product" class="form-label">Tìm kiếm</label>
                        <select class="form-select select2" id="search_product" name="search_product" aria-label="Default select example">
                            <option value="0">------</option>
                            @foreach($products_ as $product_)
                            <option value="{{ $product_->id }}">{{ $product_->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form> --}}
                <table class="table" id="myTable_">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="max-width:200px;text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="max-width:200px;text-align: center;vertical-align:middle;">Thương hiệu</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Image</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">slug</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Category</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Price</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Old Price</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Stock</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Sold</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">IsActive</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Is_onsale</th>
                        <th scope="col"style="display:none;text-align: center;vertical-align:middle;">Is_popular</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Is_featured</th>
                        {{-- <th scope="col"style="text-align: center;vertical-align:middle;">description</th> --}}
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
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->id }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->name }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->brand?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                {{-- <img style="width:180px;height:120px;line-height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $product->image }}" > --}}
                                <img style="width:130px;object-fit: contain;height:130px;line-height:130px;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" src="{{ asset('uploads/') }}/{{ $product->image }}" >
                                
                            </td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->slug }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:100px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->category?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ number_format($product->price) }}đ</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ number_format($product->old_price) }}đ</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->stock }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->product_sold }}</td>

                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <a href="{{ route('products.update', ['id' => $product->id]) }}" class="change-status" data-status = "{{ $product->is_active }}">
                                    @if( $product->is_active === 1)
                                        <span class="btn btn-primary btn-xs">Yes</span>
                                    @elseif($product->is_active === 0)
                                        <span class="btn btn btn-danger btn-xs">No</span>
                                    @endif
                                </a>
                            </td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <a href="{{ route('products.update', ['id' => $product->id]) }}" class="change-status change-onsale" data-onsale = "{{ $product->is_onsale }}">
                                    @if( $product->is_onsale === 1)
                                        <span class="btn btn-primary btn-xs">Yes</span>
                                    @elseif($product->is_onsale === 0)
                                        <span class="btn btn btn-danger btn-xs">No</span>
                                    @endif
                                </a>

                            </td>
                            <td style="display:none;text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <a href="{{ route('products.update', ['id' => $product->id]) }}" class="change-popular" data-popular = "{{ $product->is_popular }}">
                                    @if( $product->is_popular === 1)
                                        <span class="btn btn-primary btn-xs">Yes</span>
                                    @elseif($product->is_popular === 0)
                                        <span class="btn btn btn-danger btn-xs">No</span>
                                    @endif
                                </a>
                            </td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <a href="{{ route('products.update', ['id' => $product->id]) }}" class="change-status change-featured" data-featured = "{{ $product->is_featured }}">
                                    @if( $product->is_featured === 1)
                                        <span class="btn btn-primary btn-xs">Yes</span>
                                    @elseif($product->is_featured === 0)
                                        <span class="btn btn btn-danger btn-xs">No</span>
                                    @endif
                                </a>
                            </td>
                            {{-- <td style="text-align: justify;vertical-align:middle;max-width:350;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->description }}</td> --}}
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $product->created_at->format('d/m/Y h:i:s') }}</td>
                            <td style="text-align:center;vertical-align:middle">
                                <form action="{{ route('products.destroy',['id'=>$product->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('products.edit',['id'=>$product->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button onclick="return confirm('Bạn có chắc muốn xóa?')" type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            <div class="card-footer" style="display:none">
                {{-- {{ $products->links() }} --}}
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                theme: 'bootstrap-5'
            });
            $(document).on("click", ".change-status", function (e) {
                e.preventDefault();
    
                let statusIcon = [
                    '<span class="btn btn btn-danger btn-xs">No</span>',
                    '<span class="btn btn-primary btn-xs">Yes</span>'
                ]
    
                let url = $(this).attr('href');
                let is_active = $(this).attr('data-status');
                let is_featured = $(this).attr('data-featured');
                let is_onsale = $(this).attr('data-onsale');
    
                let _this = $(this);
    
                let updateData = {
                    _token: '{{ csrf_token() }}',
                };
    
                if (is_active != undefined) {
                    updateData.is_active = is_active == 1 ? 0 : 1;
                }
    
                if (is_featured != undefined) {
                    updateData.is_featured = is_featured == 1 ? 0 : 1;
                }
    
                if (is_onsale != undefined) {
                    updateData.is_onsale = is_onsale == 1 ? 0 : 1;
                }

                // console.log(updateData)
    
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: updateData,
                    dataType: 'json',
                    success: function (data) {
                        if (is_active != undefined) {
                            _this.attr('data-status', data.changed_attributes.is_active);
                            _this.empty();
                            _this.html(statusIcon[data.changed_attributes.is_active]);
                        }
    
                        if (is_featured != undefined) {
                            // console.log(data.changed_attributes.is_featured);
                            _this.attr('data-featured', data.changed_attributes.is_featured);
                            _this.empty();
                            _this.html(statusIcon[data.changed_attributes.is_featured]);
                        }
                        
                        if (is_onsale != undefined) {
                            _this.attr('data-onsale', data.changed_attributes.is_onsale);
                            _this.empty();
                            _this.html(statusIcon[data.changed_attributes.is_onsale]);
                        }

                        alert('Cập nhật trạng thái thành công!')
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush

