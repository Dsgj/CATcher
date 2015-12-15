<?php
include 'connect.php';
include 'header.php';
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXhtygUcKTapxhoirRVKtpn2qXiQBh8xM&signed_in=true&libraries=places"
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
                center: new google.maps.LatLng(62.925896, 15.856638),
                zoom: 5,
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
                    <small>All registered cats</small></h1>
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
                <div id="map" style="width: 100%; height: 75%"></div>
            </div>
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

        </div>
        <!-- /.row -->

        <hr>

<?php
include 'footer.php';
?>