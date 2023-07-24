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