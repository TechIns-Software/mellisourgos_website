<?php
include_once  '../commonParts.php';
$str = '../';
$title = 'Καρίερα';
navbar($str,$title);
?>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap  ">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span>Αρπαξε την ευκαιρία τώρα</span>
                            <h2 class="title">Καρίερα </h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc">Αν πιστεύεις στον εαυτό σου αλλά έχεις κουραστεί στην τωρινή σου εργασία και δεν βλέπεις μέλλον…
                               Αν σου αρέσει να βοηθάς τους ανθρώπους και κάνεις πολλά πράγματα αλλά δεν αμείβεσαι επαρκώς…
                            </p>

                            <p class="disc">
                                <b> Αν ναί,</b> Συμπλήρωσε την παρακάτω φόρμα και ένας συνεργάτης θα σε καλέσει σύντομα για να σε
                                    βοηθήσουμε να κάνεις τα όνειρά σου πραγματικότητα
                            </p>





                        </div>
                        <!-- end -->
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">

                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->

    <div class="rts-contact-area contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="../assets/images/about/career.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact text-start">
                            <p class="pre-title">
                                Φορμα Καριερας
                            </p>
                            <h2 class="title">Συμπλήρωσε την παρακάτω φόρμα! </h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" action="mailer.php" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Ονοματεπώνυμο" name="name" required="">
                                <input type="email" placeholder="Email " name="email" required="">
                            </div>


                            <input type="text" placeholder="Ηλικία" name="subject">
                            <textarea placeholder="Μήνυμα" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Υποβολή</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
footer($str);
?>