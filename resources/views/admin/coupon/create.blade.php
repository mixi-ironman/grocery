@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Coupons</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('coupons.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Name coupon</label>
                        <input type="text" class="form-control"  name="name_coupon" aria-describedby="emailHelp" style="text-transform: uppercase;">
                    </div>

                    <div class="mb-3">
                        <label for="type_coupon" class="form-label">Type</label>
                        <select class="form-select" id="type_coupon" name="type" aria-label="Default select example">
                            <option value="0">---Chọn---</option>
                            <option value="money">Money</option>
                            <option value="percent">Phần trăm</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Value</label>
                        <input type="number" class="form-control"  name="value_coupon" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Ngày hết hạn</label>
                        <input type="date" class="form-control"  name="expery_date" aria-describedby="emailHelp">
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
            $('#type_coupon').select2({
                theme: 'bootstrap-5'
            });
        })
    </script>
@endpush
