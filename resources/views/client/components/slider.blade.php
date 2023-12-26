<div class=" row slider_list_banner" style="flex-wrap: nowrap !important;overflow: hidden;">
        <div class="col-md-9 slider-wraper-list">
            @foreach($sliders as $slider)
                <div class="slider-wraper_item">
                    <div class="slider-item_img" style="background-image: url('{{ asset('uploads/') }}/{{ $slider->image}}')"></div>
                    {{-- <div class="slider-item_description">
                        <p>Tiện hơn tiền mặt</p>
                        <p>Lợi hơn tiền mặt</p>
                        <a href="#" style="opacity: 1;color:black;background-color:rgb(93,168,138)border-top-left-radius: 12px;border-bottom-right-radius: 12px;">Shop Now!
                            <span
                                ><i
                                    class="fa-regular fa-face-grin-hearts"
                                    style="font-size: 20px; color: rgb(245, 245, 245)"
                                ></i></span
                        ></a>
                    </div> --}}
                </div>
            @endforeach
        </div>
    <div class="col-md-3" style="padding:0 12px 0 0;margin-top:5px;">
        {{-- <div class="row"> --}}
            {{-- <div class="col-md-12"> --}}
                {{-- <div class="slider-item_img__small" style="background-image: url('https://hcm.fstorage.vn/images/2023/12/614-x-397-2x-20231214153303.jpg')"></div> --}}
                <img class="slider-item_img__small" src="https://hcm.fstorage.vn/images/2023/12/614-x-397-2x-20231214153303.jpg">
            {{-- </div> --}}
            {{-- <div class="col-md-12 img-small"> --}}
                <img class="slider-item_img__small" src="https://hcm.fstorage.vn/images/2023/05/614x397_online-01-1--20230505011530.jpg">
            {{-- </div> --}}
        {{-- </div> --}}

    </div>

    {{-- <div class="col-md-12 slider-wraper-list">
            <div class="slider-wraper_item">
                <div class="slider-item_img"></div>
                <div class="slider-item_description">
                    <p>Tiện hơn tiền mặt</p>
                    <p>Lợi hơn tiền mặt</p>
                    <a href="#" style="opacity: 1;color:black;background-color:rgb(93,168,138)border-top-left-radius: 12px;border-bottom-right-radius: 12px;">Shop Now!
                        <span
                            ><i
                                class="fa-regular fa-face-grin-hearts"
                                style="font-size: 20px; color: rgb(245, 245, 245)"
                            ></i>
                        </span
                    ></a>
                </div>

                <div class="slider-wraper-direction" style="display:none;">
                    <img
                        class="translatey rounded-circle"
                        width="30"
                        height="30"
                        src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png"
                        alt="long-arrow-left"
                    />
                    <img
                        class="translatey rounded-circle"
                        width="30"
                        height="30"
                        src="https://img.icons8.com/bubbles/50/right.png"
                        alt="right"
                    />
                </div>
            </div>
    </div> --}}
</div>
