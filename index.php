<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AMD | Home</title>
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
        <div class="heroBanner">
            <div class="containerFull">
                <div class="bannerText">
                    <h1 class="heading"><span class="large_heading">20+</span> Areas of Expertise</h1>
                    <h2 class="heading mt-md-4 mt-2 text-center">Seamless cross border Legal representation in</h2>
                    <h3 class="heading mt-md-4 mt-2">over <span class="large_heading">12 countries</span></h3>
                    <!--<h3 class="heading mt-lg-4 mt-md-3 mt-2">In Partnership with <span class="large_heading">RIMON LAW</span></h3>-->
                    <h3 class="heading mt-md-4 mt-2">Award-winning Partners</h3>
                    <a href="#clientLogos"><i class="bi bi-chevron-down"></i></a>
                </div>
            </div>
        </div>
        <section class="bgBlack" id="clientLogos">
            <div class="containerFull">
                <h4 class="large_heading letterSpace2 text-center text-white text-uppercase">Awards</h4>
                <div class="row mt-lg-5">
                    <div class="col-md-10 offset-md-1">
                        <div class="awardSlider">
                            <div class="itemAward">
                                <div class="innerAward">
                                    <picture>
                                        <source srcset="images/award/asian-legal-business.webp" type="image/webp" />
                                        <img src="images/award/asian-legal-business.png" />
                                    </picture>
                                </div>
                            </div>
                            <div class="itemAward">
                                <div class="innerAward">
                                    <picture>
                                        <source srcset="images/award/legal-pow.webp" type="image/webp" />
                                        <img src="images/award/legal-pow.png" />
                                    </picture>
                                </div>
                            </div>
                            <div class="itemAward">
                                <div class="innerAward">
                                    <picture>
                                        <source srcset="images/award/women-busines-law.webp" type="image/webp" />
                                        <img src="images/award/women-busines-law.png" />
                                    </picture>
                                </div>
                            </div>
                            <div class="itemAward">
                                <div class="innerAward">
                                    <picture>
                                        <source srcset="images/award/good-food.webp" type="image/webp" />
                                        <img src="images/award/good-food.png" />
                                    </picture>
                                </div>
                            </div>
                            <div class="itemAward">
                                <div class="innerAward p-3">
                                    <picture>
                                        <source srcset="images/award/india-business.webp" type="image/webp" />
                                        <img src="images/award/india-business.png" />
                                    </picture>
                                </div>
                            </div>
                            <div class="itemAward">
                                <div class="innerAward p-3">
                                    <picture>
                                        <source srcset="images/award/dispute-law.webp" type="image/webp" />
                                        <img src="images/award/dispute-law.png" />
                                    </picture>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5">
                    <div class="col-md-4">
                        <div class="itemAwardText">
                            <p class="title">Member of Berkeley Global Society, a selective close-knit network which works together internationally </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="itemAwardText">
                            <p class="title">Good Food India - Member as <br class="d-none d-lg-block" />Legal Partner</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="itemAwardText broderNone">
                            <p class="title">Empanelled as a Facilitator <br class="d-none d-lg-block" />under the SIPP Scheme</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>