(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow');
            } else {
                $('.fixed-top').removeClass('bg-white shadow');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow').css('top', -45);
            } else {
                $('.fixed-top').removeClass('bg-white shadow').css('top', 0);
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    
})(jQuery);
// 獲取彈跳視窗的div元素
var myPopup = document.getElementById("myPopup");

// 獲取顯示彈跳視窗的按鈕
var myButton = document.getElementById("myButton");

// 獲取隱藏彈跳視窗的按鈕
var 消失 = document.getElementById("消失");

// 當顯示彈跳視窗的按鈕被點擊時
myButton.onclick = function() {
  myPopup.style.display = "block";
}

// 當隱藏彈跳視窗的按鈕被點擊時
消失.onclick = function() {
  myPopup.style.display = "none";
}
myButton.onclick = function() {
    myPopup.style.display = "block";
    return false; // 阻止表單的提交操作
  }
  var popupContainer = document.getElementById('popup-container');
popupContainer.addEventListener('wheel', function(event) {
    // 滾輪事件的處理程式
})
popupContainer.addEventListener('wheel', function(event) {
    var deltaY = event.deltaY;
    // 如果deltaY大於0，表示滾輪向下滾動，要縮小彈跳視窗
    if (deltaY > 0) {
        popupContainer.style.width = (popupContainer.offsetWidth * 0.9) + 'px';
        popupContainer.style.height = (popupContainer.offsetHeight * 0.9) + 'px';
    }
    // 如果deltaY小於0，表示滾輪向上滾動，要放大彈跳視窗
    else if (deltaY < 0) {
        popupContainer.style.width = (popupContainer.offsetWidth * 1.1) + 'px';
        popupContainer.style.height = (popupContainer.offsetHeight * 1.1) + 'px';
    }
});