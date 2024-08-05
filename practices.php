<?php $page = 'practices'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AMD | Practices</title>
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
        <section class="shortBanner" style="background-image: url(images/bg/practices-bg.jpg);">
            <div class="containerFull h-100">
                <div class="shortBannerText">
                    <h1 class="large_heading fontHeading text-uppercase text-white"><span>Practices</span></h1>
                </div>
            </div>
        </section>



        <section class="bgDark productSection">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="practicesContainer">
                            <h2 class="small_heading ps-md-4"> Our practice provides comprehensive legal services in all areas <br class="d-none d-lg-block" >
                                with particular focus on the following areas:</h2>
                        </div>

                        <div class="practicesList mt-3 mt-md-5">

                            <div class="row">
                                <div class="col-lg-6 productsItem">

                                    <ul class="fontWeight300">
                                        <li>Artificial Intelligence</li>
                                        <li>Technology Law</li>
                                        <li>Data Privacy</li>
                                        <li>Cybersecurity</li>
                                        <li>International Intellectual Property</li>
                                        <li>Intellectual Property Due Diligence</li>
                                        <li>Patent Law</li>
                                        <li>Design Law</li>
                                        <li>Trademark Law</li>
                                        <li>Product Development Assistance</li>
                                        <li>Whitespace Analysis</li>
                                        <li>Product & Industry</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 productsItem">

                                    <ul class="fontWeight300">

                                        <li>Compliance & Corporate Governance</li>
                                        <li>Venture Capital</li>
                                        <li>Entertainment Law</li>
                                        <li>Sports Law</li>
                                        <li>Media Law</li>
                                        <li>Copyright Law</li>
                                        <li>Technology Licensing</li>
                                        <li>Commercial Law</li>
                                        <li>Privacy Law</li>
                                        <li>Transactions - Contract Drafting, Vetting and Negotiations</li>
                                        <li>Life Sciences</li>
                                    </ul>
                                </div>
                            </div>

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