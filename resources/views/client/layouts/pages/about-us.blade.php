@extends('client.layouts.master_layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3><strong>GIỚI THIỆU</strong></h3>
                <p>Minimart.com.vn ra đời với sứ mệnh trở thành nền tảng thương mại điện tử dành cho các sản phẩm tư vấn, kết nối nhà cung cấp, người bán trực tuyến và khách hàng cuối để việc kinh doanh online ngày càng đơn giản hơn.</p>
                <p>Đến nay chúng tôi đã thu hút hơn 65.000 người bán hàng trực tuyến có kỹ năng và kinh nghiệm phân phối hơn 135.000 SKU mỗi tháng. Với các danh mục đa dạng bao gồm: Sức khỏe, Làm đẹp, Gia dụng và Thời trang,… Minimart.com.vn đã và đang mang đến cho khách hàng trải nghiệm mua sắm hoàn chỉnh, dễ dàng, an toàn và tiếp tục thu hút sự chú ý của người dùng mới cũng như mở rộng phạm vi sản phẩm.</p>

                <h4><strong>Tầm nhìn</strong></h4>
                <p>Trở thành nền tảng thương mại điện tử cho sản phẩm tư vấn hàng đầu thế giới – tiên phong kiến tạo chuẩn mực và giá trị cho sản phẩm tư vấn.</p>

                <h4><strong>Sứ mệnh</strong></h4>
                <p>Nơi lan tỏa những câu chuyện truyền cảm hứng – Những câu chuyện có sức mạnh thay đổi cuộc đời của mỗi người, giúp cuộc sống mở ra trang mới ổn định, vững vàng và hạnh phúc hơn.</p>
        </div>  
        <div class="col-md-12">
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
