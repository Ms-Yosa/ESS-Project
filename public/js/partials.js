// ---------Responsive-navbar-active-animation-----------
function test(){
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top":itemPosNewAnimTop.top + "px", 
        "left":itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click","li",function(e){
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
        "top":itemPosNewAnimTop.top + "px", 
        "left":itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
        });
    });
    }
    $(document).ready(function(){
    setTimeout(function(){ test(); });
    });
    $(window).on('resize', function(){
    setTimeout(function(){ test(); }, 500);
    });
    $(".navbar-toggler").click(function(){
    setTimeout(function(){ test(); });
    });

//  Modal base
    $( document ).ready(function() {
        $('.trigger').on('click', function() {
           $('.modal-wrapper').toggleClass('open');
          $('.page-wrapper').toggleClass('blur-it');
           return false;
        });
      });

      $( document ).ready(function() {
        $('.msg-trigger').on('click', function() {
           $('.msg-modal-wrapper').toggleClass('msg-open');
          $('.msg-page-wrapper').toggleClass('msg-blur-it');
           return false;
        });
      });


  		function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

		

      $("#chat_input").on('keypress', function(evt) {
        var msg = $(this).val();
        if (evt.which == 13 && msg) {
          var dom = '<div class="ours"><span class="thumb"></span><span class="msg">' + msg + '</span></div>';
          $(".convo").append(dom);
          $(this).val('');
        }
      });