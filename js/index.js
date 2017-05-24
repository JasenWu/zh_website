$(document).ready(function () {
    // $("#product").jCarouselLite({
    //     btnPrev: "#left",
    //     btnNext: "#right",
    //     auto: 4000,//图片停留时间
    //     scroll: 1,//每次滚动覆盖的图片个数
    //     speed: 500, //设置速度，0是不动。其次就是数字越大 ，移动越慢。
    //     vertical: false,//横向（true），竖向（false）
    //     visible: 8, //显示的数量
    //     circular: true, //是否循环
    //     autoScro: false //是否自动滚动
    // });
});

$(function () {
    //$(".lemfsan>div:eq(0)").hide();
    //$(".lemfsan>div:eq(1)").hide();


    //var src1 = $(".lemfsan>div:eq(0)").find(".aimg").attr('src');
    //var src2 = $(".lemfsan>div:eq(1)").find(".aimg").attr('src');
    //var ps1 = $(".lemfsan>div:eq(0)").find(".stygg").html();
    //var ps2 = $(".lemfsan>div:eq(1)").find(".stygg").html();
    //var p1 = $(".lemfsan>div:eq(0)").find(".stygfg").html();
    //var p2 = $(".lemfsan>div:eq(1)").find(".stygfg").html();

    //$(".lfmmtu").find("img").attr("src", src1);
    //$(".rtmme").find(".rtmmss").find("img").attr("src", src2);
    //$(".lfmme").find(".styaa").html(ps1);
    //$(".rtmme").find(".stygg").html(ps2);

    //$(".lfmme").find(".stykd").html(p1);
    //$(".rtmme").find(".stygfg").html(p2);

})
$(function () {
    $(".navlist>li").mouseenter(function () {
        $(this).addClass("on").siblings().removeClass("on");
    })


    $(".showvox>li").mouseenter(function () {
        $(this).addClass("on").siblings().removeClass("on");
    })

    $(".showvox1>li").mouseenter(function () {
        $(this).addClass("on").siblings().removeClass("on");
    })

    $(".www51buycom").slide({ titCell: ".num ul", mainCell: ".51buypic", effect: "fold", autoPlay: true, delayTime: 700, autoPage: true });



})
