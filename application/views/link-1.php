<!DOCTYPE HTML>
<html>
    <head>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5XJV5Z6');</script>
        <meta charset="utf-8">
        <style>.async-hide { opacity: 0 !important} </style>
        <script>(function (a, s, y, n, c, h, i, d, e) {
                s.className += ' ' + y;
                h.start = 1 * new Date;
                h.end = i = function () {
                    s.className = s.className.replace(RegExp(' ?' + y), '')
                };
                (a[n] = a[n] || []).hide = h;
                setTimeout(function () {
                    i();
                    h.end = null
                }, c);
                h.timeout = c;
            })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
                    {'GTM-5XJV5Z6': true});</script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hair loss Doctor</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/oimage/Favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="robots" content="noindex, follow"/>
        <meta name="author" content="" />
        <?php $this->load->view('includes/asset'); ?>
        <link href="<?php echo base_url() ?>assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-68204069-1');
        </script>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XJV5Z6"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="gtco-loader" ></div>
        <div class="gtco-loader-transpernt"></div>
        <!--        <div class="overlay-dark"></div>

                <img class="img-overlay">-->

        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container gtco-logo">

                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <div id="gtco-logo pull-left">
                            <a href="http://www.hairmdindia.com/" target="_blank">
                                <img src="<?php echo base_url() ?>assets/oimage/logo.png" class="center-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-12">

                        <ul class="gtco-social-icons pull-right">
                            <li><a href="tel:+91-7875466466" target="_blank" class="visible-xs text-center">   <img src="<?php echo base_url() ?>assets/oimage/mobile.ico" class="icon-mobile">  +91-7875466466 </a><br></li>
                            <li><a  href="#result">Our Results</a></li>
                            <li><a  href="#treatment">Treatments</a></li>
                            <li><a  href="#approach">Our Approach</a></li>
                            <li><a  href="#aboutdoc">About Doctors</a></li>
                            <li>
                                <a href="tel:+91-7875466466" target="_blank" class="hidden-xs">
                                    <img src="<?php echo base_url() ?>assets/oimage/mobile.ico" class="icon">
                                    +91-7875466466
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </nav>

        <div id="gtco-header" class="gtco-cover" role="banner" >
        </div>
        <div class="container-fluid">
            <div class="row header-content">
                <div class="col-md-8 ">
                    <!--<span class="intro-text-small">Welcome to Splash</span>-->
                    <h1>Make your <br>right decision<br> with us &<br> let your hairs live their life.</h1>
                    <hr class="hrgray">
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="form-wrap hidden-xs">
                        <div class="tab pull-right">
                            <ul class="tab-menu">
                                <li class="active gtco-first"><a href="#" data-tab="signup">GET OUR CONSULTATION</a></li>
                                <!--<li class="gtco-second"><a href="#" data-tab="login">Login</a></li>-->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-content-inner active" data-content="signup">
                                    <span class="error"></span>
                                    <form  id="qouteForm" class="fomo_instant" action="<?php echo base_url() ?>user/submitDetails" method="post" enctype="multipart/form-data">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <!--<label for="username">Username or Email</label>-->
                                                <input type="text" name="name" class="form-control name" placeholder="Name*" >
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <!--<label for="password">Password</label>-->
                                                <input type="email" name="email" class="form-control email"  placeholder="Email*">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <!--<label for="password2">Repeat Password</label>-->
                                                <input type="text" name="contact" onkeypress="return isNumberKey(event)" maxlength="10" class="form-control contact" placeholder="Contact*" >
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <!--<label for="password2">Repeat Password</label>-->
                                                <select class="form-control hairline" name="hairline">
                                                    <option value="">Diseases/treatment</option>
                                                    <option value="Male Hair Loss">Male Hair Loss</option>
                                                    <option value="Female Hair Loss">Female Hair Loss</option>
                                                    <option value="Alopetia Areata">alopetia areata</option>
                                                    <option value="Recedeing Hair Line">Recedeing Hair Line</option>
                                                    <option value="Hair Thinning">Hair Thinning</option>
                                                    <option value="Frontal Baldness">Frontal Baldness</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6 col-xs-12 col-lg-6 col-lg-offset-3 ">
                                                <input type="hidden" name="redirect_url" value="<?php echo LINK_1 ?>">
                                                <input type="hidden" name="treatType" value="Diseases/treatment">
                                                <button type="button" class="btn btn-primary text-center submitUserDetails">CONSULT NOW</button>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12 col-lg-12">
                                                    <br>
                                                    <p class="text-center">
                                                        *(Marked fileds are mandatory)
                                                    </p>
                                                    <a href="http://www.hairmdindia.com/disclaimer/" target="_blank"><p class="text-center">
                                                            *Result may vary from patient to patient

                                                        </p></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid   bg-white">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-10 col-md-offset-3 col-xs-offset-1">
                    <hr class="red-4-top-border col-lg-offset-3">
                </div>
            </div>
            <section class="pad-tb-25">
                <h3 class="text-center">We Got Something To Be Proud Of</h3>
                <p class="text-center">
                    We deliver our work with all our efforst and the confidence<br> you all have gave us.

                </p>
                <div class=" bullet-points">
                    <div class="row ">
                        <div class="col-md-3  col-xs-12 ">
                            <img src="<?php echo base_url() ?>assets/oimage/quality.png" alt="quality" class="center-block img img-responsive">

                            <h4 class="text-center">Board Certified Dermatologist & Trichologists</h4>

                        </div>

                        <div class="col-md-2  col-xs-12">
                            <img src="<?php echo base_url() ?>assets/oimage/navigation.png" alt="navigation" class="center-block img img-responsive">

                            <h4>Advanced laser Treatments</h4>

                        </div>
                        <div class="col-md-2 visible-xs">
                            <p class="text-center seemore" data-target="showme">
                                Read more
                                <img src="<?php echo base_url() ?>assets/oimage/arrow.ico" >
                            </p>

                            <p class="text-center seeless" data-target="showme" style="display: none;">
                                Read more
                                <img src="<?php echo base_url() ?>assets/oimage/arrow.ico"  class="arrow">
                            </p>
                        </div>
                        <div class="col-md-2  col-xs-12 hidden-xs showme">

                            <img src="<?php echo base_url() ?>assets/oimage/wallet.png" alt="wallet" class="center-block img img-responsive">

                            <h4>0% Finance/ EMI Option </h4>

                        </div>

                        <div class="col-md-2 col-xs-12 hidden-xs showme">

                            <img src="<?php echo base_url() ?>assets/oimage/Group5.png" alt="Group5" class="center-block img img-responsive">

                            <h4>Cocktail Approach to Hair Loss </h4>

                        </div>

                        <div class="col-md-3  col-xs-12 hidden-xs showme">

                            <img src="<?php echo base_url() ?>assets/oimage/tranexp.png" alt="world" class="center-block img img-responsive">

                            <h4>Trained Therapists </h4>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container-fluid   bg-gray-faint">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-xs-6 col-md-offset-5 col-xs-offset-3">
                    <hr class="red-4-top-border col-lg-offset-3">
                </div>
            </div>
            <section class="pad-tb-25" id="result">
                <h3 class="text-center">Our Results</h3>
                <p class="text-center">
                    We had deliverd the amazing results to our <strong>1,15,986+ patients</strong>
                </p>
                <div class="row  result visible-xs">
                    <div class="" data-wow-delay="2s">
                        <div class="carousel slide" data-ride="carousel" id="result-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#result-carousel" data-slide-to="0" class="active">
                                    <img class="img-responsive " src="#" alt="">
                                </li>
                                <li data-target="#result-carousel" data-slide-to="1">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                                <li data-target="#result-carousel" data-slide-to="2">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                                <li data-target="#result-carousel" data-slide-to="3">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                                <li data-target="#result-carousel" data-slide-to="4">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                                <li data-target="#result-carousel" data-slide-to="5">
                                    <img class="img-responsive" src="#" alt="">
                                </li>

                            </ol>


                            <div class="carousel-inner text-center gallery2">


                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class=" col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/1.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/1.png" alt="1.png" class="img-responsive img-popup">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class=" col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/2.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/2.png" alt="1.png" class="img-responsive img-popup   ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/3.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/3.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/4.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/4.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/5.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/5.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/6.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/6.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/7.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/7.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/8.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/8.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/9.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/9.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/10.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/10.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/11.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/11.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="<?php echo base_url() ?>assets/oimage/12.png" class="big">
                                                        <img src="<?php echo base_url() ?>assets/oimage/12.png" alt="1.png" class="img-responsive img-popup  ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control hidden-xs">
                                <img src="<?php echo base_url() ?>assets/oimage/left.png">
                            </a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control hidden-xs">
                                <img src="<?php echo base_url() ?>assets/oimage/right.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container result hidden-xs gallery">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/1.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/1.png" alt="1.png" class="img-responsive img-popup  ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/2.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/2.png" alt="2.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/3.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/3.png" alt="3.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/4.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/4.png" alt="4.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/5.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/5.png" alt="5.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/6.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/6.png" alt="6.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/7.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/7.png" alt="7.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/8.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/8.png" alt="8.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/9.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/9.png" alt="9.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/10.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/10.png" alt="10.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/11.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/11.png" alt="11.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <a href="<?php echo base_url() ?>assets/oimage/12.png" class="big">
                                <img src="<?php echo base_url() ?>assets/oimage/12.png" alt="12.png" class=" img-responsive img-popup ">
                            </a>
                        </div>
                    </div>
                    <a href="http://www.hairmdindia.com/disclaimer/" target="_blank"> <h5 class="text-center">*Result may vary from patient to patient</h5></a>
                </div>
            </section>
        </div>
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-10 col-md-offset-3 col-xs-offset-1">
                    <hr class="red-4-top-border">
                </div>
            </div>
            <section class="pad-tb-25" id="treatment">
                <h3 class="text-center">How To Choose Best Doctor For Your Hair Loss ?

                </h3>
                <p class="text-center">
                    Some of the best guidelines which one should look for <br>(& we always recommend to our patients) before choosing a doctor for your hair loss.
                </p>
                <div class="container features">
                    <div class="row ">

                        <div class="col-md-12 col-lg-12 col-xs-12">
                            <ul>
                                <li>
                                    The Doctor you see for hair loss a Dermatologist or Trichologist.
                                    <p> A dermatologist is most preferred as they are board certified, trained and authorized to diagnose, recommend & treat<br> all types of hair, skin and nail conditions. They are medically licensed physicians who complete both medical school <br>and residency required to practice dermatology. </p>
                                </li>
                                <li>
                                    Experience of Dermatologist or Practicing Physicians.
                                    <p>It is the most important factor as the skills and practical knowledge grows with practice duration.</p>
                                </li>
                                <div class="col-md-2 visible-xs">
                                    <p class="text-center seemore-list" data-target="shopoint">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico" >
                                    </p>

                                    <p class="text-center seeless-list" data-target="shopoint" style="display: none;">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico"  class="arrow">
                                    </p>
                                </div>
                                <li class="hidden-xs shopoint">
                                    Before After of Previous Patients.
                                    <p>It is the factor which gives you the confidence about the expertise of the doctor. Ask for it.</p>
                                </li>
                                <li class="hidden-xs shopoint">
                                    Detailed Consultation.
                                    <p>
                                        Choose the Doctor or Physician who asks you more question, asks you medical history. This shows the doctor's <br>willingness to treat your condition, permanently.
                                    </p>
                                </li>
                                <li class="hidden-xs shopoint">
                                    Patient Reviews.
                                    <p>
                                        Try to find the previous patients & hear them. Listen what they have to say. It will reveal more about the doctor. Make<br> a use of platforms like practo or google reviews.
                                    </p>
                                </li>
                                <li class="hidden-xs shopoint">
                                    Treatment Modalities Available.
                                    <p>
                                        Always look for it. See the treatments you look for are available with the doctor.
                                    </p>
                                </li>
                                <li class="hidden-xs shopoint">
                                    Ethics.
                                    <p>
                                        Always look for a doctor who is engaged in ethical practices.
                                    </p>
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>
            </section>
        </div>

        <div class="container-fluid bg-gray-faint">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-md-offset-3 ">
                    <hr class="red-4-top-border">
                </div>
            </div>
            <section id="aboutdoc">
                <div class="container docsection">
                    <div class="row ">
                        <div class="col-md-6 col-lg-6 col-xs-12">
                            <div  class="doc-img">
                                <img src="<?php echo base_url() ?>assets/oimage/doc1.jpg" alt="doc1.jpg" class="img img-responsive teamImg" >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12">
                            <h3>Dr. Dhananjay Chavan</h3>
                            <p>Consultant Dermatologist</p>
                            <hr class="hrgray">
                            <ul >
                                <li>
                                    MBBS, DVD
                                </li>
                                <li>
                                    Experience 28+ Years (Since 1989)
                                </li>
                                <div class="col-md-2 visible-xs">
                                    <p class="text-center seemore-doc" data-target="showme-doc">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico" >
                                    </p>

                                    <p class="text-center seeless-doc" data-target="showme-doc" style="display: none;">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico"  class="arrow">
                                    </p>
                                </div>
                                <li class="hidden-xs showme-doc">
                                    80,192+ patients at Kolhapur, Satara & Pune</li>
                                <li class="hidden-xs showme-doc">
                                    Distinguisged speaker at various Hair Transplant and Dermatology Conferences
                                </li>
                                <li class="hidden-xs showme-doc">
                                    Member of AHRS, IMA, IADVL, AAD, CDSI, IACLS

                                </li>
                                <li class="hidden-xs showme-doc">
                                    Internationally Trained Seoul(S.Korea), US
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-6 col-lg-6 col-xs-12 visible-xs">
                            <div  class="doc-img ">
                                <img src="<?php echo base_url() ?>assets/oimage/doc2.jpg" alt="doc1.jpg" class="img img-responsive doc2" >
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5 col-xs-12">
                            <h3>Dr. Sujit Shah</h3>
                            <p>Consultant Dermatologist</p>
                            <hr class="hrgray">
                            <ul >
                                <li>
                                    MBBS, DVD
                                </li>
                                <li>
                                    Experience 19+ Years (Since 1999)
                                </li>
                                <div class="col-md-2 visible-xs">
                                    <p class="text-center seemore-doc2" data-target="showme-doc2">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico" >
                                    </p>

                                    <p class="text-center seeless-doc2" data-target="showme-doc2" style="display: none;">
                                        Read more
                                        <img src="<?php echo base_url() ?>assets/oimage/arrow.ico"  class="arrow">
                                    </p>
                                </div>
                                <li class="hidden-xs showme-doc2">
                                    26550+ patients at Kolhapur, Miraj & Pune
                                </li>
                                <li class="hidden-xs showme-doc2">
                                    Member of IADVL, CDSI & ACSI
                                </li>
                                <li class="hidden-xs showme-doc2">
                                    Skilled and trained expert in modern treatment<br> modalities
                                </li>
                                <li class="hidden-xs showme-doc2">
                                    Skilled and expert in laser treatments
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 hidden-xs">
                            <div  class="doc-img ">
                                <img src="<?php echo base_url() ?>assets/oimage/doc2.jpg" alt="doc1.jpg" class="img img-responsive doc2" >
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xs-6 col-md-offset-4 col-xs-offset-3">
                    <hr class="red-4-top-border col-lg-offset-3">
                </div>
            </div>
            <section class="pad-tb-25">
                <h3 class="text-center">Testimonials</h3>
                <div class="row ">
                    <div class="" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img class="img-responsive " src="#" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2">
                                    <img class="img-responsive" src="#" alt="">
                                </li>
                            </ol>


                            <div class="carousel-inner text-center">


                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>I was roaming around pune for best hair control solution and done treatment with many but results were not as per my expections, finally got to know about HairMD and try to give a thoght to it just before 4mnths of my marriage and OHHHH it worked out best for me.....Doctors and even receptionist are so cooperative and has well teched facility.... its really "Der aaye par durust aaye".</p>
                                                <small>Mr. Aamir khan</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Realistic solution to all hair related issues is what you get here. I had a great experience. The doctors are very co-operative and provide proper attention & care.</p>
                                                <small>Pranav Vivek </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>I came to know about hair md on YouTube. So once i went to the clinic. I was really impressed by experincing the refreshing and the hygienic environment of the clinic. Dr. Manali Shah was my counsellor she made me understand many things about hairfall in details which was really new to me and convincing also. Hence I started my hairfall treatment(Mizo and PRP) under her observation. With a great response and cooperation from staff members you'll always feel that you are in safe hands. Because of such a great treatment by Dr. Manali Shah and her staff I am getting a great amount of Hair regrowth and I have also found my lost self-confidence which has made my life more happy than ever before Thank you Hair MD Thank you so much Dr. Manali Shah and staff</p>
                                                <small>Malhar Shinde </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control hidden-xs">
                                <img src="<?php echo base_url() ?>assets/oimage/left.png">
                            </a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control hidden-xs">
                                <img src="<?php echo base_url() ?>assets/oimage/right.png">
                            </a>
                        </div>
                    </div>
                </div>
                <a href="http://www.hairmdindia.com/disclaimer/" target="_blank">
                    <h5 class="text-center">*Result may vary from patient to patient</h5>
                </a>
            </section>
        </div>

        <div class="container-fluid   bg-gray">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-xs-6 col-md-offset-5 col-xs-offset-3">
                    <hr class="red-4-top-border col-lg-offset-3">
                </div>
            </div>
            <section class="pad-tb-25">
                <h3 class="text-center">Invited On

                </h3>

                <div class="container result">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6 ">
                            <img src="<?php echo base_url() ?>assets/oimage/sahy.png" alt="1.png" class="pull-right img-responsive ">
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6">
                            <img src="<?php echo base_url() ?>assets/oimage/24tas.png" alt="2.png" class=" img-responsive">

                        </div>

                    </div>

                </div>
            </section>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Get Your Hair Transplant at Affordable Price With Advanced Techniques by Experienced Doctors in Pune!</h4>
                    </div>
                    <div class="modal-body">
                        <span class="error-popup"></span>
                        <form id ="qouteForm-popup" class="fomo_instant" action="<?php echo base_url() ?>user/submitDetails" method="post" enctype="multipart/form-data">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control name-popup" placeholder="Name*" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">

                                    <input type="email" name="email" class="form-control email-popup"  placeholder="Email*">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="text" name="contact" onkeypress="return isNumberKey(event)" maxlength="10" class="form-control contact-popup" placeholder="Contact*" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <select class="form-control hairline-popup" name="hairline">
                                        <option value="">Diseases/treatment</option>
                                        <option value="Male Hair Loss">Male Hair Loss</option>
                                        <option value="Female Hair Loss">Female Hair Loss</option>
                                        <option value="Alopetia Areata">alopetia areata</option>
                                        <option value="Recedeing Hair Line">Recedeing Hair Line</option>
                                        <option value="Hair Thinning">Hair Thinning</option>
                                        <option value="Frontal Baldness">Frontal Baldness</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6 col-lg-offset-3 col-lg-6 col-md-offset-3 text-center">
                                    <input type="hidden" name="redirect_url" value="<?php echo LINK_1 ?>">
                                    <input type="hidden" name="treatType" value="Diseases/treatment">
                                    <button class=" text-center submitUserDetails-popup" >CONSULT NOW</button>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-lg-12">
                                        <hr>
                                        <p class="text-center">
                                            *(Marked fileds are mandatory)
                                        </p>
                                        <a href="http://www.hairmdindia.com/disclaimer/" target="_blank"><p class="text-center">
                                                *Result may vary from patient to patient

                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="ErrorModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center text-danger">Error!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            <strong></strong>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php $this->load->view('includes/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/js/simple-lightbox.min.js" type="text/javascript"></script>
        <script>
                                        var gallery = $('.gallery a').simpleLightbox();
                                        var gallery = $('.gallery2 a').simpleLightbox();


        </script>
    </body>
</html>

