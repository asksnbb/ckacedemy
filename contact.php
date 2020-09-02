<?php 
    $title = 'Contact Us';
    include_once('header.php'); 
?>
<!-- Main Body Start  -->
<section class="hero-wrap hero-wrap-2" style="background-image:
      url('images/bg_contact.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center
          justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
                            <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact
                        <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form action="classes/send.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="message" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-4 d-flex">
                <div class="bg-orange align-self-stretch box p-4 text-center">
                    <h3 class="mb-4 text-white">Address</h3>
                    <p class="text-white">
                        Rishikesh Road Doiwala,
                        Doiwala, Dehradun - 248140,
                        Near Goverdhan Mandir, Near Tempo Stand
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="bg-orange align-self-stretch box p-4 text-center">
                    <h3 class="mb-4 text-white">Contact Number</h3>
                    <p><a class="text-white" href="tel://01352691300">0135 2691300</a></p>
                    <p><a class="text-white" href="tel://9410700202">9410700202</a></p>
                    <p><a class="text-white" href="tel://9410700303">9410700303</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="bg-orange align-self-stretch box p-4 text-center">
                    <h3 class="mb-4 text-white">Email Address</h3>
                    <p><a class="text-white" href="mailto:chanakyadoiwala@gmail.com">chanakyadoiwala@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Body End  -->
<?php include_once('footer.php'); ?>