<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tanvir Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{url($main->favicon)}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{url($main->logo)}}" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <header class="masthead" style="background-image: url(<?php echo $main->bc_img ?>)">
            <div class="container">
                
                <div class="masthead-subheading">{{$main->sub_title}}</div>

                <div class="masthead-heading text-uppercase">{{$main->title}}</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{url($main->resume)}}">Resume</a>



            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">

                    
                    @if (count($services) > 0)
                    @foreach ($services as $service)


                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class=" <?php echo $service->icon;?> fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">{{$service->title}}</h4>
                            <p class="text-muted">{{$service->description}}</p>
                        </div>
                        
                    @endforeach
                      
                  @endif 

                </div>
            </div>
        </section>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">

                    @if (count($portfolios) > 0)
                    @foreach ($portfolios as $portfolio)

                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $portfolio->id?>">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" style="height: 41vh; weight:41vh" src="{{url($portfolio->small_image)}}" alt="Image" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{$portfolio->client}}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{$portfolio->category}}</div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                        
                    @endif


                </div>
            </div>
        </section>


        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>

                <ul class="timeline">


                 @if (count($abouts) > 0)
                    @foreach ($abouts as $about)


                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url($about->image)}}" alt="image" /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{$about->title1}}</h4>
                                        <h4 class="subheading">{{$about->title2}}</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">{{$about->description}}</p></div>
                                </div>
                            </li>

                    @endforeach
                        
                 @endif

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>

                </ul>
            </div>
        </section>


        <!-- Team-->

        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>

              <div class="row">

                    @if (count($teams) > 0)
                        @foreach ($teams as $team)


                            <div class="col-lg-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="{{url($team->team_image)}}" alt="Team Image" />
                                    <h4>{{$team->title}}</h4>
                                    <p class="text-muted">{{$team->sub_title}}</p>


                                    <a class="btn btn-dark btn-social mx-2" href="{{url($team->linkedin)}}" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-linkedin-in"></i></a>

                                    <a class="btn btn-dark btn-social mx-2" href="{{url($team->facebook)}}" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>

                                    <a class="btn btn-dark btn-social mx-2" href="{{url($team->twitter)}}" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-twitter"></i></a>

                                </div>
                            </div>

                        @endforeach 
                    @endif


                </div>

                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                    </div>

            </div>
        </section>



        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="frontend/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="frontend/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="frontend/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="frontend/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" action="{{route('contact.store')}}" method="POST">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">

                        <div id="success">@include('alert.messages')</div>

                        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->

        <!-- Portfolio item 1 modal popup-->


        @if (count($portfolios) > 0)
        @foreach ($portfolios as $portfolio)

        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $portfolio->id?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="frontend/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{$portfolio->title}}</h2>
                                    <p class="item-intro text-muted">{{$portfolio->sub_title}}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url($portfolio->big_image)}}" alt="Image" />
                                    <p>{{$portfolio->description}}</p>
                                    <ul class="list-inline">

                                        <li>
                                            <strong>Date:</strong>
                                            {{$portfolio->created_at->toDateString()}}
                                        </li>

                                        <li>
                                            <strong>Client:</strong>
                                            {{$portfolio->client}}
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            {{$portfolio->category}}
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
                        
        @endif





        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
       
        <script src="{{ asset('frontend/js/scripts.js') }}"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
