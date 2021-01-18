<?php get_header()?>


<!-- Banner 1 Personalized Photo Gifts -->
<div class="banner">
    <div class="container">
        <h1 class="st-current">Chào Mừng Khách Hàng<br>
            Đã ĐẾN VỚI SHOP</h1>
        <h3 class="text1">Wellcome To Sáo Trúc Việt Nam</h3>
        <br>
        <a class="btnshop" href="">Mua Ngay</a>

    </div>

</div>
<!--Get Product-->
<div class="banner7">\
<div class="container">
    <h3>Sản phẩm mới nhất</h3>
    <div class="woocommerce columns-4 "><div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
    <form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
					<option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
					<option value="popularity" >Thứ tự theo mức độ phổ biến</option>
					<option value="date" >Mới nhất</option>
					<option value="price" >Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
			</select>
    <input type="hidden" name="paged" value="1" />
	</form>
    <ul class="products columns-4">
        <?php $args = array( 'post_type' => 'product',
                        'posts_per_page' => 12
                        );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                                woocommerce_get_template_part( 'content', 'product' );
                        endwhile;
                } else {
                        echo __( 'No products found' );
                }
                wp_reset_postdata();

        ?>
        
</ul>
</div>
<!--/.products-->
</ul>
</div>   
    </div>

<div class="banner2">
    <div class="container">
        <h4 class="text2">Tại sao bạn nên đến với shop?</h4>
        <br>
        <h4 class="right">━━━━</h4>

        <h2 class="text3"><b>Sáo Trúc Việt Nam <br> Tự Hào Hàng Việt</b></h2>
        <br>
        <b><em class="text4"><b>Shop sẽ mang đến những chất lượng về từng loại sáo</b></em></b>
        <br>
        <br>
        <div class="">
            <iframe class="video-demo" src="https://www.youtube.com/embed/iUJSAY0u81k" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

    </div>
</div>

<!-- Banner 3 How to Make a nhom5 Prints-->
<div class="banner3">
    <div class="container">
        <h2 class="text7"><b>CÁCH MUA HÀNG Ở SHOP</b></h2>
        <h4 class="horizontal">━━━━</h4>
        <div class="row">
            <div class="col-sm-4">
                <div class="mySlides">
                    <div class="class">
                        <img class="bg-or" src="<?php echo get_theme_file_uri('/images/Untitled.png') ?>" alt="">
                        <img class="imes" src="<?php echo get_theme_file_uri('/images/icon1.png') ?>" alt="">
                        <p class="text8">Bước 1. Lựa Chọn Sáo Thích Hợp <br> SÁO TRÚC VIỆT NAM</p>
                        <p class="text9">Hãy ghé vào cửa hàng để lựa cho mình một loại sáo mình thích nhất</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mySlides ">
                    <div class="class">
                        <img class="bg-or" src="<?php echo get_theme_file_uri('/images/Untitled.png') ?>" alt="">
                        <img class="imes" src="<?php echo get_theme_file_uri('/images/upload.png') ?>" alt="">
                        <p class="text8">Bước 2. Tiến Hành Thanh Toán Đơn Hàng <br> SÁO TRÚC VIỆT NAM</p>
                        <p class="text9">Lựa Chọn loại thanh toán. <br>Thanh toán tiền mặt.
                            <br>
                            Thanh toán online.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mySlides ">
                    <div class="class">
                        <img class="bg-or" src="<?php echo get_theme_file_uri('/images/Untitled.png') ?>" alt="">
                        <img class="imes" src="<?php echo get_theme_file_uri('/images/pin.png') ?>" alt="">
                        <p class="text8">Bước 3. Giao Nhận Hàng <br> SÁO TRÚC VIỆT NAM</p>
                        <p class="text9">Tiến hành nhận hàng. <br> Nhận hàng liền tay khi thanh toán tiền mặt.
                            <br>
                            Đợi shipper giao hàng</p>
                    </div>
                </div>
            </div>
            <div class="dt">
                <span class="dot" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>
        </div>
    </div>


</div>

