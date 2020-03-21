

$.fn.hitTest = function(x, y){
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    if(x >= bounds.left){
        if(x <= bounds.right){
            if(y >= bounds.top){
                if(y <= bounds.bottom){
                    return true;
                }
            }
        }
    }
    return false;
}

$(document).ready(function() {
   var mouse = {},
      $block = $('#container .block'),
      startFlag = false;

   $(document).on('mousemove', function(e) {
      mouse.x = e.pageX;
      mouse.y = e.pageY;

      $block.each(function(index, el) {
         var $this = $(this),	
            hover = $this.hitTest(mouse.x, mouse.y),
            $bg = $this.find('.bg1, .bg2, .bg3, .bg4, .bg5'),
            $offset = $this.offset(),
            width = $this.width(),
            height = $this.height(),
            center = {
               x : $offset.left + (width / 2),
               y : $offset.top + (height / 2)
            }
            range = {
               x1 : center.x + width / 6,
               x2 : center.x - width / 6,
               y1 : center.y + height / 6,
               y2 : center.y - height / 6
            },
            toStyle = {
               transition : (startFlag) ? 'all 0.3s' : 'none'
            };

         if(!hover) {
            if(mouse.x > range.x1) {
               // right
               toStyle.left = '200%';
            } else if(mouse.x < range.x2) {
               // left
               toStyle.left = '0';
            } else {
               // center
               toStyle.left = '100%';
            }

            if(mouse.y > range.y1) {
               // bottom
               toStyle.top = '200%';
            } else if(mouse.y < range.y2) {
               // top
               toStyle.top = '0';
            } else {
               // center
               toStyle.top = '100%';
            }

            $bg.css(toStyle);
         }
      });

      startFlag = true;
   });
   
   // //실행틀 시작
   //    var menu = $(".icon_scroll");
   //     var content = $("#container .project");
    
   //     menu.click(function(){
   //        /*preventDefault 는 a 태그 처럼 클릭 이벤트 외에 
   //  별도의 브라우저 행동을 막기 위해 사용됩니다.*/
   //        event.preventDefault();
          
          
   //        //.offset()은 선택한 요소의 좌표를 가져오거나 특정 좌표로 이동하게 합니다.
   //        var tt = content.offset().top;
    
   //        //스크롤이 tt의 값에 맞게 움직이게
   //        $("html,body").stop().animate({scrollTop:tt});
   //        });//menu.click() 끝
          
   //        // 윈도우에서 scroll() 스크롤이 작동될 때 일어날 일.
   //        $(window).scroll(function(){
   //        //.scrollTop()은 선택한 요소의 스크롤바 수직 위치를 반환하거나 스크롤바 수직 위치를 정합니다.
   //        var location = $(window).scrollTop();
          
   //        content.each(function() {
   //           //반복문(each)
   //        var tg = $(this);
   //           var idx = tg.index();
             
    
    
   //      });//each() 끝
          
             
   //           });//scroll() 끝
   //  //실행틀 끝
   
   // 클릭 페이지 이동
   

			$('.icon_scroll').click(function(){

			var offset = $('.project').offset(); //선택한 태그의 위치를 반환

                //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함 

	        $('html').animate({scrollTop : offset.top}, 400);

		});



   $block.on('mouseenter', function(e) {
      var $this = $(this),
         $bg = $this.find('.bg1, .bg2, .bg3, .bg4, .bg5'),
         $offset = $this.offset(),
         width = $this.width(),
         height = $this.height(),
         center = {
            x : $offset.left + (width / 2),
            y : $offset.top + (height / 2)
         },
         range = {
            x1 : center.x + width / 6,
            x2 : center.x - width / 6,
            y1 : center.y + height / 6,
            y2 : center.y - height / 6
         },
         fromStyle = {
            transition : 'none'
         },
         toStyle = {
            transition : 'all 0.3s'
         };

      if(mouse.x > range.x1) {
         // right
         fromStyle.left = '200%';
         toStyle.left = '100%';
      } else if(mouse.x < range.x2) {
         // left
         fromStyle.left = '0';
         toStyle.left = '100%';
      } else {
         // center
         fromStyle.left = '100%';
         toStyle.left = '100%';
      }

      if(mouse.y > range.y1) {
         // bottom
         fromStyle.top = '200%';
         toStyle.top = '100%';
      } else if(mouse.y < range.y2) {
         // top
         fromStyle.top = '0';
         toStyle.top = '100%';
      } else {
         // center
         fromStyle.top = '100%';
         toStyle.top = '100%';
      }
      
      $bg.css(fromStyle);
      setTimeout(function() {
         $bg.css(toStyle);
      }, 10);
   });

  

});

