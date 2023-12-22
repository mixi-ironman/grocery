@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tag</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('tags.update',['id' => $tag->id]) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label  class="form-label">TagName</label>
                        <input type="text" class="form-control"  name="tag_name" aria-describedby="emailHelp" value="{{ $tag->name }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            
        </div>
    </div>
@endsection

