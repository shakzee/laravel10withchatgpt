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
                           Contact Us
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>

            <div class="contact-section-layout-1 section-padding-2">
               <div class="container">
                  <div class="row gutter-30 justify-content-between align-items-center">
                     <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="contact-wrap-area-1">

                           <div class="rt-section-heading-style-2">
                              <span class="sub-title">How may we help you</span>
                              <h2 class="heading-tilte">
                                 Office Information
                              </h2>
                              <p>
                                 Mhen an unknown printer took a galley of type and scrambled it to make a type
                                 specimen book. It has survived not only five centuries, but also the leap into
                                 remaining essentially unchanged.
                              </p>
                           </div>

                           <div class="contact-list-area-1 ">
                              <ul class="contact-list-style-1 clearfix">
                                 <li class="list-item media">
                                    <div class="list-icon">
                                       <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="list-content">
                                       <span>Theodore Lowe, Ap #867-859</span>
                                       <span>Sit Rd, Azusa New York</span>
                                    </div>
                                 </li>
                                 <li class="list-item media">
                                    <div class="list-icon">

                                       <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="list-content">
                                       <span>
                                          <a href="mailto:infonouka@gmail.com">infonouka@gmail.com</a>
                                       </span>
                                    </div>
                                 </li>
                                 <li class="list-item media">
                                    <div class="list-icon">
                                       <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="list-content">
                                       <span><a href="tel:+1238895600">+123 88 956 00</a></span>
                                       <span><a href="tel:+1238895600">+123 88 956 00</a></span>
                                    </div>
                                 </li>
                                 <li class="list-item media">
                                    <div class="list-icon">
                                       <i class="fas fa-globe-americas"></i>
                                    </div>
                                    <div class="list-content">
                                       <span>
                                          <a href="https://www.radiustheme.com/" rel="nofollow">www.radiustheme.com</a>
                                       </span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-5 col-lg-6">
                        <form action="{{ route('contact.submit') }}" class="contact-form-style-1 " novalidate="true" method="POST">
                            @csrf
                           <h4 class="form-title">Leave a Message</h4>
                           <div class="form-group">
                              <input type="text" class="form-control rt-form-control" placeholder="Name *" name="name" id="name" data-error="Name field is required" required="">
                              <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control rt-form-control" placeholder="E-mail *" name="email" id="email" data-error="Email field is required" required="">
                              <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                              <input type="tel" class="form-control rt-form-control" placeholder="Phone *" name="phone" id="phone" data-error="Phone number is required" required="">
                              <div class="help-block with-errors"></div>
                           </div>

                           <div class="form-group">
                              <textarea name="message" id="message" class="form-control rt-form-control rt-textarea" placeholder="Message *" data-error="Message field is required" required=""></textarea>
                              <div class="help-block with-errors"></div>
                           </div>
                           <button type="submit" class="submit-btn disabled">Submit Now</button>
                           <div class="form-response"></div>
                        </form>
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>

            <div class="map-section-style-1">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="map-wrapper map-style-1">
                           <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1623138767707!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection
