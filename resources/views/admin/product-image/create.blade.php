@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Images</h4>
            </div>
            <div class="card-body">
                
                <form action="{{ route('product.images.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="image"  class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                    </div>

                     <div class="mb-3">
                        <label for="product_id" class="form-label">Product</label>
                        <select class="form-select" id="product_id" name="product_id" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <p>Active</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_default" checked value="1">
                        <label class="form-check-label" >
                            Có
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_default" value="0">
                        <label class="form-check-label" >
                            Không
                        </label>
                    </div>

                        {{-- <textarea name="content" id="content" rows="10" cols="80">
                        
                    </textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'content' );
                    </script> --}}

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function () {
            $('#product_id').select2({
                theme: 'bootstrap-5'
            });
        })
    </script>
@endpush


