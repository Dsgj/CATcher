<?php
include 'connect.php';
include 'header.php';
?>


    <script>
        var autocomplete;
        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('address')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }
        function fillInAddress() {
            var place = autocomplete.getPlace();
            document.getElementById("lat").value = place.geometry.location.lat();
            document.getElementById("lng").value = place.geometry.location.lng();
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgqYI64QpxRrlSK0qOE2vg4lQVDawI4ZY&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer>
    </script>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-12">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"

                        src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Register your cat</h3>

                    <form action="cats.php" name="sentMessage" id="contactForm" method="post"
                          novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required
                                       data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Cat ID-number:</label>
                                <input type="text" class="form-control" name="ident" required
                                       data-validation-required-message="Please enter your cat's identification number."
                                       placeholder="Enter the ID-number">

                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Cat name:</label>
                                <input type="text" class="form-control" name="name" required
                                       data-validation-required-message="Please enter your cat's name."
                                       placeholder="Enter the name">
                            </div>
                        </div>
                        <div>
                            <label>Sex:</label><br>
                            <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Breed:</label>
                                <input type="text" class="form-control" name="breed" required
                                       data-validation-required-message="Please enter your cat's breed."
                                       placeholder="Enter the breed">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Address:</label>
                                <input type="text" class="form-control" name="address" id="address" required
                                       data-validation-required-message="Please enter your address"
                                       placeholder="Enter your address">

                                <input type="hidden" name="lat" id="lat">
                                <input type="hidden" name="lng" id="lng">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Other information:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" required
                                      data-validation-required-message="Please enter your message" maxlength="999"
                                      style="resize:none">
                            </textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Send information</button>
                    </form>
                </div>

            </div>
            <!-- /.row -->

            <hr>

<?php
include 'footer.php';
?>
