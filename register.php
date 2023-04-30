<?php
include 'include/header.php';
?>

<div class="page-content">
    <section data-padding="sm">
        <div class="container">
            <div data-aos="fade-up" class="row align-items-lg-center aos-init aos-animate" data-padding="xstop">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <form id="signin-form">
                        <div class="basic-form--border--round--row--boxed--shadow">
                            <div class="col-12 text-center">
                                <h5>Sign In</h5>
                            </div>
                            <div class="field col-12">
                                <input id="name" type="text" placeholder="Email Address" class="form-field">
                            </div>
                            <div class="field col-12">
                                <!-- data-error="true" to set error field -->
                                <input id="password" type="password" placeholder="Password" class="form-field" data-error="false">
                                <!-- Info field data-active="false" is hidden, data-active="true" is visible -->
                                <span class="info text-right" data-active="true"><a class="simple--primary--xs" href="#">Forgot Password?</a></span>
                            </div>
                            <div class="field col-12" id="privacy-wrap">
                                <input class="styled-checkbox" id="privacy-form" type="checkbox" value="value1">
                                <label for="privacy-form">Remember me next time</label>
                            </div>
                            <!-- data-active="false" is hidden, data-active="true" is visible -->
                            <div class="alert-wrap col-12" data-active="false">
                                <p>Error Warning</p>
                            </div>
                            <div class="field col-12 text-center">
                                <input id="submit" type="submit" class="btn--big--round--full" value="Sign In">
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="small">Don't have an account? <a href="#" class="simple--primary--small">Sign up here</a></p>
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