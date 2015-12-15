<?php
include 'header.php';
?>
<script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map-canvas-0'), {
            center: {lat: 65.6177455, lng: 22.137957}, //The start coordinates is the classroom where we have our lectures!
            zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
        var marker = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'You are here'
        });

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                marker.setPosition(pos);
                map.setCenter(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXhtygUcKTapxhoirRVKtpn2qXiQBh8xM&signed_in=true&libraries=places&callback=initMap"
    async defer>
</script>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill map" id="map-canvas-0"></div>
            <div class="carousel-caption">
                <h2>You are here!</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill"
                 style="background-image:url('http://eryq.org/content/page/Mothers-Day-2015/ingredients/cat-face.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <div class="fill"
                 style="background-image:url('https://scontent-arn2-1.xx.fbcdn.net/hphotos-xtf1/t31.0-8/10911307_10155079615415521_4948087293167966320_o.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to CATcher
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-paw"></i> Cats</h4>
                </div>
                <div class="panel-body">
                    <p>Look where all registered cats live</p>
                    <a href="CatMap.php" class="btn btn-default">Check the map</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-pencil"></i> Register a cat</h4>
                </div>
                <div class="panel-body">
                    <p>Register your cat with some easy steps!</p>
                    <a href="catreg.php" class="btn btn-default">Do it now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-info"></i> About CATcher</h4>
                </div>
                <div class="panel-body">
                    <p>Some information about the website and its team</p>
                    <a href="about.php" class="btn btn-default">Look here</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    <?php
    include 'footer.php';
    ?>
