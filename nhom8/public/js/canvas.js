$('.accordion').click(function (e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .panel').removeClass('show');
        $this.parent().parent().find('li .panel').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
   
});
 $('.chevron_toggleable').on('click', function() {
        $(this).toggleClass('fas fa-chevron-down fas fa-chevron-up');
    });
//khai báo biến slideIndex đại diện cho slide hiện tại
var slideIndex;
// KHai bào hàm hiển thị slide
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        if (screen.width < 430) {
            slides[i].style.display = "none";
        }
        else {i
            // slides[slideIndex].style.display = "none";
    
        }
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activer", "");
    }
    
 
    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " activer";
    //chuyển đến slide tiếp theo
    slideIndex++;
    //nếu đang ở slide cuối cùng thì chuyển về slide đầu
    if (slideIndex > slides.length - 1) {
        slideIndex = 0
    }
    //tự động chuyển đổi slide sau 5s
    setTimeout(showSlides, 5000);
}
//mặc định hiển thị slide đầu tiên 
showSlides(slideIndex = 0);


function currentSlide(n) {
    showSlides(slideIndex = n);
}
;
