<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
    <!-- Banner 8 About and Footer-->
    <footer>
        <div class="banner8">
            <div class="container">

                <div class="row">
                    <div class="bn8">
                        <div class=" col-md-3-1 ">
                            <div class="picter-logo">
                               <img src = "<?php echo $image [0];?> " alt = "" width="100" height="50"></div>
                            <br>

                            <p class="text20">Nếu bạn cần trợ giúp để mua hàng
                                <br> Hãy đến với cửa hàng <br> Cửa hàng sẽ tận tâm vì khách hàng!</p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a rel="noopener noreferrer" target="_blank" href="#">
                                            <img src="<?php echo get_theme_file_uri('/images/facebook.png')?>" alt="" width="20px">
                                            <span class="sr-only">facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="noopener noreferrer" target="_blank" href="#">
                                            <img src="<?php echo get_theme_file_uri('/images/google-plus.png')?>" alt="" width="20px">

                                            <span class="sr-only">google</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a rel="noopener noreferrer" target="_blank" href="#">
                                        <img src="<?php echo get_theme_file_uri('/images/instagram.png')?>" alt="" width="20px">
                                            <span class="sr-only">instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="noopener noreferrer" target="_blank" href="#">
                                            <img src="<?php echo get_theme_file_uri('/images/pinterest.png')?>" alt="" width="20px">
                                            <span class="sr-only">pinterest</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="bn-about"> -->
                    <div class=" col-md-3-1 px">
                        <div class="dropdown">
                            <b class="text19">Về cửa hàng</b>
                            <div class="dropdown-content">
                                <a class="about" href="">
                                    <p class="bn8-txt">Về chúng tôi</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Chính sách trả lại & hoàn lại tiền</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt" p>Chính sách bảo mật</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Sơ đồ trang web</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Điều khoản và điều kiện</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-3-1 px">
                        <div class="dropdown">
                            <b class="text19">Cần giúp đỡ</b>
                            <div class="dropdown-content">

                                <a class="about" href="">
                                    <p class="bn8-txt">Kiểm tra  đơn hàng</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Thông tin giao hàng</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Liên hệ chúng tôi</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=" col-md-3-1 px">
                        <div class="dropdown">
                            <b class="text19">Tài khoản của bạn</b>
                            <div class="dropdown-content">

                                <a class="about" href="">
                                    <p class="bn8-txt">Tạo tài khoản mới</p>
                                </a>
                                <a class="about" href="">
                                    <p class="bn8-txt">Đăng nhập bằng SĐT</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <div class="container text-center last-mb-none">
                <hr>
                <p class="footer-copyright">
                    © 2021 NHOM 5. All rights reserved </p>
            </div>

        </div>
    </footer>
<?php wp_footer();?>
<script src="./public/js/nhom5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>
<script>$('#recipeCarousel').carousel({
        interval: 5000
    })

    $('.carousel .carousel-item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 2; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
//  ---


</script>

</html>