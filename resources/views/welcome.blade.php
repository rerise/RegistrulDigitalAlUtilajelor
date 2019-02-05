<!-- TODO: make mobile-friendly + menus etc -->
<!-- TODO: newsletter confirmation message in page (successful, errors) -->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrul Utilajelor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap CDN -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

          <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
        <!-- Styles -->

<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Registrul utilajelor</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                  
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">          
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/main_additional.css">
            
        <!-- <style>
            html, body {
                background-color: #fff;
                /*color: #636b6f;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>

    <!--     <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 
 -->

   
        <header id="header" id="home">
                <div class="container">

                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="/"><img src="images/logo.png" alt="" title="" /></a>
                      </div>
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <!-- <li class="menu-active"><a href="/">Home</a></li> -->
                          <!-- <li><a href="about.html">Despre</a></li> -->
                          <!-- <li><a href="cars.html">Cars</a></li> -->
                          <!-- <li><a href="service.html">Service</a></li> -->
                          <!-- <li><a href="blog-home.html">Blog</a></li>     -->
                          <!-- <li><a href="contact.html">Contact</a></li>    -->
                          <!-- <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                              <li><a href="blog-single.html">Blog Single</a></li>
                              <li><a href="elements.html">Elements</a></li>
                            </ul>
                          </li> -->
                          <li>  
                            @if (Route::has('login'))
                                @auth
                                    <a class=nav-link" href="/machines">Administrare</a>

                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a>
                                                     
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @endauth
                            @endif
                          </li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->


            <!-- start banner Area -->
            <section class="banner-area relative" id="home">
                <div class="overlay overlay-bg"></div>  
                <div class="container">

                    <div class="row fullscreen d-flex align-items-center justify-content-center">
                        <div class="banner-content col-lg-7 col-md-6 ">
                            <!-- <h6 class="text-white ">the Royal Essence of Journey</h6> -->

                            <h1 class="text-white text-uppercase">
                                Registrul Utilajelor             
                            </h1>
                            <p class="pt-20 pb-20 text-white">
                               <b>Registrul Digital al Utilajelor</b> este un proiect inițiat de către <a href="http://rerise.org" target="_blank"  target="_blank" class="yellow-link">Re:Rise (Asociația pentru Reducerea Riscului Seismic)</a> care pune la dispoziția <a href="https://www.facebook.com/departamenturgente" target="_blank" class="yellow-link">DSU (Departamentul pentru Situații de Urgență</a> - principala autoritate responsabilă pentru prevenirea și gestionarea situațiilor de urgență la nivel național) o bază de date cu utilajele deținute de către operatori privați (buldozere, excavatoare etc.), care să ajute la răspunsul post-seism al forțelor de salvare.
<br>
<br>
Prin intermediul Registrului Digital al Utilajelor, DSU va putea avea acces instant, în timp real, la informații legate de locația și disponibilitatea utilajelor private, iar autoritățile le vor putea prelua de urgență pentru a fi folosite la intervențiile necesare după un cutremur major: eliberarea drumurilor și a căilor de acces, salvarea persoanelor de sub dărâmături, punerea în siguranță a structurilor afectate ș.a.
<br>
<br>

Conform legilor în vigoare din România, în momentul declarării stării de necesitate, autoritățile responsabile pentru intervenție pot prelua, pe o durată limitată, utilaje private necesare acțiunilor de salvare. Registrul Digital al Utilajelor vine în sprijinul DSU pentru a accelera procesul de salvare și pentru a limita numărul de victime.</p>
                            <a href="/machines" class="primary-btn text-uppercase">Lista utilaje </a>
                        </div>
                        <div class="col-lg-5  col-md-6 header-right">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
    
                        <h4 class="text-white pb-30">
                            <i class="fa fa-user"></i>
                            Lasă-ne detaliile tale de contact aici
                            <br>
                            <br>
                            <i class="fa fa-building"></i>
                            Înregistrează-ţi firma/organizaţia
                            <br>
                            <!-- <br> -->
                               
                        </h4>
                            <!-- <form class="form" role="form" autocomplete="off"> -->

<form method="post" class="form" role="form"  action="{{ route('contacts.store') }}">
              @csrf

              <input type="hidden" name="noredirect" value="true">
              <div class="form-group">
                  <label for="name">Nume:</label>
                  <input type="text" class="form-control" name="name" 
                  placeholder="Nume" value="{{old('name', '')}}"/>
              </div>


              <div class="form-group">
                  <label for="contact_details">Detalii de contact: </label>
                  <textarea name="contact_details" class="form-control"
                  placeholder="Detalii de contact"></textarea>
              </div>

             <!--  <div class="form-group">
                  <label for="trade_register">Nr. registrul comerţului:</label>
                  <input type="text" class="form-control" name="trade_register" placeholder="Nr. registrul comerţului" />
              </div> -->

              <hr>

                <h4 class="text-white pb-30">
               <i class="fa fa-envelope"></i>&nbsp;
                            Lasă-ne un mesaj</h4>
                           
               <div class="form-group">
                    <!-- <label for="message">Mesaj:</label> -->
                  <textarea name="message" class="form-control"
                  placeholder="Mesaj pentru noi (opţional)"></textarea>
              </div>

                      
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Înregistrează</button>
                                    </div>
                                </div>


                            </form>
                        </div>                                          
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->    



            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <!-- <h6>Quick links</h6> -->
                                <ul>
                                    <li><a href="http://rerise.org" target="_blank"><img src="{{asset('images/rerise_logo.jpg')}}" class="image image-responsive img img-thumbnail img-responsive"></a></li>
                                    <li class="text-center">office@rerise.org</li>
                                <div class="footer-social text-center">
                                    <a href="https://web.facebook.com/ReRise.org"  target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="http://rerise.org" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="mailto:office@rerise.org"><i class="fa fa-envelope" target="_blank"></i></a>
                                    <a href="https://www.linkedin.com/company/re-rise---the-seismic-risk-reduction-organization/" target="_blank"><i class="fa fa-linkedin" ></i></a>
                                </div>

                                    <!-- <li><a href="http://rerise.org" target="_blank">rerise.org</a></li> -->
                                    <!-- <li><a href="#">Investor Relations</a></li> -->
                                    <!-- <li><a href="#">Terms of Service</a></li> -->
                                </ul>                               
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6></h6>
                                <!-- <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul> -->                               
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                               <!--  <h6>Resources</h6>
                                <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul>      -->                          
                            </div>
                        </div>                    

                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
<!--                                 <h6>Contactează-ne</h6>
                               
                                <div class="footer-social d-flex align-items-center">
                                    <a href="https://web.facebook.com/ReRise.org"  target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="http://rerise.org" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="mailto:office@rerise.org"><i class="fa fa-envelope" target="_blank"></i></a>
                                    <a href="https://www.linkedin.com/company/re-rise---the-seismic-risk-reduction-organization/" target="_blank"><i class="fa fa-linkedin" ></i></a>
                                </div>
 -->                            </div>
                        </div>    
                        <!-- newsletter: TODO                       -->
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>

                                <div class="">
                                    <!-- <form action="/newsletter" method="post" class="form-inline"> -->
                                        <div class="form-inline">
                                        <!-- @csrf -->
                                        
                                        <input class="form-control" id="email" name="email" placeholder="Introdu email-ul tau aici..." required="" type="email">

                                        <button class="click-btn btn btn-default" 
                                        type="btn" onclick="getMessage()" 
                                        ><span><i class="fa fa-envelope"></i></span></button>
                                         
                                         <p class="status" id="status"></p>
                                         <!--    <button class="click-btn btn btn-default"><span><i class="fa fa-envelope"></i></span></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
 -->
                                        <div class="info"></div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>  
                        <p class="mt-50 mx-auto footer-text col-lg-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Proiect iniţiat de către <a href="http://rerise.org" target="_blank">ReRise</a> <br>  Front-end template - Copyright &copy;<script>document.write(new Date().getFullYear());</script> - made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                    </div>
                </div>
            </footer>   


        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>          
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>          
        <script src="js/easing.min.js"></script>            
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script> 
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/owl.carousel.min.js"></script>          
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>    
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>                  
        <script src="js/parallax.min.js"></script>      
        <script src="js/mail-script.js"></script>   
        <script src="js/welcome.js"></script>  


        <script>
            // $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        </script>

        <script>
            function getMessage() {
                $.ajax({
                   type:'POST',
                   url:'/newsletter-ajax',
                   data: {
                    email:  jQuery('#email').val(),
                    '_token': '<?php echo csrf_token() ?>'
                    },
                   success:function(data) {
                        console.log(data.msg)
                      $("#status").html(data.msg);
                   },
                   // TODO: make error message come from controller and validation
                   error:function(data) {
                        console.log(data.msg)
                      $("#status").html('<span style=color:red>' + 'Format greşit sau eroare de server' + '</p>');
                   }
                });
            }
        </script>

    </body>
</html>
