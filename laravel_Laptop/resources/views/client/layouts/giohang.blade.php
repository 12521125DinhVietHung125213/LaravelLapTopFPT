<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Giỏ hàng
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">

            <ul class="header-cart-wrapitem w-full">

                @if(session('cart'))

                @foreach (session('cart') as $ma_san_pham => $details )

                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">

                        <img src="/{{ $details['anh_san_pham'] }}" />

                    </div>

                    <div class="header-cart-item-txt p-t-8">

                        <a href="#" class="header-cart-item-name hov-cl1 trans-04">

                            {{$details['ten_san_pham']}} | {{$details['kichco']}}

                        </a>
                        <a class="header-cart-item-name hov-cl1 trans-04">

                            {{$details['mausac']}}

                        </a>

                        <span class="header-cart-item-info">

                            {{$details['soluong']}} x {{number_format($details['gia_tien']) }} VNĐ
                        </span>

                    </div>
                </li>
                @endforeach
                @endif

            </ul>

            <div class="w-full">
                @php
                $total = 0
                @endphp

                @foreach ((array) session('cart') as $ma_san_pham => $details )

                @php
                $total += $details['gia_tien'] * $details['soluong']
                @endphp

                @endforeach
                <div class="header-cart-total w-full p-tb-40">

                    Tổng : {{number_format($total) }} VNĐ

                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="/giohang" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        Chi Tiết
                    </a>

                    <a href="/giohang" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Thanh Toán
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>