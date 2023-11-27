@extends('client.layouts.master_layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <h1>Thông tin liên lạc</h1>
            <hr>
            <div style="font-size:20px;font-style:italic">
                <h3>Thông tin cửa hàng</h3>
                <strong>Cửa hàng tiện lợi HT Mini mart</strong>
                <p>Địa chỉ: Yên xá Tân Triều Hà Nội</p>
                <p>SDT: 0931012321</p>
                <p>Email: phamvannam.mixi@gmail.com</p>
                <hr>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d465.6857062803402!2d105.79486698984843!3d20.973161026906894!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad238f46244b%3A0xe92c69d3c0eea5a6!2sHT%20mini%20Mart!5e0!3m2!1svi!2s!4v1701013467067!5m2!1svi!2s"
                    width="100%"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <form action="{{ route('contact.store') }}" method="POST" style="border-radius:5px;box-shadow: 2px 2px 5px #deb8e6;padding:20px;">
                    @csrf
                    <div style="display:flex;align-content:center;margin:20px 0">
                        <div class="col-md-6">
                            <div class="form-group comment-form-author">
                                <input class="form-control" type="text" name="name" id="contact_name" value="{{ old('name') }}" placeholder="Tên...">
                                @error('name')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div style="opacity:0">-</div>
                        <div class="col-md-6">
                            <div class="form-group comment-form-email">
                                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email...">
                                @error('email')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group comment-form-comment">
                            <textarea class="form-control" name="message" id="cmt-content" cols="30" rows="6" placeholder="Nội dung đánh giá...">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="contact-notification" ></div>
    
                    {{-- <div class="form-group btn-form-submit" id="send-message">
                        <button class="button-contactForm translatex"  style="font-size:18px;font-weight:500">Gửi phản hồi</button>
                    </div> --}}
                    @if(session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <button type="submit" class="translatex" style="padding:5px 8px; background-color:rgb(175, 220, 175);outline:none; border-radius:10px;">Gửi phản hồi</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('custom-script')
<script>
    $(document).ready(function(){
        // Ẩn thông báo sau 1 giây
        setTimeout(function(){
            $("#success-alert").fadeOut(500);
        }, 1000);
    });
</script>
@endpush
