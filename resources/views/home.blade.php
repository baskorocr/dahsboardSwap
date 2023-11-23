
@extends('layouts.app')
@section('content')
    <!-- ABOUT -->
    <section class="mb-5 d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-20 d-flex align-items-center">
                    <div class="about-text">
                        <h4>Dharma Group Present.</h4>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Swap Battery,</span>
                                <div class="animated-info">
                                    <span class="animated-item">More Simple</span>
                                    <span class="animated-item">More Eazy</span>
                                    <span class="animated-item">Scan And Plug</span>
                                </div>
                        </h1>

                        <p>Make the experience of using your electric motorbike more comfortable and easier with battery damage protection.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="{{ route('register') }}" class="btn mr-lg-2 btn-primary"> Registration</a>
                          
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/undraw/swap.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Our Project Foccust</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image01.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image02.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image03.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image04.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image05.png" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>

   

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9776720105174!2d107.13928277483643!3d-6.26666666134903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698518c7000003%3A0x1693f98f7cc1ce16!2sPT%20Dharma%20Controlcable%20Indonesia!5e0!3m2!1sid!2sid!4v1700713846354!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">PT Dharma Controlcable Indonesia</h3>
                  <p class="footer-text mb-0">(021) 89830325</p>
                  <p><a href="mailto:hello@company.co">hello@company.co</a></p>
                </div>

                <ul class="social-links mt-3">
                     <li><a href="https://dharmagroup.co.id/beranda" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="https://www.instagram.com/dharma_controlcableind/" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="https://www.youtube.com/@dharmacontrolcableindonesi505" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested in working with us? Leave your message below</h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection