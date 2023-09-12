@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Categories</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Name User</label>
                        <input type="text" class="form-control"  name="name_user" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control"  name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="text" class="form-control"  name="password" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Phone</label>
                        <input type="text" class="form-control"  name="phone" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Tỉnh/Thành phố</label>
                        <select class="form-select select_" id="parent_id" name="parent_id" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province->parent_id }}">{{ $province->name }}</option>
                            @endforeach
                            </select>
                    </div>

                    <div class="mb-3">
                        <label for="district" class="form-label">Quận/Huyện</label>
                        <select class="form-select select_" id="district" name="district" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            @foreach($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ward" class="form-label">Phường Xã</label>
                        <select class="form-select select_" id="ward" name="ward" aria-label="Default select example">
                            <option value="0">----------</option>
                        </select>
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

@push('custom-script')
    <script>
        $(document).ready(function () {
            $('.select_').select2({
                theme: 'bootstrap-5'
            });
        })
    </script>
    <script>
        $(document).ready(function () {
           //get category theo parentCategory
           $('#ward').select2({
                theme: 'bootstrap-5',
                ajax: {
                    url: '{{ route('user.get-ward') }}',
                    data: function (params) {
                        var query = {
                            parent_id: $('#district').val(),
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
        });
    </script>
@endpush
