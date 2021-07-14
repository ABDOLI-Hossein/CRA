$(document).ready(function(){
    $("#cra-owl").owlCarousel();
});
$('#cra-owl').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:3,

        },
        1000:{
            items:1,

        }
    }
})


$(".sa-animate-h6").click(function (){

        $(this).toggleClass("activee")
        $('.sa-animate-h6').not(this).removeClass('activee')
        $(".show-hide").fadeIn(1000)








        $('html, body').animate({
            scrollTop: $(".show-hide").offset().top
        });








    if ($(this).hasClass("arch")){
        $(".title-show").html("ARCHITECTURE")
        $(".p1-show").html("The ideal environment for bone healing requires not only the proper chemistry but the proper architecture as well, one that replicates human bone. In these implants, fully interconnected macroporosity exists to mimic the natural structure of a human bone. Along with this, the pore size of this implant also mimics that of natural human bone.")
        $(".p2-show").html("CRA Biotech provides the products which allow bone growth, on and throughout it, to ensure that it is bone cell-friendly. This implant, in many ways, is indistinguishable from a real human bone.")
        $(".li1-show").html("Interconnected macroporosity")
        $(".li2-show").html("Allows bone growth in, on and throughout the implant")
        $(".li3-show").html("Pore size mimics human bone and is bone cell friendly")
    }else if ($(this).hasClass("chemi")){
        $(".title-show").html("CHEMISTRY")
        $(".p1-show").html("While many different bone implants exist, CRA Biotech products are premier quality and offer benefits that others do not. These implants have a bone-friendly chemistry — meaning the granules are comprised of the same components of real human bone — an osteoconductive calcium phosphate and calcium carbonate composite.")
        $(".p2-show").html("Because these products are comprised of the same materials of human bone, they are biocompatible and organically absorbable. By mimicking the chemistry of human bone with our granules, the natural process of remodeling can naturally take place.")
        $(".li1-show").html("Osteoconductive calcium phosphate/ calcium carbonate composite")
        $(".li2-show").html("Absorbable organic binder")
        $(".li3-show").html("Biocompatible and resorbable material")
    }else {
        $(".title-show").html("HANDLING")
        $(".p1-show").html("CRA Biotech’s moldable products such as MAC-Fuse, provide strong intraoperative handling advantages over dry granules alone. The products are moldable and mixable, ensuring optimal handling throughout the process.\n" +
            "Due to the organic binder suspending the granules together in a putty-like state, the grafts can be molded into any desired shape.")
        $(".p2-show").html("The moldable, yet stable material will stay in place and resist irrigation. The moldable products provide several different benefits such as the ability for materials to be mixed in without sacrificing consistency or sticking to surgical gloves. Along with this, they offer the ability to mold, mix, and implant in the surgical site all while remaining as one contiguous mass. Each moldable product is optimized for posterolateral spinal fusion. These benefits separate them greatly from other competitive products with similar properties.")
        $(".li1-show").html("Moldable, mixable material for optimal handling")
        $(".li2-show").html("Stable material stays in place and resists irrigation")
        $(".li3-show").html("Optimized for posterolateral spinal fusion")
    }
})
$(".sa-animate-h6.hand").click(function (){
    if($(".title-show").html() === "HANDLING" && !$(".sa-animate-h6.hand").hasClass("activee")){
        $(".show-hide").fadeOut(1000)

    }

})
$(".sa-animate-h6.arch").click(function (){
    if($(".title-show").html() === "ARCHITECTURE" && !$(".sa-animate-h6.arch").hasClass("activee")){
        $(".show-hide").fadeOut(1000)

    }

})
$(".sa-animate-h6.chemi").click(function (){
    if($(".title-show").html() === "CHEMISTRY" && !$(".sa-animate-h6.chemi").hasClass("activee")){
        $(".show-hide").fadeOut(1000)

    }

})







$(".form input").keypress(function (){
    $(this).addClass("bg-white")
})
$(".form textarea").keypress(function (){
    $(this).addClass("bg-white")
})

