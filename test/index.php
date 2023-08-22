<?php
include_once '../commonParts.php';
$str = '../';
$title = 'Αξιολόγηση';
navbar($str, $title);
?>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap  ">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span> Αξιολογηση  </span>
                            <h2 class="title"> Αξιολόγηση Ιδιοσυγκρασίας </h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner ">
                            <p class="disc"> Κάθε αριθμός αντιπροσωπεύει δύο δηλώσεις. Για κάθε ζεύγος δίνετε από 3
                                βαθμούς,
                                με βάση το τι ισχύει για εσάς. Η κατανομή των πόντων είναι είτε 3 και 0, είτε 2 και 1
                                δεν υπάρχουν μισοί πόντοι.
                                <br> Αν π.χ. σας εκφράζει το Α και όχι το Β, τότε Α = 3 και Β = 0.
                                <br> Αν συμφωνείτε λίγο με το Α αλλά περισσότερο με το Β, τότε Α = 1
                                <br> <br> Απαντήστε με βάση το τι είναι στη φύση σας, κι οχι το τι πιστεύετε πως είναι
                                το "σωστό".
                        </div>
                        <!-- end -->
                    </div>
                </div>

                <div class="col-12 ">
                    <div class=" ">
                        <div class="testForm">
                            <div class="testBox">
                                <h5><input type="text"> Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται αυθόρμητα.
                                </h5>
                                <h5><input type="text"> Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται όταν τα θέματα
                                    έχουν διανεμηθεί από πριν.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Μια ιδανική μέρα ρεπό περιλαμβάνει χρόνο για εμένα.</h5>
                                <h5><input type="text"> Μια ιδανική μέρα ρεπό κυλά παρέα με άλλους.</h5>
                            </div>


                            <div class="testBox">
                                <h5><input type="text"> Οι άνθρωποι πιθανόν με θεωρούν κάπως μοναχικό</h5>
                                <h5><input type="text"> Οι άνθρωποι πιθανόν σκέφτονται ότι μιλάω πάρα πολύ.</h5>
                            </div>


                            <div class="testBox">
                                <h5><input type="text"> Όταν κάνω δικτύωση, είμαι καλός στο να περιφέρομαι
                                    ανάμέσα στον κόσμο.</h5>
                                <h5><input type="text"> Όταν κάνω δικτύωση, συνήθως εστιάζω σε ένα-δυο άτομα.
                                </h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Προτιμώ να εργάζομαι ανεξάρτητα.</h5>
                                <h5><input type="text"> Προτιμώ να εργάζομαι στο πλαίσιο μιας ομάδας.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Οι ιδέες μου έρχονται όταν σκέφτομαι τα πράγματα.</h5>
                                <h5><input type="text"> Οι ιδέες μου έρχονται όταν συζητάω τα πράγματα.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Προτιμώ να γευματίζω παρέα με άλλα άτομα. </h5>
                                <h5><input type="text"> Προτιμώ να γευματίζω μόνος ή με ένα άλλο άτομο.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Νιώθω άβολα να πιάνω κουβεντούλα. </h5>
                                <h5><input type="text"> Είναι στη φύση μου να είμαι ομιλητικός.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Κάνω φίλους όπου πηγαίνω. </h5>
                                <h5><input type="text"> Έχω λίγους πραγματικούς φίλους.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Συχνά νιώθω πως δεν γίνομαι κατανοητός. </h5>
                                <h5><input type="text"> Γίνομαι εύκολα κατανοητός.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text"> Έχω πολλά και ποικίλα ενδιαφέροντα. </h5>
                                <h5><input type="text"> Έχω λίγα ενδιαφέροντα και ασχολούμαι με αυτά σε βάθος.
                                </h5>
                            </div>

                        </div>

                        <div class="nameField">
                            <h5>Ονοματεπώνυμο</h5>
                            <input type="text" name="fullName" >
                        </div>

                        <h5>Επικοινώνησε μαζί μας για να μάθεις τα αποτελέσματα σου</h5>
                        <div class="text-center my-2">
                            <button href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven">Υποβολή</button>
                        </div>



                    </div>


                </div>


            </div>
        </div>
    </div>





<?php
footer($str);
?>