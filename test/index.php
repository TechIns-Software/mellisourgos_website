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
                            <form id="testForm">

                            <div class="testBox">
                                <h5><input type="text" id="1_1" name="1_1"> Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται αυθόρμητα.
                                </h5>
                                <h5><input type="text" id="1_2" name="1_2"> Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται όταν τα θέματα
                                    έχουν διανεμηθεί από πριν.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="2_1" name="2_1"> Μια ιδανική μέρα ρεπό περιλαμβάνει χρόνο για εμένα.</h5>
                                <h5><input type="text" id="2_2" name="2_2"> Μια ιδανική μέρα ρεπό κυλά παρέα με άλλους.</h5>
                            </div>


                            <div class="testBox">
                                <h5><input type="text" id="3_1" name="3_1"> Οι άνθρωποι πιθανόν με θεωρούν κάπως μοναχικό</h5>
                                <h5><input type="text" id="3_2" name="3_2"> Οι άνθρωποι πιθανόν σκέφτονται ότι μιλάω πάρα πολύ.</h5>
                            </div>


                            <div class="testBox">
                                <h5><input type="text" id="4_1" name="4_1"> Όταν κάνω δικτύωση, είμαι καλός στο να περιφέρομαι
                                    ανάμέσα στον κόσμο.</h5>
                                <h5><input type="text" id="4_2" name="4_2"> Όταν κάνω δικτύωση, συνήθως εστιάζω σε ένα-δυο άτομα.
                                </h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="5_1" name="5_1"> Προτιμώ να εργάζομαι ανεξάρτητα.</h5>
                                <h5><input type="text" id="5_2" name="5_2"> Προτιμώ να εργάζομαι στο πλαίσιο μιας ομάδας.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="6_1" name="6_1"> Οι ιδέες μου έρχονται όταν σκέφτομαι τα πράγματα.</h5>
                                <h5><input type="text" id="6_2" name="6_2"> Οι ιδέες μου έρχονται όταν συζητάω τα πράγματα.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="7_1" name="7_1" > Προτιμώ να γευματίζω παρέα με άλλα άτομα. </h5>
                                <h5><input type="text" id="7_2" name="7_2"> Προτιμώ να γευματίζω μόνος ή με ένα άλλο άτομο.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="8_1" name="8_1" > Νιώθω άβολα να πιάνω κουβεντούλα. </h5>
                                <h5><input type="text" id="8_2" name="8_2"> Είναι στη φύση μου να είμαι ομιλητικός.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="9_1" name="9_1" > Κάνω φίλους όπου πηγαίνω. </h5>
                                <h5><input type="text" id="9_2" name="9_2"> Έχω λίγους πραγματικούς φίλους.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="10_1" name="10_1"> Συχνά νιώθω πως δεν γίνομαι κατανοητός. </h5>
                                <h5><input type="text" id="10_2" name="10_2"> Γίνομαι εύκολα κατανοητός.</h5>
                            </div>

                            <div class="testBox">
                                <h5><input type="text" id="11_1" name="11_1"> Έχω πολλά και ποικίλα ενδιαφέροντα. </h5>
                                <h5><input type="text" id="11_2" name="11_2"> Έχω λίγα ενδιαφέροντα και ασχολούμαι με αυτά σε βάθος.
                                </h5>
                            </div>
                            </form>

                        </div>
                        <div class="text-center my-2">
                            <button href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Αποστολή</button>
                        </div>


                    </div>


                </div>



            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="nameField">
                        <h5>Ονοματεπώνυμο</h5>
                        <input type="text" name="fullName" id="fullName" >

                        <h5>Τηλέφωνο Επικοινωνίας</h5>
                        <input type="text" name="phone" id="phone" >
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center my-2">
                        <button href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven"
                                    onclick="getTestData(event)">Υποβολή</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
footer($str);
?>