$(function(){
	$("#header").load("data/header.php",function(){
        $("#idx").on("mouseover","li",
            function(){
                clearInterval(slide.timer);
                slide.timer=null;
                if(!($(this).hasClass("active"))){
                    var inx=$("#idx li.active").index()+1;
                    console.log($("#idx li.active").index());
                    $("#slider li:nth-child("+inx+")").animate({
                        opacity:0
                    },1000);
                    $("#idx .active").removeClass("active");
                    $(this).addClass("active");
                    var ind=$("#idx li").index(this)+1;
                    console.log(ind);
                    $(`#slider :nth-child(${ind})`).animate({
                        opacity:1
                    },1000);

                }
            }
        )
        $("#slider").mouseover(function(){
            clearInterval(slide.timer);
            slide.timer=null;
        });
        $("#slider").on("mouseout",
            function(){
                slide.init();
            }
        );
		$("#main_nav li").hover(function(){
			$(this).addClass("active");
		},function(){
			$(this).removeClass("active");
		});
    });
	$("#footer").load("data/footer.php");
});
//�ֲ�ͼ
var slide={
    i:1,
    timer:null,
    init:function(){
        this.timer=setInterval(this.ops.bind(this),5000);
    },
    ops:function(){
        $(`#slider li:nth-child(${this.i})`).animate({
            opacity:"0"
        },1000,function(){
            $("#idx .active").removeClass("active");
        });
        this.i++;
        if(this.i>2){
            this.i=1;
        }
        $(`#slider li:nth-child(${this.i})`).animate({
            opacity:"1"
        },1000,function(){
            $($(this).children("img").attr("alt")).addClass("active");
        });
    }
}
slide.init();

