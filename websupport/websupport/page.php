<?php get_header(); ?>

	<main role="main">

		 <header>
            <div class="wrapper">
              <a href="/" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Professional Webcare"/>
                <span>Professional Webcare</span>
              </a>
              <nav id="nav">
                <a href="javascript:" class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <ul class="nav-list">
                  <li><a href="#section01">About us</a></li>
                  <li><a href="#section02">Services</a></li>
                  <li><a href="#section03">FAQ</a></li>
                  <li><a href="#section08">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </header>

          <section id="section01">
            <div class="wrapper">
              <div class="section01tagwrap">
                <h3 class="rotate">
                  We improve user conversion by optimizing page loading times,
                  We build mobile websites with excellent user experience,
                  We fix page performance on mobile devices,
                  We create beautiful marketing websites,
                  We integrate marketing tools to existing websites
                </h3>
                <p>Over 72% of all websites are significantly underperforming in areas of performance, mobility, security, or the combination of thereof.
                  We can help to address those issues through support, optimization, and development.  We built our teams of the best talent available and can address any issue or develop any solution you can imagine. Challenge us!</p>
                <a href="#section02" class="read-more">Read more</a>
              </div>
              <div class="section01form">
                <h2>Let's talk</h2>
                <div class="topform">
                  <?php echo do_shortcode('[contact-form-7 id="11" title="Lets talk"]'); ?>
                </div>
              </div>
            </div>
          </section>

          <section id="section02">
            <div class="wrapper">
              <h2>Services</h2>
              <div class="section02wrap">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section02') ) { ?> <?php } ?>
              </div>
            </div>
          </section>

          <section id="section03">
            <div class="wrapper">
              <div class="section03faq">
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="q1">
                    <!--<img src="<?php echo get_template_directory_uri(); ?>/img/icon-repair-white.png"/>
                    <h3>Performance</h3>-->
                    <p>In 2015 the volume of web browsing on tablets and mobile phones has reached the same percentage as for the desktop browsing. For website owners it means that if you don’t have a mobile-friendly site, you risk losing valuable site visitors.</p>
                    <!--<a href="#section08" class="buy-now">Buy now</a>-->
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q2">
                    <p>The attention span of people in the modern world is decreasing and the common expectation for interaction with apps, devices and sites can be described with one word - "instant".  If your site takes more than 3 seconds to load on a mobile device the user is very likely to switch to another task. If it’s more than 5 seconds - there’s a 68% chance that the user will never to try to open that site again. Modern search engines also measure the website speed and that directly affects its ranking and appearance in search results.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q3">
                    <p>Website performance can be significantly improved by rather easy changes, e.g. minifying used Javascript & CSS and removing unnecessary redirects to content and resources. In advanced cases, using Content Distribution Networks for large media data, the optimization of media files, and leveraging browser caching features by using specific instructions in page code helps a lot. Additional fine tuning of the server HTTP connections parameters if applicable can help as well.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q4">
                    <p>Your users' experience regarding using your site should be a major reason. Slow performing website will frustrate visitors, likely making them to go elsewhere. A fast and responsive website will keep them engaged and focused on your brand and services.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q5">
                    <p>Of course. Here at ProWebCare we don’t just create a responsive website from scratch but also convert existing ones to be mobile-friendly, which is the biggest part of the work we do here.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q6">
                    <p>Upgrades often include bug fixes and security patches. Updating on a regular basis helps protect sites against hackers, which is crucial given its public-facing nature and it usually containing sensitive business and user data.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q7">
                    <p>While your site may not stand out as a target, the vast majority of attacks are automated. This makes your website very likely to face an attack, and vulnerabilities on your website will be exploited.  All this happens when various bots developed by hackers crawl the web and look for vulnerable sites. Whenever they’re successful the site gets added to the hacker’s network and can be used for various purposes like black hat SEO, mass spam email sending, database scraping (to get your users’ personal info), and so on.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q8">
                    <p>CMS security doesn’t happen automatically. Even though WordPress is an outstanding platform and a very popular one, it has its problems. Moreover, its popularity significantly contributes to the problems related to vulnerabilities and security.  Hackers are going after the most popular systems out there, so they can gain access to the biggest potential number of websites.  All this means that you should take care of at least the most basic security measures, just to make sure that you can sleep well and not find your website under hackers’ control in the morning.</p>
                  </div>
                </div>
                <!-- Nav tabs -->
                <div class="tab-question">
                  <h2>FAQ</h2>
                  <div class="row searcharea">
                    <input type="text" class="form-control" placeholder="Search"/>
                    <a href="javascript:" class="searchbtn"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#q1" aria-controls="q1" role="tab" data-toggle="tab">Why do I need my website working on mobile?</a></li>
                    <li role="presentation"><a href="#q2" aria-controls="q2" role="tab" data-toggle="tab">What are the other adverse consequences for bad performance in addition to the page being slow?</a></li>
                    <li role="presentation"><a href="#q3" aria-controls="q3" role="tab" data-toggle="tab">What can be done to increase website speed?</a></li>
                    <li role="presentation"><a href="#q4" aria-controls="q4" role="tab" data-toggle="tab">Why should I be concerned with my website's speed?</a></li>
                    <li role="presentation"><a href="#q5" aria-controls="q5" role="tab" data-toggle="tab">Can I convert my existing website into a responsive one?</a></li>
                    <li role="presentation"><a href="#q6" aria-controls="q6" role="tab" data-toggle="tab">Why should I upgrade my CMS to the latest version?</a></li>
                    <li role="presentation"><a href="#q7" aria-controls="q7" role="tab" data-toggle="tab">Why would anyone hack my site?</a></li>
                    <li role="presentation"><a href="#q8" aria-controls="q8" role="tab" data-toggle="tab">I'm using WordPress, isn't it already secure?</a></li>
                  </ul>
                </div>
              </div>
              <div class="section03support">
                <div class="section03support-wrap">
                  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('support') ) { ?> <?php } ?>
                  <a href="#section08">Purchase now</a>
                </div>
              </div>
            </div>
          </section>

          <section id="section04">
            <div class="wrapper">
              <h2>We’re the best at</h2>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section04') ) { ?> <?php } ?>
            </div>
          </section>

          <section id="section05">
            <div class="wrapper">
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon01-sec05.png" alt="Professional Webcare"/></div>
              <div class="about-step">
                <h3>Contact Us</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arroy-sec05.png" alt="Professional Webcare"/>
                <p>we’ll call</p>
              </div>
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon02-sec05.png" alt="Professional Webcare"/></div>
              <div class="about-step">
                <h3>Tell Us</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arroy-sec05.png" alt="Professional Webcare"/>
                <p>about a problem</p>
              </div>
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon03-sec05.png" alt="Professional Webcare"/></div>
            </div>
          </section>

          <section id="section06">
            <div class="wrapper">
             <h2>Expertise</h2>
              <div class="wrap06">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section06') ) { ?> <?php } ?>
               </div>
            </div>
          </section>

         <section id="section07">
           <div id="swiper-slider">
             <div class="wrapper">
               <h2>Testimonials</h2>
               <div class="swiper-container">
                 <div class="swiper-wrapper">
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('swiper-slides') ) { ?> <?php } ?>
                 </div>
               </div>
               <div class="swiper-pagination"></div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>
           </div>
           <div id="customers">
             <div class="wrapper">
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-01.png" alt="Professional Webcare"/></div>
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-02.png" alt="Professional Webcare"/></div>
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-03.png" alt="Professional Webcare"/></div>
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-04.png" alt="Professional Webcare"/></div>
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-05.png" alt="Professional Webcare"/></div>
               <div class="bwWrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/customers-06.png" alt="Professional Webcare"/></div>
             </div>
           </div>
         </section>

         <section id="section08">
            <div class="wrapper">
               <h2>Contact</h2>
               <div class="form">
                  <?php echo do_shortcode('[contact-form-7 id="4" title="Contact"]'); ?>
               </div>
            </div>
         </section>
	</main>
<?php get_footer(); ?>
