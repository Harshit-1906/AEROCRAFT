<?php
include 'include/header.php';
?>
<div class="page-header" data-padding>
    <div class="container">
        <div data-padding="top" class="row align-items-lg-center">
            <div data-aos="fade-up" class="col-12 col-lg-6 col-xl-6">
                <div class="sectiontitle-element">
                    <h3 class="big fw-bold">Check <span class="text-primary">airport wait-times</span> before your flight</h3>
                    <p>Aerocraft is bringing the power of data and algorithms
                        to help you plan better for your next flight, reduce wait times and increase productivity</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200" class="col-12 col-lg-6 col-xl-6">
                <div class="rectangle-element">
                    <div class="card p-4 bg-light text-dark rounded shadow">
                        <div class="ttabs-element--linebottom--inline--top">
                            <div class="ttabs">
                                <div class="ttab active" data-ttab="one">
                                    <div class="text">
                                        <i class="fa fa-plane"></i> Search
                                        <p>Search Flight Information</p>
                                    </div>

                                </div>
                                <div class="ttab" data-ttab="two">
                                    <div class="text">
                                        <i class="fa fa-hourglass"></i> Wait Time
                                        <p>Wait-time at Airports</p>
                                    </div>
                                </div>
                                <!-- <div class="ttab" data-ttab="three">
                                    <div class="text">
                                        <i class="fab fa-whatsapp"></i> Notification
                                        <p>Notify family members </p>
                                    </div>
                                </div> -->
                            </div>
                            <div class="wrapper">
                                <ul data-ttab="one" class="active">
                                    <li>

                                        <form method="GET" action="search.php">
                                            <fieldset class="p-2 mt-2">
                                                <legend class="h4 fw-bold">Search Flight and Airport</legend>
                                                <div class="mb-3">
                                                    <label for="disabledTextInput" class="form-label text-dark">Airport Code</label>
                                                    <input required type="text" name="airportCode" id="disabledTextInput" maxlength="3" class="form-control" placeholder="eg: BOM">
                                                </div>
                                                <div class="mb-3">

                                                    <label for="disabledTextInput" class="form-label text-dark">Flight number</label>
                                                    <input required type="text" name="flightNo" id="disabledTextInput" class="form-control" placeholder="AI914" maxlength="6">
                                                </div>

                                                <button type="submit" class="btn--medium--round--border"><i class="fa fa-search"></i> Search</button>
                                            </fieldset>
                                        </form>

                                    </li>
                                </ul>
                                <ul data-ttab="two">
                                    <li>
                                        <form method="GET" action="wait.php">
                                            <fieldset class="p-2 mt-2">
                                                <legend class="h4 fw-bold">Search Airport wait time</legend>
                                                <div class="mb-3">
                                                    <label for="disabledTextInput" class="form-label">Airport Code</label>
                                                    <input required type="text" name="airportCode" id="disabledTextInput" maxlength="3" class="form-control" placeholder="eg: BOM">
                                                </div>
                                                <div class="mb-3">

                                                    <label for="disabledTextInput" class="form-label">Time of Departure</label>
                                                    <input required type="time" name="std" id="disabledTextInput" class="form-control" placeholder="00:00" maxlength="6">
                                                </div>

                                                <button type="submit" class="btn--medium--round--border"><i class="fa fa-search"></i> Search</button>
                                            </fieldset>
                                        </form>
                                    </li>
                                </ul>
                                <!-- <ul data-ttab="three" class="">
                                    <li>
                                        <h4 class="fw-bold">Notify your family for flight updates</h4>
                                        <p class="lead small">Send updates when your plane readies, takes-off, lands and luggage details over Whatsapp </p>
                                        <form method="GET" action="search.php">
                                            <fieldset class="p-2 mt-2">
                                                <div class="mb-3">
                                                    <label for="disabledTextInput" class="form-label text-dark">Whatsapp number</label>
                                                    <input type="tel" name="telno" id="disabledTextInput" maxlength="10" class="form-control" placeholder="10-digit">
                                                </div>
                                                <div class="mb-3">

                                                    <label for="disabledTextInput" class="form-label text-dark">Flight number</label>
                                                    <input type="text" name="flightNo" id="disabledTextInput" class="form-control" placeholder="AI914" maxlength="6">
                                                </div>

                                                <button type="submit" class="btn--medium--round--border"><i class="fa fa-search"></i> Search</button>
                                            </fieldset>
                                        </form>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>