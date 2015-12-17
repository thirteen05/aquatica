<?php if( !is_home() ): ?>


  <footer class="container-fluid" id="footer">
    <div class="container no-padding">
      <div class="col-md-12">
      
              <?php

                $defaults = array(
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                  wp_nav_menu( $defaults );

              ?>
        
          <div id="footer-social-media-wrapper">
            <ul id="footer-social-list">
              <li><i class="fa fa-facebook font-white"></i></li>
              <li><i class="fa fa-twitter font-white"></i></li>
              <li><i class="fa fa-linkedin font-white"></i></li>
              <li><i class="fa fa-youtube font-white"></i></li>
            </ul>
          </div>
      </div>
    </div>
  </footer>


<?php endif; ?>



          <div class="container-fluid hidden-sm hidden-md hidden-lg" id="mobile-menu">

              <?php

                $defaults = array(
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                  wp_nav_menu( $defaults );

              ?>

          </div>

        <div class="container-fluid hidden-sm hidden-md hidden-lg" id="mobile-menu-toggle">
          <div class="btn btn-default btn-lg btn-block">MENU</div>
        </div>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Scrollify/jquery.scrollify.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/vide/dist/jquery.vide.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            
          $('#mobile-menu-toggle').click(function(){
            
            $('#mobile-menu').stop().fadeToggle();
            
          });

        </script>

        <?php if(is_home()): ?>

        <script>
          

        $('#top-nav').affix({
            offset: {
                top: $('#top-nav').offset().top
            }
        });
          
        if($(window).innerWidth() > 1024){

          $(function() {
              $.scrollify({
                  section : "section",
                  scrollbars: false,
                  after: function(){
                    
                    var currentSection = $.scrollify.current();
                    var currentSectionID = currentSection[0].id;
                    
                    switch(currentSectionID) {
                        case 'section-home-top':
                            $('#snap-trigger-1').siblings().removeClass('active');
                            $('#snap-trigger-1').addClass('active');
                            break;
                        case 'section-home-plans':
                            $('#snap-trigger-2').siblings().removeClass('active');
                            $('#snap-trigger-2').addClass('active');
                            break;
                        case 'section-home-amenities':
                            $('#snap-trigger-3').siblings().removeClass('active');
                            $('#snap-trigger-3').addClass('active');
                            break;
                        case 'section-home-views':
                            $('#snap-trigger-4').siblings().removeClass('active');
                            $('#snap-trigger-4').addClass('active');
                            break;
                        case 'section-home-sales':
                            $('#snap-trigger-5').siblings().removeClass('active');
                            $('#snap-trigger-5').addClass('active');
                            break;
                        default:
                            console.log(currentSectionID);
                    }
                    
                    
                  }
              });
          });
        }

      $(window).resize(function(){

        if($(window).innerWidth() > 1024){

          $(function() {
              $.scrollify({
                  section : "section",
                  scrollbars: false
              });
          });
        }

      });

        </script>

        <?php endif; ?>

        <script>
          
          $.stellar();
            
        </script>

        <script>
            
/*          $("circle").each(function () {
              $(this).popover({
                  container: $("body"),
                  trigger: 'hover',
                  html: true
              });
          });*/

            
          $("circle").each(function () {
              $(this).popover({
                  html: true,
                  trigger: 'manual',
                  container: $("body")
              }).on("mouseenter", function () {
                  var _this = this;
                  $(this).popover("show");
                  $(this).siblings(".popover").on("mouseleave", function () {
                      $(_this).popover('hide');
                  });
              }).on("mouseleave", function () {
                  var _this = this;
                  setTimeout(function () {
                      if (!$(".popover:hover").length) {
                          $(_this).popover("hide")
                      }
                  }, 100);
              });
          });



        </script>
                 


        <?php wp_footer(); ?>

    </body>
</html>