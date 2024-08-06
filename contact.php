<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AMD | Contact</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <!-- <section class="shortBanner" style="background-image: url(images/bg/team.jpg);">
            <div class="containerFull h-100">
                <div class="shortBannerText">
                    <h1 class="large_heading text-uppercase text-white"><span>Contact us</span></h1>
                </div>
            </div>
        </section> -->





        <section class="form-container">


            <div class="containerFull">
                <div class="row">
                    <div class="col-md-11 mx-auto mt-4">
                        <div class="formBox">


                            <div class="row">
                                <div class="col-lg-3 pt-2 form_heading">
                                    <h2 class="large_heading">Get in touch today!</h2>
                                </div>
                                <div class="col-lg-9 mt-md-3 mt-lg-0">

                                    <form action="#" method="post">

                                        <div class="row">



                                            <div class="col-lg-4 col-6">
                                                <div class="form-group">
                                                    <input type="text" id="full-name" name="full-name" placeholder="Full Name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <div class="form-group">
                                                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <div class="form-group">
                                                    <input type="text" id="company" name="company" placeholder="Company">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">

                                                    <div class="select" id="dropdown1">
                                                        <div class="selected" data-default="Looking For" data-one="option-1" data-two="A free consultation (15-20mins)" data-three="Set up an appointment for legal consultation/advice/strategy">
                                                            Looking For
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="arrow">
                                                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="options">
                                                            <!-- <div>
                                                                <input id="option-1" name="dropdown1" type="radio" />
                                                                <label class="option" for="option-1" data-txt="Looking For"></label>
                                                            </div> -->
                                                            <div>
                                                                <input id="option-2" name="dropdown1" type="radio" />
                                                                <label class="option" for="option-2" data-txt="A free consultation (15-20mins)"></label>
                                                            </div>
                                                            <div>
                                                                <input id="option-3" name="dropdown1" type="radio" />
                                                                <label class="option" for="option-3" data-txt="Set up an appointment for legal consultation/advice/strategy"></label>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <div class="select" id="dropdown2">
                                                        <div class="selected" data-default="Services" data-one="Intellectual Property" data-two="Technology Law" data-three="Transaction" data-four="Litigation" data-five="Other">
                                                            Services
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="arrow">
                                                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="options">
                                                            <div>
                                                                <input id="option-1-2" name="dropdown2" type="radio" />
                                                                <label class="option" for="option-1-2" data-txt="Intellectual Property"></label>
                                                            </div>
                                                            <div>
                                                                <input id="option-2-2" name="dropdown2" type="radio" />
                                                                <label class="option" for="option-2-2" data-txt="Technology Law"></label>
                                                            </div>
                                                            <div>
                                                                <input id="option-3-2" name="dropdown2" type="radio" />
                                                                <label class="option" for="option-3-2" data-txt="Transaction"></label>
                                                            </div>
                                                            <div>
                                                                <input id="option-4-2" name="dropdown2" type="radio" />
                                                                <label class="option" for="option-4-2" data-txt="Litigation"></label>
                                                            </div>
                                                            <div>
                                                                <input id="option-5-2" name="dropdown2" type="radio" />
                                                                <label class="option" for="option-5-2" data-txt="Other"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea id="message" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <p>By submitting this form, you agree to be contacted by our law firm, either by phone, text, or by email.</p>
                                            <button type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contactBottom">

            
            <div class="containerFull">
                <h3 class="heading text-center">Cross-border legal representation in over 12 countries</h3>
                <div class="row">
                    <div class="col-lg-11 mx-auto">


                        <div class="container ps-lg-5">
                            <div class="regions mt-md-5 mt-3 ps-lg-5">
                                <div class="region">
                                    <h2>Asia Pacific</h2>
                                    <p class="fontWeight300">
                                        <span>Seoul</span>
                                        <span>Shenzhen</span>
                                        <span>Singapore</span>
                                        <span>Sydney</span>
                                        <span>Tokyo</span>
                                    </p>
                                </div>
                                <div class="region">
                                    <h2>Europe</h2>
                                    <p class="fontWeight300">
                                        <span>Düsseldorf</span>
                                        <span>Frankfurt</span>
                                        <span>London</span>
                                        <span>Paris</span>
                                    </p>
                                </div>
                                <div class="region">
                                    <h2>Latin America</h2>
                                    <p class="fontWeight300">
                                        <span>Bogotá</span>
                                        <span>Bogotá - Ibarra Rimon</span>
                                        <span>Medellín - Ibarra Rimon</span>
                                    </p>
                                </div>
                                <div class="region">
                                    <h2>Middle East</h2>
                                    <p class="fontWeight300">
                                        <span>Tel Aviv</span>
                                    </p>
                                </div>
                                <div class="region">
                                    <h2>Africa</h2>
                                    <p class="fontWeight300"></p>
                                </div>
                                <div class="region">
                                    <h2>North America</h2>
                                    <div>
                                        <p class="fontWeight300" id="north-america-cities">
                                            <span>Albuquerque</span>
                                            <span>Austin</span>
                                            <span>Birmingham</span>
                                            <span>Boise</span>
                                            <span>Boston</span>
                                            <span class="blnone">Charlotte</span>
                                            <span>Chicago</span>
                                            <span>Dallas</span>
                                            <span>Delaware</span>
                                            <span>Greenville</span>
                                        </p>
                                        <p class="fontWeight300" id="more-north-america-cities" style="display: none;">
                                            <span class="blnone">Houston</span>
                                            <span>Kansas City</span>
                                            <span>Lake Tahoe</span>
                                            <span>Long Island</span>
                                            <span>Los Angeles</span>
                                            <span class="blnone">Miami</span>
                                            <span>Minneapolis</span>
                                            <span>Montreal</span>
                                            <span>New Jersey</span>
                                            <span>New Orleans</span>
                                            <span class="blnone">New York</span>
                                            <span>Northern Virginia</span>
                                            <span>Orlando</span>
                                            <span>Philadelphia</span>
                                            <span>Phoenix</span>
                                            <span class="blnone">Portland</span>
                                            <span>Raleigh</span>
                                            <span>North Carolina</span>
                                            <span>Sacramento</span>
                                            <span>San Diego</span>
                                            <span class="blnone">San Francisco</span>
                                            <span>Santa Barbara</span>
                                            <span>Seattle</span>
                                            <span>Silicon Valley(Menlo Park)</span>
                                            <span class="blnone">St. Louis</span>
                                            <span>Tucson</span>
                                            <span>Washington, D.C.</span>
                                        </p>
                                        <p class="show-more fontWeight300" onclick="toggleMoreCities()">Show More...</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>





        <div class="contactBox">
            <div class="contacticons">
                <div class="iconBox"><i class="fa-solid fa-location-dot"></i></div>
                <p class="fontWeight300"><strong>US Address:</strong><br> 100 Postmaster Drive, #2831 McDonough,<br /> GA 30253, USA</p>
            </div>
            <div class="contacticons">
                <div class="iconBox"><i class="fa-solid fa-mobile-screen"></i></div>
                <p class="fontWeight300">+1 (202) 465-9596</p>
            </div>
            <div class="contacticons">
                <div class="iconBox"><i class="fa-brands fa-linkedin"></i></div>
                <p class="fontWeight300"></p>
            </div>
        </div>


        </section>







        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>