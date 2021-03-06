<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            Powered by <span title="HTML5"><i class="fa fa-html5 fa-2x"></i></span>
            <span title="CSS3"></span><i class="fa fa-css3 fa-2x"></i></span>
            <i class="fa fa-copyright fa-lg"></i> <?php
            $copyYear = 2015; // Set your website start date
            $curYear = date('Y'); // Keeps the second year updated
            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> CATcher Inc.
            <a href="http://www.piedpiper.com/"><i class="fa fa-pied-piper-alt fa-2x" style="color: black"></i>

                <a href="https://github.com/Dsgj/CATcher"><i class="fa fa-github fa-2x" style="color: black"></i>

                    <a href="https://open.spotify.com/track/1lCRw5FEZ1gPDNPzy1K4zW"><i class="fa fa-spotify fa-2x" style="color: lightgreen"></i></a>
        </div>

    </div>
</footer>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript
<script src="js/bootstrap.min.js"></script>
-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
        integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
        crossorigin="anonymous"></script>
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    }).bind('slide', function () {
        google.maps.event.trigger(map, 'resize');
        map.setZoom(map.getZoom());
    });
</script>
<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script src="js/map.js"></script>

</div>
</body>
</html>