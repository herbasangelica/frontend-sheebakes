@extends('homepage.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')

        @include('homepage.includes.nav')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our</div>
                <div class="masthead-heading text-uppercase">Shee Bakes Cakes & Pastries</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">WHAT WE OFFER</a>
            </div>
        </header>




        <!-- home-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="row text-center">
                    <h2 class="section-heading text-uppercase">WE'VE GOT WHAT YOU NEED!</h2>
                    <h3 class="section-subheading text-muted"> Shee Bakes Cakes and Pastries are a delicious combination of traditional and modern flavors, using only the freshest and highest quality ingredients. From classic chocolate chip cookies,  creative cakes, donut and loaf, there is something for everyone to indulge. Each bake is made with care and attention to detail, ensuring that every bite is bursting with flavor and texture. Whether you're looking for a sweet treat to enjoy with your morning coffee or a special dessert for a special occasion, Shee Bakes Cakes and Pastries are sure to delight you.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 ">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-productping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">OWNER</h4>
                        <h4 class="my-3">Sheeree Pallasa</h4>
                         <i class="fas fa-lock fa-stack-1x fa-inverse"><img class="image-owner" src="assets/img/portfolio/owner.png" alt="..." />
                            </i>
                        
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">MISSION</h4>
                        <p class="text-muted text-center">To provide our customers with the freshest and most delicious pastries and baked goods using only the highest quality ingredients and traditional baking techniques.</p>
                        
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <h4 class="my-3">VISION</h4>
                             <p class="text-muted">To become the premier bakery and pastry product in our community, known for our exceptional products and outstanding customer service, and to be recognized as a leader in the industry for our commitment to sustainability and social responsibility.</p>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="page-section bg-light" id="announcement">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Announcement</h2>
                    <h3 class="section-subheading text-muted"></h3>
                
                <div class="carousel" data-flickity='{ "autoPlay": true }'>
                @foreach ($sliders as $sliderItems)
                    <div class="carousel-cell" style="background-image: url({{ asset($sliderItems->image)}})"></div>
                @endforeach
                </div>  
                    
                </div>
            </div>
        </section>


 <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">OUR BEST SELLER</h2>
                    <h3 class="section-subheading text-muted">Cakes and pastries are a staple in special occasions and offer various shapes, flavors and ingredients. Best sellers include the Korean Strawberry Donut, 8 in 1 Premium Cake, and Strawberry Shortcake, each offering unique flavor, texture, and presentation. A must-try for dessert lovers.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/Strawberry Donut.jpg" alt="..." />
                            <h4>Korean Strawberry Donut</h4>
                            <p class="text-muted">Range Price: Php 250.00 - Php 450.00</p>
                          <!--  
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/8 in 1.png" alt="..." />
                            <h4>8 in 1 Premium Cake</h4>
                            <p class="text-muted">Php 1,500.00</p>
                            <!--
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/Strawberry shortcake.png" alt="..." />
                            <h4>Strawberry Shortcake</h4>
                            <p class="text-muted">Php 1,750.00</p>
                            <!--
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">"Whether it's for birthdays, weddings, or just a sweet treat. Cakes and Pastries will always be a crowd-pleaser and a staple in the dessert industry."</p></div>
                </div>
            </div>
        </section>

        {{-- carousel --}}



        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">WE OFFER</h2>
                    <h3 class="section-subheading text-muted">"Inspiration from favorite food channels meets the boundless imagination, and every bite is a masterpiece in taste and elegance."</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/loaf out.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ASSORTED LOAFS</div>
                                <div class="portfolio-caption-subheading text-muted">Range Price:Php 350.00 - Php 450.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/cake.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CUSTOMIZED CAKES</div>
                                <div class="portfolio-caption-subheading text-muted">Range Price: Php 1,500.00 - Php 3,000.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Gourmet Cookies.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GOURMET COOKIES</div>
                                <div class="portfolio-caption-subheading text-muted">Php 150.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/koreanbunout.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">KOREAN CREAMCHEESE BUN</div>
                                <div class="portfolio-caption-subheading text-muted">Php 85.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/spring in.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPRING IN THE CITY BUN</div>
                                <div class="portfolio-caption-subheading text-muted">Php 55.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/revel bars out.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">REVEL BARS</div>
                                <div class="portfolio-caption-subheading text-muted">Php 150.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">REVIEWS</h2>
                    <div class="timeline-body"><p class="text-muted">#SheeBESTseller</p>
                    <h3 class="section-subheading text-muted">"Bite into fresh baked love with every crumb"</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Strawberry Donut.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Customer Review </h4>
                                    <div class="timeline-body"><p class="text-muted">Strawberry Donut</p>
                                </div>
                            </div>
                            <div class=""><img class="img-review img-fluid" src="assets/img/reviews/review 1.jpg" alt="..." /></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Strawberry shortcake.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Customer Review</h4>
                                    <div class="timeline-body"><p class="text-muted">Strawberry Shortcake</p>
                            </div>
                        </div>
                       <div class=""><img class="img-review img-fluid" src="assets/img/reviews/revstrawcake.png" alt="..." /></div>

                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/kocreambun.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Customer Review</h4>
                                    <div class="timeline-body"><p class="text-muted"> Korean Creamcheese Bun</p>
                            </div>
                        </div>
                         <div class=""><img class="img-review img-fluid" src="assets/img/reviews/revbun.jpg" alt="..." /></div>

                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/8 in 1.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Customer Review</h4>
                                    <div class="timeline-body"><p class="text-muted"> 8in1 Premium Cake</p>
                            </div>
                        </div>
                         <div class=""><img class="img-review img-fluid" src="assets/img/reviews/rev8in1.png" alt="..." /></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of SheeLove
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- owner-->
        <!--
 <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        -->
        
        </section>
        <!-- Clients-->
        <!--
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Contact-->
        <section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">VISIT US</h2>
            <h3 class="section-subheading text-muted">Level 1 Main Mall (under escalator near Greenwich) Robinsons Place Butuan</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400.51179970109496!2d125.53911063509602!3d8.930384865709335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c1d5223f4943%3A0x32ad6376c40dc7ea!2sShee%20Bakes%20Cakes%20%26%20Pastries!5e1!3m2!1sen!2sph!4v1674536002328!5m2!1sen!2sph" width="370" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!--
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            -->
                                <!-- Name input-->
                                <!--
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                            -->
                                <!-- Email address input-->
                                <!--
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                            -->
                                <!-- Phone number input-->
                                <!--
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                            -->
                        
                                <!-- Message input-->
                              
                            
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!--
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!--
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                   -->
                    <!-- Submit Button-->
                    {{-- <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div> --}}
         
        
        @include('homepage.includes.footer')

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Assorted Loafs</h2>
                                    <p class="item-intro text-muted">Price Range: Php 350.00 - Php 450.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/loafs.jpg" alt="..." />
                                    <p>"Indulge in a slice of heaven with our moist banana and nutty walnut loaf."</p>
                                    <ul class="list-inline">
                                        
                                        <li>
                                            <strong>Category:</strong>
                                            Loaf
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        <a href="https://www.foodpanda.ph/">BUY NOW</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Customized Cakes</h2>
                                    <p class="item-intro text-muted">Range Price : Php 1,500.00 - Php 3,000.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/customizeshee1.jpg" alt="..." />
                                    <p>"Unleash your imagination and indulge in the ultimate luxury with our customized cakes."</p>
                                    <ul class="list-inline">
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Cake Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Gourmet Cookies</h2>
                                    <p class="item-intro text-muted">Php 150.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Gourmet Cookies cover.jpg" alt="..." />
                                    <p>"Bite into enjoyment with our gourmet cookies, freshly bake with premium ingredients."</p>
                                    <ul class="list-inline">
                                        
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Cookies
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Korean CreamCheese Bun</h2>
                                    <p class="item-intro text-muted">Php 85.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/korean creamcheese bun.jpg" alt="..." />
                                    <p> "Savor the fluffy goodness of our Korean-style buns."</p>
                                    <ul class="list-inline">
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Bun
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Spring in the City</h2>
                                    <p class="item-intro text-muted">Php 55.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/spring in the city bun.jpg" alt="..." />
                                    <p>"Spring into the city with fresh style and energy!"</p>
                                    <ul class="list-inline">
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Bun
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Revel Bars</h2>
                                    <p class="item-intro text-muted">Php 150.00</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/revel bars.jpg" alt="..." />
                                    <p>"Try Revel Bar Brownies for a taste of bliss."</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Brownies
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection