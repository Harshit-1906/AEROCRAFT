<?php
include 'include/header.php';

?>
<div class="page-header" data-padding="top">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="sectiontitle-element--center--full">
                    <h1 class="big fw-bold">contact us.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <section data-padding="sm">
        <div class="container">
            <div data-aos="fade-up" class="row aos-init aos-animate" data-padding="xstop">
                <div class="col-12">
                    <div class="sectiontitle-element--center">
                        <h2>Get in touch</h2>
                        <p>If you're interested in learning more about how Aerocraft can support your business or have an idea we can work on, don't hesitate to get in touch with us. Our team is always available to answer your questions and provide more information on our products and services. Contact us today to schedule a free consultation and see how we can help your business or idea reach new heights. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-padding="bottom">
        <div class="container">
            <div data-aos="fade-up" class="row align-items-lg-center aos-init aos-animate">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <!--  Form. For the settings contact.php  -->
                    <?php
                        if (isset($_GET['event'])) {?><script>alert('form submitted!')</script> <?php }?>
                    <form method="POST" action="config/formHandler.php">
                        
                        <div class="basic-form--border--round--row">
                            <div class="field col-lg-6">
                                <label for="name">Your Name <sup>*</sup></label>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-field">
                            </div>
                            <div class="field col-lg-6">
                                <label for="mail">Email Address <sup>*</sup></label>
                                <!-- data-error="true" to set error field -->
                                <input id="mail" name="email" type="email" placeholder="Email" class="form-field">
                            </div>
                            <div class="field col-12">
                                <label for="message">Message <sup>*</sup></label>
                                <!-- data-error="true" to set error field -->
                                <textarea id="message" name="message" class="form-field" placeholder="Message"></textarea>
                            </div>
                            <!-- data-active="false" is hidden, data-active="true" is visible -->
                            <div class="field col-12 text-center">
                                <input id="submit" type="submit" class="btn--big--round" value="Send Message">
                            </div>
                        </div>
                    </form>
                    <!--  END Form. For the settings contact.php  -->
                </div>
            </div>
        </div>
    </section>
    <section data-padding="mdbottom">
        <div class="container">
            <div class="row justify-content-md-center" data-padding="xstop">
                <div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-4 col-lg-3 aos-init aos-animate">
                    <div class="icon-element--center">
                        <div class="info">
                            <div class="text">
                                <h6>Email Us</h6>
                                <p><a href="mailto:hello@company.com" class="simple-underline">contact@aerocraft.co.in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="col-12 col-md-4 col-lg-3 aos-init aos-animate">
                    <div class="icon-element--center">
                        <div class="info">
                            <div class="text">
                                <h6>Visit Us</h6>
                                <p>GHS, Dehmi Kalan,<br>Jaipur, RJ, India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="col-12 col-md-4 col-lg-3 aos-init aos-animate">
                    <div class="icon-element--center">
                        <div class="info">
                            <div class="text">
                                <h6>Call us</h6>
                                <p><a href="tel:(+91)9166479980" class="simple-underline">(+91) 9166479980</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include 'include/footer.php';
?>