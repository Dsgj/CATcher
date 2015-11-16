<script src="js/map.js"></script>
<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <i class="fa fa-copyright fa-lg"></i> <?php
            $copyYear = 2015; // Set your website start date
            $curYear = date('Y'); // Keeps the second year updated
            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> CATcher Inc. <i class="fa fa-pied-piper-alt fa-2x"></i>
        </div>
    </div>
</footer>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    }).bind('slide', function() {
        google.maps.event.trigger(map, 'resize');
        map.setZoom( map.getZoom() );
    });
</script>
<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</div>
</body>
</html>