$(".menu-item").click(function (){
    $(".sidemenu").fadeOut(500)
	$("body").removeClass("overflow-h")
})
$(".menu").click(function (){
    $(".sidemenu").fadeIn(500)
    $("body").addClass("overflow-h")
    $(".sidemenu").css("display","flex")
    $("#a1").removeClass("close-animation-p-3")
    $("#a2").removeClass("close-animation-p-4")
    $("#a3").removeClass("close-animation-p-5")
})

$(".close").click(function (){
    $(".sidemenu").fadeOut(500)
    $("body").removeClass("overflow-h")
    $("#a1").addClass("close-animation-p-3")
    $("#a2").addClass("close-animation-p-4")
    $("#a3").addClass("close-animation-p-5")

})

$(window).scroll(function (){
    // for(var i=0,i<= 100,i++){
    //     $(".sa-bg-b").css("background-position",""+(i+20)+"%")
    // }

})


$(".learnmore-button").click(function (){
    $('html, body').animate({
        scrollTop: $(".products").offset().top - 100
    }, "slow");

})

$(".learnmore-dif").click(function (){
    $(".learnmore-section").fadeIn(1000)
})
$(".product-detail-close").click(function (){
    $(".learnmore-section").fadeOut(1000)
})

//slider

var slider = $(".slider");
var slides = slider.find("ul").children();
var slideCount = slides.length;
var i = 0;


for (var i=0;i<slideCount;i++){
    var buttonelement = "<div class='buttons' data-sn="+i+">"+(i+1)+"</div>"
    $(".buttonrow").append(buttonelement)
}
$(".buttons").click(function (){
    var sn = Number($(this).attr("data-sn"));
    if (sn != i){
        showSlide(sn);
    }


})
//Start the code

// setInterval(function (){
//     showSlide(i)
// },1000)



$(".arrow-right").click(function (){
    showSlide(i+1)
});
$(".arrow-left").click(function (){
    showSlide(i-1)
})
function showSlide(s){
    $(slides[i]).fadeOut();
    i = (s+slideCount) % slideCount;
    $(slides[i]).fadeIn();
    slider.parent().find(".buttons").removeClass("current");
    slider.parent().find(".buttons:eq("+i+")").addClass("current");
}

var iv = setInterval(autoSlide,3000)
function autoSlide(){
    showSlide(i+1)
}



if ($(window).width() <= 500) {
    $(".sa-animate-h6").click(function (){
        $('html, body').animate({
            scrollTop: $(".show-hide").offset().top
        }, "slow");
    })

}

$(".show-hide-close").click(function (){
    $(".show-hide").fadeOut(1000)
    $(".sa-animate-h6.activee").removeClass("activee")
})


$().saModal()
$(".play-icon").click(function (){
    $(this).css("display","none")
    $(".poster").css("display","none")
    $('.video').get(0).play()
})


$(window).bind("load resize scroll",function(e) {
    var y = $(window).scrollTop();

    $(".sa-animate").css('background-position', '10% ' + parseInt(-y / 6  ) + 'px');
    $(".sa-animate2").css('background-position', '10% ' + parseInt(-y / 8  ) + 'px');

});


$('#submitEmail').click(function (e){


    e.preventDefault();
    $.ajax({
        type : "post",
        dataType : "json",
        url : window.location.href + "wp-admin/admin-ajax.php",
        data : {
            action: 'soroush',
            name: $('#name').val(),
            phone:$('#phone').val(),
            email:$('#email').val(),
            message:$('#textarea').val()

        },
        success: function(response) {
           console.log(response)
        },

    })



})

$(".learnmore-dif").click(function(){
	$('html, body').animate({
            scrollTop: $(".learnmore-section").offset().top
        }, "slow");
})


$("#download").click(function(e){
	e.preventDefault();
	$.ajax({
        type : "post",
        dataType : "json",
        url : window.location.href + "wp-admin/admin-ajax.php",
        data : {
            action: 'download',
            name: $('#dlname').val(),
            phone:$('#dlphone').val(),
            email:$('#dlemail').val(),
           

        },
        success: function(response) {
           console.log(response)
			$(".form-download").hide();
			$(".form-download-sub").hide();
			$("#download").hide();
			$(".download-res-ajax").html("Thanks you<br>Click <a href='wp-content/uploads/2019/03/SD1427-C-MacFuse-SlimJim-1_1.pdf' style='color:#64b84e'>here</a> to download our brochure");
        },

    })
	
})








