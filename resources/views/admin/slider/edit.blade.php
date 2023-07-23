@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sliders</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.update',['id' => $slider->id]) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label  class="form-label">Name slider</label>
                        <input type="text" class="form-control"  name="name_slider" aria-describedby="emailHelp" value="{{ $slider->name }}">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ $slider->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image"  class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                    </div>

                    <p>Active</p>
                    <div class="form-check">
                       <input class="form-check-input" type="radio" name="is_active" {{ ($slider->is_active == 1) ? 'checked' : '' }} value="1">
                        <label class="form-check-label" >
                            Có
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" {{ ($slider->is_active == 0) ? 'checked' : '' }}  value="0">
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
