<div class="slider-wraper row slider_list_banner" style="flex-wrap: nowrap !important;overflow: hidden;padding:0px 12px;">
    {{-- <!-- <div class="col-md-12" style="padding: 0"> --> --}}
    @foreach($sliders as $slider)
    <div class="col-md-12 slider-wraper-list">
        {{-- <div class="slider-wraper-list"> --}}
            <div class="slider-wraper_item">
                <div class="slider-item_img" style="background-image: url('{{ asset('uploads/') }}/{{ $slider->image}}')"></div>
                <div class="slider-item_description">
                    <p>Tiện hơn tiền mặt</p>
                    <p>Lợi hơn tiền mặt</p>
                    <a href="#" style="opacity: 1;color:black;background-color:rgb(93,168,138)border-top-left-radius: 12px;border-bottom-right-radius: 12px;">Shop Now!
                        <span
                            ><i
                                class="fa-regular fa-face-grin-hearts"
                                style="font-size: 20px; color: rgb(245, 245, 245)"
                            ></i></span
                    ></a>
                </div>
                {{-- <div class="slider-wraper-direction">
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
                </div> --}}
            </div>
        {{-- </div> --}}
    </div>
    @endforeach
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
