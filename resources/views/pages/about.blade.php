@extends('layouts.main')

@section('maincontent')
<div class="banner inner-banner">
    <div class="container">
       <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item">
                <a href="index.html">
                   <i class="fas fa-home"></i>
                   Home
                </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                About Us
             </li>
          </ol>
       </nav>
    </div>
 </div>
 <section class="who-we-are-style-1 motion-effects-wrap">
    <div class="container">
       <div class="row gutter-30 align-items-center">
          <div class="col-xl-7 col-lg-10 mx-auto">
             <div class="about-img-gallery-style-1">
                <ul class="about-img-gallery-list">
                   <li>
                      <img class="wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="800ms" src="{{ Vite::asset('resources/theme/media/about/about-img_1.jpg')}}" alt="about-img_1" width="551" height="630" style="visibility: visible; animation-duration: 800ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                   </li>
                   <li>
                      <img class="wow fadeInRight animated" data-wow-delay="500ms" data-wow-duration="800ms" src="{{ Vite::asset('resources/theme/media/about/about-img_2.jpg')}}" alt="about-img_2" width="551" height="555" style="visibility: visible; animation-duration: 800ms; animation-delay: 500ms; animation-name: fadeInRight;">
                   </li>
                   <li>
                      <img class="wow fadeInUp animated" data-wow-delay="700ms" data-wow-duration="800ms" src="{{ Vite::asset('resources/theme/media/about/about-img_3.jpg')}}" alt="about-img_3" width="551" height="320" style="visibility: visible; animation-duration: 800ms; animation-delay: 700ms; animation-name: fadeInUp;">
                   </li>
                </ul>
                <ul class="shape-list">
                   <li><img class="motion-effects1" src="{{ Vite::asset('resources/theme/media/elements/element_17.png')}}" alt="element_17" width="73" height="28" style="transform: matrix(1, 0, 0, 1, 29.1338, 22.971);"></li>
                   <li><img class="motion-effects1" src="{{ Vite::asset('resources/theme/media/elements/element_18.png')}}" alt="element_18" width="113" height="104" style="transform: matrix(1, 0, 0, 1, 29.1338, 22.971);">
                   </li>
                </ul>
             </div>
          </div>
          <!-- end col -->
          <div class="col-xl-5 col-lg-10 mx-auto wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 600ms; animation-name: fadeInUp;">
             <div class="about-content-style-1">
                <div class="rt-section-heading-style-2 mb-0">
                   <span class="sub-title">Who We Are</span>
                   <h2 class="heading-tilte">
                      More Than 25+ Years We
                      Provide True News
                   </h2>
                   <p>
                      Nec nascetur mus vicolor rhoncus augue quisque parturient etiam
                      imperdet sit nisi tellus veni faucibus orcimperdiet venena nullam
                      rhoncus curabitur monteante.
                   </p>
                   <p>
                      Nec nascetur mus vicolor rhoncus augue quisque parturient etiam
                      imperdet sit nisi tellus veni faucibus orcimperdiet venena nullam
                      rhoncus curabitur monteante.
                   </p>
                   <div class="btn-wrap">
                      <a href="single-post1.html" class="rt-read-more-primary_2 rt-button-animation-out">
                         Read More
                         <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                            <rect class="rt-button-line" y="7.6" width="34" height=".4">
                            </rect>
                            <g class="rt-button-cap-fake">
                               <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z">
                               </path>
                            </g>
                         </svg>
                      </a>
                      <div class="btn-wrap"></div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <section class="about-section-style-2 section-padding-2 bg--gray counter-appear motion-effects-wrap">
    <div class="container">
       <div class="row gutter-20 align-items-center">

          <div class="col-xl-5 col-lg-6 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 300ms; animation-name: fadeInUp;">
             <div class="about-content-area-2">
                <div class="rt-section-heading-style-2">
                   <h2 class="heading-tilte">
                      We Develop &amp; Create
                      Digital Future.
                   </h2>
                   <p>
                      Nec nascetur mus vicideolor rhoncus augue quisque parturientet
                      imperdet sit nisi tellus veni faucibus orcimperdietenatis nullam
                      rhoncus curabitur monteante.
                   </p>
                </div>
                <div class="skills-wrap-layout-1">
                   <div class="single-skill">
                      <div class="title-bar">
                         <h3 class="title"> Development </h3>
                      </div>
                      <div class="skill-bar">
                         <div class="skill-per" data-per="69%" style="width: 69%;"></div>
                      </div>
                   </div>

                   <div class="single-skill">
                      <div class="title-bar">
                         <h3 class="title">Success</h3>
                      </div>
                      <div class="skill-bar">
                         <div class="skill-per" data-per="88%" style="width: 88%;"></div>
                      </div>
                   </div>

                   <div class="single-skill">
                      <div class="title-bar">
                         <h3 class="title">Finished Projects</h3>
                      </div>
                      <div class="skill-bar">
                         <div class="skill-per" data-per="57%" style="width: 57%;"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end col -->

          <div class="col-xl-7 col-lg-6 wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 800ms; animation-name: fadeInUp;">

             <div class="about-video-wrap-style-1">
                <div class="shape d-none-d-lg-block">
                   <img class="motion-effects1" src="{{ Vite::asset('resources/theme/media/elements/element_19.png')}}" alt="element_19" width="97" height="89" style="transform: matrix(1, 0, 0, 1, 25.7109, -73.9508);">
                </div>
                <div class="item-img">
                   <img src="{{ Vite::asset('resources/theme/media/about/about-img_4.jpg')}}" alt="about-img" width="696" height="425">
                   <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn play-btn-white_xl rt-play-over">
                      <i class="fas fa-play"></i>
                   </a>

                </div>
             </div>

          </div>
          <!-- end col -->

       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>

 <section class="team-seciton-style-1 section-padding-2 motion-effects-wrap">
    <div class="shape-circle">
       <img class="motion-effects5" src="{{ Vite::asset('resources/theme/media/elements/element_20.png')}}" alt="element_20" width="528" height="528">
    </div>
    <div class="container">

       <div class="row">
          <div class="col-xl-5 col-lg-6 mx-auto text-center">
             <div class="rt-section-heading-style-2">
                <h2 class="heading-tilte">
                   Meet Our Team
                </h2>
                <p>
                   Nec nascetur mus vicideolor rhoncus augue quisque parturientet
                   imperdet sit nisi tellus veni faucibus orcimperdietenatis.
                </p>
             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->

       <div class="row gutter-20">

          <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;">
             <div class="team-box-style-1">
                <div class="team-img">
                   <a href="#">
                      <img src="{{ Vite::asset('resources/theme/media/team/team_1.jpg')}}" alt="team_1" width="551" height="610">
                   </a>
                </div>
                <div class="team-content">
                   <h3 class="name"><a href="#">James Stone</a></h3>
                   <span class="designation">Creative Director</span>
                   <ul class="team-social-1 footer-social">
                      <li class="social-item">
                         <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                         </a>
                      </li>
                      <li class="social-item">
                         <a href="https://twitter.com/" class="social-link tw" target="_blank">
                            <i class="fab fa-twitter"></i>
                         </a>
                      </li>
                      <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                      <li class="social-item">
                         <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                            <i class="fab fa-pinterest-p"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- end col -->

          <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms; animation-name: fadeInUp;">
             <div class="team-box-style-1">
                <div class="team-img">
                   <a href="#">
                      <img src="{{ Vite::asset('resources/theme/media/team/team_2.jpg')}}" alt="team_1" width="551" height="610">
                   </a>
                </div>
                <div class="team-content">
                   <h3 class="name"><a href="#">James Stone</a></h3>
                   <span class="designation">Creative Director</span>
                   <ul class="team-social-1 footer-social">
                      <li class="social-item">
                         <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                         </a>
                      </li>
                      <li class="social-item">
                         <a href="https://twitter.com/" class="social-link tw" target="_blank">
                            <i class="fab fa-twitter"></i>
                         </a>
                      </li>
                      <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                      <li class="social-item">
                         <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                            <i class="fab fa-pinterest-p"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- end col -->

          <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 600ms; animation-name: fadeInUp;">
             <div class="team-box-style-1">
                <div class="team-img">
                   <a href="#">
                      <img src="{{ Vite::asset('resources/theme/media/team/team_3.jpg')}}" alt="team_1" width="551" height="610">
                   </a>
                </div>
                <div class="team-content">
                   <h3 class="name"><a href="#">James Stone</a></h3>
                   <span class="designation">Creative Director</span>
                   <ul class="team-social-1 footer-social">
                      <li class="social-item">
                         <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                         </a>
                      </li>
                      <li class="social-item">
                         <a href="https://twitter.com/" class="social-link tw" target="_blank">
                            <i class="fab fa-twitter"></i>
                         </a>
                      </li>
                      <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                      <li class="social-item">
                         <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                            <i class="fab fa-pinterest-p"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- end col -->

          <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 800ms; animation-name: fadeInUp;">
             <div class="team-box-style-1">
                <div class="team-img">
                   <a href="#">
                      <img src="{{ Vite::asset('resources/theme/media/team/team_4.jpg')}}" alt="team_1" width="551" height="610">
                   </a>
                </div>
                <div class="team-content">
                   <h3 class="name"><a href="#">James Stone</a></h3>
                   <span class="designation">Creative Director</span>
                   <ul class="team-social-1 footer-social">
                      <li class="social-item">
                         <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                         </a>
                      </li>
                      <li class="social-item">
                         <a href="https://twitter.com/" class="social-link tw" target="_blank">
                            <i class="fab fa-twitter"></i>
                         </a>
                      </li>
                      <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                      <li class="social-item">
                         <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                            <i class="fab fa-pinterest-p"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- end col -->

       </div>
       <!-- end row -->

    </div>
    <!-- end container -->
 </section>
@endsection
