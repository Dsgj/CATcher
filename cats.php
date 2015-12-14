<?php
include 'connect.php';
include 'header.php';
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXhtygUcKTapxhoirRVKtpn2qXiQBh8xM&signed_in=true&libraries=places&callback=initAutocomplete"
    async defer>
    </script>
    <script>
        var customIcons = {
            male: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
            },
            female: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
            }
        };

        function load() {
            var map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(65.6177455, 22.137957),
                zoom: 13,
                mapTypeId: 'roadmap'
            });
            var infoWindow = new google.maps.InfoWindow;

            downloadUrl("phpsqlajax_genxml.php", function (data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName("marker");
                for (var i = 0; i < markers.length; i++) {
                    var name = markers[i].getAttribute("name");
                    var address = markers[i].getAttribute("address");
                    var sex = markers[i].getAttribute("sex");
                    var point = new google.maps.LatLng(
                        parseFloat(markers[i].getAttribute("lat")),
                        parseFloat(markers[i].getAttribute("lng")));
                    var html = "<b>" + name + "</b> <br/>" + address;
                    var icon = customIcons[sex] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: icon.icon
                    });
                    bindInfoWindow(marker, map, infoWindow, html);
                }
            });
        }

        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function () {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {
        }
    </script>
    <script>
        var autocomplete;
        function initAutocomplete() {
            load();
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

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cats
                    <small>Register your cat</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Cats</li>
                </ol>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-12">
                <div id="map" style="width: 100%; height: 400px"></div>
                <!-- Embedded Google Map -->
                <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=62.864643, 16.057620&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed">
                </iframe>-->
            </div>
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Register your cat</h3>
                    <form action="form.php" name="CatReg" id="contactForm" method="post" novalidate>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                       data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Cat ID-number:</label>
                                <input type="text" class="form-control" name="ident" id="ident" required
                                       data-validation-required-message="Please enter your cat's identification number."
                                       placeholder="Enter the ID-number">
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Cat name:</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                       data-validation-required-message="Please enter your cat's name."
                                       placeholder="Enter the name">
                            </div>
                        </div>

                        <div id="sex">
                            <label>Sex:</label><br>
                            <input type="radio" name="sex" id="female" value="female">Female</label>
                            <input type="radio" name="sex" id="male" value="male" >Male</label>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Breed:</label>
                                <input type="text" class="form-control" name="breed" id="breed" required
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
                                <textarea rows="10" cols="100%" class="form-control" name="info" id="info"
                                          form="contactForm" required
                                          data-validation-required-message="Please enter some information here."
                                          maxlength="255"
                                          placeholder="Enter some info about the cat here."></textarea>
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