<div class="banner4">
    <div class="container">
        <h2 class="text10"><b>SẢN PHẨM BÁN CHẠY Ở CỬA HÀNG</b></h2>
        <h4 class="horizontal">━━━━</h4>
        <p class="text11">Hiện nay sáo là dụng cụ âm nhạc được mọi người ưa chuộng với âm thanh làm cho người nghe thư giản hơn. <br>
                        Đến với cửa hàng SÁO TRÚC VIỆT NAM là sự lựa chọn hoàn hảo đối với mội người.
        </p>
        <div class="bn-cl4">
            <div class="row class2">

                <div class="col-sm-4">

                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/saotieu.jpg') ?>" alt="" height="250" wight="250">

                    <p class="text12">Sáo Tiêu</p>

                </div>
                <div class="col-sm-4">
                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/saootruc.jpg') ?>" alt=""height="250" wight="250">
                    <p class="text12">Sáo Trúc</p>
                </div>
                <div class="col-sm-4">
                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/sao10lo.jpg') ?>" alt=""height="250" wight="250">
                    <p class="text12">Sáo 10 lỗ</p>

                </div>
            </div>
            <div class="row class2">
                <div class="col-sm-4">

                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/saoinox.jpg') ?>" alt=""height="250" wight="250">

                    <p class="text12">Sáo Inox</p>

                </div>
                <div class="col-sm-4">
                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/saosi.JPG') ?>" alt=""height="250" wight="250">
                    <p class="text12">Sáo Si</p>
                </div>
                <div class="col-sm-4">
                    <img class="img-bn4" src="<?php echo get_theme_file_uri('/images/saolatram.png') ?>" alt=""height="250" wight="250">
                    <p class="text12">Sáo La Trầm</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner 5 Customer Reviews -->
    <div class="banner5">
        <div class="container">
            <h2 class="text13"><b>Đánh giá khách hàng </b></h2>
            <h4 class="horizontal">━━━━</h4>
            <div class="bn5" style="display: flex;">

                <br>
                <div class="container my-3">

                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="picter-review">
                                        <img class="bn5-img" src="<?php echo get_theme_file_uri('/images/saotieu.jpg') ?>"
                                            alt="" height="200">
                                        <p class="bn5-text"><b>John</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>

                                </div>

                                <div class="carousel-item">

                                    <div class="picter-review">
                                        <img class="bn5-img"
                                            src="<?php echo get_theme_file_uri('/images/1.jpg') ?>" alt=""
                                            height="200">
                                        <p class="bn5-text"><b>Williams</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="picter-review">
                                        <img class="bn5-img"
                                            src="<?php echo get_theme_file_uri('/images/2.jpeg') ?>" alt=""
                                            height="200">
                                        <p class="bn5-text"><b>Anthony</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="picter-review">
                                        <img class="bn5-img"
                                            src="<?php echo get_theme_file_uri('/images/3.jpg') ?>" alt=""
                                            height="200">
                                        <p class="bn5-text"> <b>Jeson</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="picter-review">
                                        <img class="bn5-img" src="<?php echo get_theme_file_uri('/images/4.jpg') ?>"
                                            alt="" height="200">
                                        <p class="bn5-text"><b>John</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="picter-review">
                                        <img class="bn5-img"
                                            src="<?php echo get_theme_file_uri('/images/5.jpg') ?>" alt=""
                                            height="200">
                                        <p class="bn5-text"><b>Williams</b></p>
                                        <div class="star">
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i>
                                            <i><img src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                                                    width="15px"></i> <q>4.82</q>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon ktc" aria-hidden="true"
                                    style="background-color: #383838 ;  width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon ktc" aria-hidden="true"
                                    style="background-color: #383838;  width: 35px; height: 35px; "></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class3">
                <hr>
                <p class="text14">Khách hàng của chúng tôi tuyệt vời   <b class="text15">Đánh giá </b>
                    <i><img class="icon-star" src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                            width="20px"></i>
                    <i><img class="icon-star" src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                            width="20px"></i>
                    <i><img class="icon-star" src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                            width="20px"></i>
                    <i><img class="icon-star" src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                            width="20px"></i>
                    <i><img class="icon-star" src="https://image.flaticon.com/icons/svg/1828/1828884.svg" alt=""
                            width="20px"></i><b class="text15"> 4.8</b> trên tổng số dựa trên <b class="text15">73241
                    </b>nhận xét</p>
                <hr>
            </div>

        </div>

    </div>

</div>
<div class="banner6">
    <div class="container bn6">
        <h4 class="text16"><b>Các câu hỏi thường gặp</b></h4>
        <h4 class="horizontal2">━━━━━</h4>
        <div class="row">
            <div class="col-md-6">

                <div class="accor">
                    <li>
                        <div class="accordion chevron_toggleable glyphicon fas fa-chevron-down"
                            href="javascript:void(0);">
                            <b class="bn6-txt">1. Thời gian giao hàng là bao lâu?</b>
                            <i class=""></i>
                        </div>
                        <ul class="panel">
                            <p class="bn6-txt2">Dựa vào khoảng cách khách hàng đặt hàng thì shop sẽ có những thời gian khác nhau để giao hàng thông thường thì 3 đến 5 ngày. </p>
                        </ul>
                    </li>

                    <li>
                        <div class="accordion chevron_toggleable glyphicon fas fa-chevron-down"
                            href="javascript:void(0);">
                            <b class="bn6-txt">2. Chất lượng hàng như thế nào?</b>

                        </div>
                        <ul class="panel">
                            <p class="bn6-txt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </ul>
                    </li>

                    <li>
                        <div class="accordion chevron_toggleable glyphicon fas fa-chevron-down"
                            href="javascript:void(0);">
                            <b class="bn6-txt">3. Làm thế nào để liên hệ với shop khi sản phẩm có sự cố?</b>

                        </div>
                        <ul class="panel">
                            <p class="bn6-txt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </ul>
                    </li>
                    <li>
                        <div class="accordion chevron_toggleable glyphicon fas fa-chevron-down"
                            href="javascript:void(0);">
                            <b class="bn6-txt">4. Thanh toán online có nhận thẻ ngoại không?</b>

                        </div>
                        <ul class="panel">
                            <p class="bn6-txt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </ul>
                    </li>
                    <li>
                        <div class="accordion chevron_toggleable glyphicon fas fa-chevron-down"
                            href="javascript:void(0);">
                            <b class="bn6-txt">5. Điều gì có thể làm tôi tin tưởng shop?</b>

                        </div>
                        <ul class="panel">
                            <p class="bn6-txt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </ul>
                    </li>
                    <b><a class="showmore" href="#">Xem Tiếp ❯❯</a> </b>

                </div>
            </div>


        </div>
    </div>
    <br>


</div>


    <?php get_footer();
?>