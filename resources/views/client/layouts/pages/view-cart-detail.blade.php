@extends('client.layouts.master_layout')

@section('content')
{{-- @php
echo"<pre>";
        print_r($carts);
        echo"</pre>";
@endphp --}}

<div class="cart_wrapper">
    @include('client.components.cart_component')
</div>
@endsection

@push('custom-script')
<script>
const app_ = {
     scrollHeader() {
                window.addEventListener('scroll', function () {
                    var stickyElement = document.querySelector('.nav-container');
                    var contentOffsetTop = document.querySelector('.cart_wrapper');

                    if (contentOffsetTop) {
                        // Kiểm tra xem phần tử có tồn tại hay không
                        const topPosition = contentOffsetTop.offsetTop;
                        if (window.scrollY >= topPosition) {
                            stickyElement.classList.add('sticky');
                        } else {
                            stickyElement.classList.remove('sticky');
                        }
                    }
                });
            },
  
            run() {
                this.scrollHeader();

            },
    };

        app_.run();
</script>


@endpush