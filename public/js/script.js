$(document).ready(function(){
    $('.qcontainer').first().attr('id','show');
    $("#next").on("click",function(){
        if($('.qcontainer').last().attr('id')=="show"){
            $('.qcontainer').removeAttr("id");
            $('.qcontainer').first().attr('id','show');
        }
        else{
        $('.qcontainer').each(function(){
            if($(this).attr('id')=="show")
            {
                $(this).next().attr("id","new");
                $(this).removeAttr("id");
            }
        }); 
    var na=$("#new");
    na.removeAttr("id");
    na.attr("id","show");
    }});

    $("#prev").on("click",function(){
        if($('.qcontainer').first().attr('id')=="show"){
            $('.qcontainer').removeAttr("id");
            $('.qcontainer').last().attr('id','show');
        }
        else{
        $('.qcontainer').each(function(){
            if($(this).attr('id')=="show")
            {
                $(this).prev().attr("id","pre");
                $(this).removeAttr("id");
            }
        }); 
    var na=$("#pre");
    na.removeAttr("id");
    na.attr("id","show");
     }});

    /*$("#submit").click(function(){
      $(".forms").remove();
      $("#form").append('<form action="correct.php" name=form1 method="post">');
      document.form1.submit();
    });*/
    $(".header a#icon").click(function(){
        if( $(".header-right").css("display")=="none"){
     $(".header-right").css("display","block");
    }else{
        $(".header-right").css("display","none"); 
    }
    });
    var color=["rgb(151, 68, 68)","rgb(25, 128, 146)","rgb(77, 25, 146)"];
    var i=0;
    $(".class_content").each(function(){
        $(this).css("background-color",color[i]);
        ++i;
    })
});
$('.backbt').on("click",function(){
    $('#result_box').show();
    $('#correction').hide();
})
$('button#trydb').on("click",function(){
   $('#result_box').hide();
   $('#correction').show();
})

$(document).ready(function () {
    var hours = 0;
    var mins = 0;
    var seconds = 0;
    $("#startbtn").click(function () {
    startTimer();
    });
    $("#stopbtn").click(function () {
    clearTimeout(timex);
    });
    $("#resetbtn").click(function () {
    hours = 0;
    mins = 0;
    seconds = 0;
    $("#hours", "#mins").html("00:");
    $("#seconds").html("00");
    });
    function startTimer() {
    timex = setTimeout(function () {
    seconds++;
    if (seconds > 59) {
    seconds = 0;
    mins++;
    if (mins > 59) {
    mins = 0;
    hours++;
    if (hours < 10) {
    $("#hours").text("0" + hours + ":");
    } else $("#hours").text(hours + ":");
    }
    if (mins < 10) {
    $("#mins").text("0" + mins + ":");
    } else $("#mins").text(mins + ":");
    }
    if (seconds < 10) {
    $("#seconds").text("0" + seconds);
    } else {
    $("#seconds").text(seconds);
    }
    startTimer();
    }, 1000);
    }
    });