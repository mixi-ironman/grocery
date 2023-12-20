@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Brands</h4>
            </div>
            <div class="card-body">
                
                <form action="{{ route('brand.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Tên Thương hiệu</label>
                        <input type="text" class="form-control"  name="name_brand" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Mô tả</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image"  class="form-label">Ảnh</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                    </div>

                    <p>Status</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" checked value="1">
                        <label class="form-check-label" >
                            Có
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="0">
                        <label class="form-check-label" >
                            Không
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary save-tags">Save</button>
                </form>
            </div>
            
        </div>
    </div>
@endsection

@push('custom-script')
  
    <script>
       
        CKEDITOR.replace( 'des_brand' );
        $(document).ready(function () {

        })
            
    </script>
@endpush