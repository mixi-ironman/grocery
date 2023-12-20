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
                        <input type="text" class="form-control {{ $errors->has('name_coupon') ? 'is-invalid' : '' }}" value="{{ old('name_coupon') }}" name="name_coupon" aria-describedby="emailHelp" style="text-transform: uppercase;">
                        @error('name_coupon')
                            <p class="error text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type_coupon" class="form-label">Type</label>
                        <select class="form-select {{ $errors->has('type') ? 'is-invalid' : '' }}" id="type_coupon" name="type" aria-label="Default select example">
                            <option value="">---Chọn---</option>
                            <option value="money">Money</option>
                            <option value="percent">Phần trăm</option>
                        </select>
                        @error('type')
                            <p class="error text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Giới hạn</label>
                        <input type="number" class="form-control {{ $errors->has('usage_limit') ? 'is-invalid' : '' }}" value="{{ old('usage_limit') }}" name="usage_limit" >
                        @error('usage_limit')
                            <p class="error text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Value</label>
                        <input type="number" class="form-control {{ $errors->has('value_coupon') ? 'is-invalid' : '' }}" value="{{ old('value_coupon') }}" name="value_coupon" aria-describedby="emailHelp">
                        @error('value_coupon')
                            <p class="error text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Ngày hết hạn</label>
                        <input type="date" class="form-control {{ $errors->has('expery_date') ? 'is-invalid' : '' }}"  name="expery_date" aria-describedby="emailHelp">
                        @error('expery_date')
                            <p class="error text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            @if($errors->any())
                <script>
                    // Sử dụng JavaScript để đặt focus vào ô input đầu tiên không hợp lệ
                    document.addEventListener('DOMContentLoaded', function() {
                        let firstErrorInput = document.querySelector('.is-invalid');
                        if (firstErrorInput) {
                            firstErrorInput.focus();
                        }
                });
                </script>
                @endif
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
