<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from markup.themewagon.com/tryposh/page-contact-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 16:18:11 GMT -->

<?php
    include 'inc/header.php'
    
    ?>

        <!-- /.znav-container-->
        <section class="p-0 color-white font-1">
            <div class="background-holder overlay overlay-1" style="background-image:url(assets/images/about-company.jpg);"></div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row h-half align-items-center py-5 ">
                    <div class="col-md-8 col-lg-5  "><br><br><br><br>
                        <h1 class="fs-3 fs-md-4 mb-3 ">Let's Talk</h1><a class="fs-1 color-white fw-300 " href="tel: +1567889953">+1 (918) 230 - 0201</a>
                        <p class="lead ">hi@favcode54.org</p>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        <section>
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6">
                        <form class="zform" method="post">
                            <input class="form-control" type="hidden" name="to" value="username@domain.extension">
                            <div class="form-group row">
                                <label class="col-2 col-form-label text-right">Name :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label text-right">Subject :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="subject" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label text-right">Email :</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" name="from" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label text-right">Message :</label>
                                <div class="col-10">
                                    <textarea class="form-control" rows="8" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-10 offset-2">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Send!">
                                </div>
                            </div>
                            <div class="zform-feedback"></div>
                        </form>
                    </div>
                    <div class="col wow fadeInUp">
                        <div class="googlemap" data-latlng="37.4408194,-122.0204993" data-scrollwheel="false" data-icon="assets/images/hotel-icon.png" data-zoom="12" data-theme="Default" style="min-height: 355px;">
                            <div class="marker-content py-3">
                                <h4>Alviso</h4>
                                <p>Alviso is a neighborhood in San Jose,
                                    <br>Santa Clara County, California.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
    
      <?php
        
include 'inc/footer.php'
        ?>

</html>