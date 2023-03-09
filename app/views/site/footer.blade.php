<!--footer-block Start-->
 <div class="row footer-block">

  <div class="col-md-12">

    <ul class="footer-link">
        @foreach($categories as $category)
            <li ><a  href="/articles/{{$category->id}}">{{$category->name}}</a></li>
        @endforeach
    </ul>


  <div class="sub-footer-block">
   <ul class="footer-link">
       @foreach($pages as $page)
           <li><a href="/pages/{{$page->name}}">{{$page->title}}</a></li>|
           {{-- <li><a href="/pages/about-us">About us</a></li>| --}}
       @endforeach
   </ul>

    <div class="copy-right">
        Copyright © {{date('Y')}} {{$site_name}}, All Rights Reserved.
        <span>Total Hits :</span>
        <span>{{ $site_hits}}</span>
    </div>

   </div>
  </div>


   <div class="col-md-12">
      <div>
      <ul class="social-media text-center">
      <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      <li><a href="#"><i class="fa  fa-google-plus-square"></i></a></li>
      </ul>
    </div>
   </div>

</div>
<!--footer-block end-->

</div>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        
        <img class="img-responsive" src="/site_assets/images/body-img-pop-jj.jpg"/>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="/site_assets/js/jquery-1.9.1.min.js"></script>
<script src="/site_assets/js/bootstrap.min.js"> </script>
<script src="/site_assets/js/jquery.cycle.all.js"> </script>
<script src="/site_assets/js/owl.carousel.js"> </script>

<script src="/site_assets/js/custom.js"> </script>


<script src="/site_assets/js/jquery.carouFredSel-6.0.4-packed.js"> </script>
<script type="text/javascript">
      $(function() {
      
        var SearchString = window.location.href;
        // console.log(SearchString);
        // console.log("hii");
    if (SearchString == "http://jagrukjanmat.com/") {
        $('#myModal').modal('show');
    };
    
      
    
      
    

          $(".dropdown").hover(
                  function() {
                      $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");

                  },
                  function() {
                      $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");

                  });

        var _scroll = {
          delay: 1000,
          easing: 'linear',
          items: 1,
          duration: 0.07,
          timeoutDuration: 0,
          pauseOnHover: 'immediate'
        };
        $('#ticker-1').carouFredSel({
          width: 1000,
          align: false,
          items: {
            width: 'variable',
            height:28,
            visible: 1
          },
          scroll: _scroll
        });



        //  set carousels to be 100% wide
        $('.caroufredsel_wrapper').css('width', '100%');

        //  set a large width on the last DD so the ticker won't show the first item at the end
        $('#ticker-2 dd:last').width(2000);
      });
    </script>




<!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="/site_assets/fancybox/jquery.fancybox.js?v=2.1.5"></script>

    <script type="text/javascript" src="/site_assets/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <script>
      //  The function to change the class
      var changeClass = function (r,className1,className2) {
        var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
        if( regex.test(r.className) ) {
          r.className = r.className.replace(regex,' '+className2+' ');
          }
          else{
          r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
          }
          return r.className;
      };

      //  Creating our button in JS for smaller screens
      var menuElements = document.getElementById('menu');
      menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

      //  Toggle the class on click to show / hide the menu
      document.getElementById('menutoggle').onclick = function() {
        changeClass(this, 'navtoogle active', 'navtoogle');
      }

      // http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
      document.onclick = function(e) {
        var mobileButton = document.getElementById('menutoggle'),
          buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

        if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
          changeClass(mobileButton, 'navtoogle active', 'navtoogle');
        }
      }
    </script>


    <!-- Add Thumbnail helper (this is optional)
    <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
     -->
     
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118077824-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118077824-1');
</script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>

    <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">
    stLight.options({publisher: "05d4d8d2-93be-4ad6-99e9-70cf42047ee0", doNotHash: true, doNotCopy: false, hashAddressBar:true });
</script>

</body>
</html>
