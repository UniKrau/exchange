/**
 * Created by Вася on 13.02.2016.
 */

$(".supsend").on("click", function () {

    var data = $(this).parents("form").serialize();

    $.ajax({
        type: 'post',
        data: data,
        dataType : "json",
        url: "/send",
        success: function (data) {
            new Messages(data);
            if(data.status =="success"){
                location.reload();
            }
        }
    })
    return false;

});


$(".header-menu a").hover(function() {
    $(this).find("img").attr("src", "/images/calc-active.png")
},
         function() {
        $(this).find("img").attr("src" , "/images/calc.png")
    }
);

$('.scroll').click( function(){

    if ($('.advantages').length != 0) {
        $('html, body').animate({ scrollTop: $('.advantages').offset().top-100 }, 500);
    }
    return false;
});




$(".aut").on("click" , function () {
    var data =$(this).parents("form").serialize();
    $.ajax({
        type:"POST",
        dataType : "json",
        data:data,
        url:"/login/logins",
        success:function(data){
            if(data.status=="success"){
                location.pathname = "/account";
            }
            new Messages(data);
        }
    })
});

$('.restore').on("click",function(){
    var data = $(this).parents("form").serialize();
    $.ajax({
        type: "post",
        data: data,
        url: "/login/restorepassword",
        dataType: "json",
        success: function (data) {
            new Messages(data);

        }
    })
});
$(".lang a").on("click" , function() {
    var lang = $(this).attr("data-lang");
    $.ajax({
        type:"post",
        data:{lang:lang},
        url:"/welcome/SetLanguages",
        success:function(){
            location.reload();
        }
    });
});

$(".reg").on("click" , function(){
    var data =$(this).parents("form").serialize();
    $.ajax({
        type:"POST",
        dataType : "json",
        data:data,
        url:"/login/registration",
        success:function(data){

            new Messages(data);
            if(data.status=="error"){
                setTimeout(function () {
                    location.pathname = "static/lerms"
                } ,2000);

            }
           setTimeout(function () {
               location.reload();
           } ,2000);
        }
    })
});

var Messages = (function () {
    function Messages(data){
        if($(".messages").hasClass("hide")){
            $(".messages").removeClass("hide");
        }
        $(".messages .pull-right").append('<div class="item"><span class="close">x</span><p>'+data.messages+'</p></div>');
        var interval;
        interval = setTimeout(function () {
            $(".messages .item").remove();
            clearTimeout(interval);
            if($(".messages .item").length ==0){
                $(".messages").addClass("hide");
            }
        } ,2000);
    }
    return Messages;
})();

$('.mob-menu').on("click" , function () {
    $(".ac-menu").toggle();
});



var Calc = (function () {
    function Calc() {

        var _this = this;
        this.TableBody = ko.observableArray([]);
        this.count = ko.observable(100);

        this.Selected = ko.observable();
        this.coef = 0.0133;
        this.Period = ko.observableArray([
        	{ name: local.hour, period: 0.041, value: ko.observable(10) , proc: ko.observable() },
            { name: local.day, period: 1, value: ko.observable(10) , proc: ko.observable() },
            { name: local.day7, period: 7, value: ko.observable(10), proc: ko.observable() },
            { name: local.day30, period: 30, value: ko.observable(10), proc: ko.observable() },
            { name: local.day2, period: 76, value: ko.observable(10) , proc: ko.observable()},
            { name: local.day6, period: 180, value: ko.observable(10), proc: ko.observable() },
            { name: local.day1, period: 365, value: ko.observable(10), proc: ko.observable() },
            { name: local.day3, period: 1095, value: ko.observable(10) , proc: ko.observable()},
            { name: local.day6l, period: 2190, value: ko.observable(10), proc: ko.observable() }
        ]);
        this.Money = ko.observableArray();
        this.render = function () {
            $.each(_this.Period(), function (i, e) {
                e.value((_this.count() * _this.coef * e.period).toFixed(8));
                e.proc((100*_this.coef * e.period).toFixed(2));
            });
        }
        this.rendering = function(data){

					_this.count($("input[name='count']").val())
			
            
            $("input[name='countTerax']").val(($("select :selected").val()*_this.count()/0.12).toFixed(6))
        }
				$("input[name='count']").keyup(function(event) {
				var str = $(this).val();
				var newStr = str.replace(/[^0-9\.]+/, '');

				if ( str != newStr ) {
					$(this).val(newStr);
	
				}else{


				}})

        this.sel = ko.observable();
        this.SelectedMoney = ko.observable();

        this.Selected.subscribe(function (e) {

        	$("input[name='countTerax']").val(($("select :selected").val()*_this.count()/0.12).toFixed(6))




        	_this.SelectedMoney(e);
            _this.sel($("select :selected").text())

            _this.render();
        });
        this.count.subscribe(function (e) {

            _this.render();
          
        });

		this.Terax = ko.observable();

		this.T = function(){
			$.ajax({
				type : "GET",
				dataType:'json',
				url : '/api/GetMoney',
				success: function(data){
					$.each(data , function(index, el) {
						_this.Money.push({
							name : el.name,
							price : el.price
						})
					});
				}
			})

			_this.SelectedMoney(_this.Money[0])
			
			_this.Terax = ko.computed(function(){
				if(_this.SelectedMoney()){
					return (_this.SelectedMoney().price*_this.count()/0.12).toFixed(6);
				}
				else{
					return 0;
				}
			});

			$("input[name='countTerax']").keyup(function(event) {
				var str = $(this).val();
				var newStr = str.replace(/[^0-9\.]+/, '');

				if ( str != newStr ) {
					$(this).val(newStr);
	
				}else{
					_this.count(($(this).val()*0.12/$("select :selected").val()).toFixed(6));
				}
			});
				
			
		}
		this.T();

    }
    return Calc;
})();

ko.applyBindings(new Calc());

window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled >50){
        $(".NavbarMenu").addClass('no-tr');
    }else{
        $(".NavbarMenu").removeClass('no-tr');
    }
}

var s = false;
$('#email').blur(function() {
    if($(this).val() != '') {
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if(pattern.test($(this).val())){
            $(this).css({'border' : '1px solid #569b44'});

        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            new Messages({status : "error" , messages :local.erem });
        }
    } else {
        $(this).css({'border' : '1px solid #ff0000'});
        new Messages({status : "error" , messages :local.emp });

    }
});

