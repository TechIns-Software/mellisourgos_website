<?php
include_once  '../commonParts.php';
$str = '../';
$title = 'Επικοινωνία';
navbar($str,$title);
?>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap  ">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span>Φόρμα Επικοινωνίας</span>
                            <h2 class="title">Επικοινωνία </h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc">Είμαστε πάντα εδώ για να ακούσουμε τις απορίες, τις παρατηρήσεις και τις σκέψεις σας.
                                Μη διστάσετε να επικοινωνήσετε μαζί μας μέσω της παρακάτω φόρμας επικοινωνίας.
                            </p>

                        </div>
                        <!-- end -->
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-map-area-fluid">
                        <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.9295537201665!2d23.805226175896433!3d38.04872777191764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a198d7071524cb%3A0x1d92ded48443d935!2zzpvOtc-Jz4YuIM6azrfPhs65z4POr86xz4IgMTMxLCDOnM6xz4HOv8-Nz4POuSAxNTEgMjQ!5e0!3m2!1sel!2sgr!4v1692639590856!5m2!1sel!2sgr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <img class="location" src="assets/images/contact/shape/location.svg" alt="Business_map">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">

                            <h2 class="title">Φόρμα Επικοινωνίας</h2>
                        </div>
                        <div class="form-wrapper">

                            <form id="contact-form">
                                <div class="name-email">
                                    <input type="text" placeholder="Ονοματεπώνυμο" id="fullName" name="fullName" >
                                    <input type="text" placeholder="Email " id="email" name="email" >
                                </div>
                                <input type="text" placeholder="Κινητό" id="phone" name="phone">
                                <div class="cv_input ">
                                    <label  for="cv">Ανέβασμα Βιογραφικού    <i class="mx-3 fas fa-cloud-upload-alt"></i></label>
                                    <input type="file" id="cv" hidden="">
                                </div>
                                <button type="submit" class="rts-btn btn-primary">Υποβολή</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
footer($str);
?>