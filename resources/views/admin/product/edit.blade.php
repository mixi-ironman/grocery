@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Products</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update',['id' => $product->id]) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label  class="form-label">Name Product</label>
                        <input type="text" class="form-control"  name="name_product" aria-describedby="emailHelp" value="{{ $product->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select category_id" id="category_id" name="category_id" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id == $product->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Tag</label>
                        <select class="select2 form-select tag-select" id="tags" name="tags[]" multiple>
                            <option value="0">---Chọn---</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Mô tả chi tiết</label>
                        <textarea name="content" id="content" rows="10" cols="80">{!! $product->content !!}</textarea>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" aria-describedby="emailHelp" value="{{ $product->price }}">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Old Price</label>
                        <input type="text" class="form-control"  name="old_price" aria-describedby="emailHelp" value="{{ $product->old_price }}">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Stock</label>
                        <input type="number" class="form-control"  name="stock" aria-describedby="emailHelp" value="{{ $product->stock }}">
                    </div>

                    <div class="mb-3">
                        <label for="image"  class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                    </div>

                    <p>Active</p>
                    <div class="form-check">
                       <input class="form-check-input" type="radio" name="is_active" {{ ($product->is_active == 1) ? 'checked' : '' }} value="1">
                        <label class="form-check-label" >
                            Có
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" {{ ($product->is_active == 0) ? 'checked' : '' }}  value="0">
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
        CKEDITOR.replace( 'content' );

        $(document).ready(function () {
            $('.category_id').select2({
                theme: 'bootstrap-5'
            });
        })

        $('.select2').select2({
            theme: 'bootstrap-5'
        });
        //load tag
        $('#tags').select2({
            theme: 'bootstrap-5',
            tags: true,
            tokenSeparators: [','],
            ajax: {
                url: '{{ route('tags.index') }}',
                data: function (params) {
                    var query = {
                        q: params.term,
                        page: params.page || 1 ,
                        _token: '{{ csrf_token() }}'
                    }

                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                dataType: 'json',
                processResults: function (data, params) {
                    // console.log(data)
                    params.page = params.page || 1;
                    return {
                        results: data.results,
                        pagination: {
                            more: params.page < data.lastPage,
                        }
                        // pagination: {
                        //     more: data.ination.more
                        // }
                    }
                }
            },
        })
        
        //add tag
        var existingTags = [];
        $('.tag-select').on('select2:selecting', function (e) {
            let tagName = e.params.args.data.text;
            // let tagId = e.params.args.data.id;
            // console.log(tagId);
            if (tagName) {

                $.ajax({
                    url: '{{ route('tags.store') }}',
                    type: 'POST',
                    data: {
                        tagName: tagName,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.success) {
                            // Thêm thẻ mới vào Select2
                            var newTag = {
                                id: response.tagId,
                                text: tagName
                            };
                            // $('.select2').append(new Option(tagName, tagName, true, true)).trigger('change');
                            $('.select2').append(new Option(newTag.text, newTag.id, true, true)).trigger('change');
                            existingTags.push(response.tagId);
                        }
                    }
                });
            }

        });

        //get category theo parentCategory
        $('#category').select2({
            theme: 'bootstrap-5',
            ajax: {
                url: '{{ route('categories.get-children') }}',
                data: function (params) {
                    var query = {
                        parent_id: $('#parent_id').val(),
                        _token: '{{ csrf_token() }}'
                    }

                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                dataType: 'json',
                processResults: function (data, params) {
                    return {
                        results: data,
                    }
                }
            },
        })

    })
        
    </script>
@endpush
