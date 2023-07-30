@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Categories</h4>
            </div>
            @if($errors->has('common'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{isset($categories) ? route('categories.update',['id' => $categories->id]) : '' }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label  class="form-label">Name Category</label>
                        <input type="text" class="form-control"  name="name_category" aria-describedby="emailHelp" value="{{ $categories->name }}">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ $categories->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent Category</label>
                        <select class="form-select" id="parent_id" name="parent_id" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            @foreach($category_parent as $category)
                                @if($categories->parent_id == 0)
                                    <option value="{{ $category->id }}" {{ ($category->id == $categories->id) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @else
                                    <option value="{{ $category->id }}" {{ ($category->id == $categories->parent_id) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <p>Active</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" checked value="1">
                        <label class="form-check-label" >
                            Có
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" value="0">
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
            $('#parent_id').select2({
                theme: 'bootstrap-5'
            });
        })
    </script>
@endpush
