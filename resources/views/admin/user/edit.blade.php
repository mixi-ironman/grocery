@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Categories</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update',['id' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label  class="form-label">Name User</label>
                        <input type="text" class="form-control" value="{{ $user->name }}" name="name_user" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ $user->email }}"  name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" value="{{ $user->password }}"  name="password" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Phone</label>
                        <input type="text" class="form-control" value="{{ $user->phone }}"  name="phone" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="3">{{ $user->address }}</textarea>
                    </div>
            
                    <p>Active</p>
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

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            
        </div>
    </div>
@endsection