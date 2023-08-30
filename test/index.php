<?php
include_once '../commonParts.php';
$str = '../';
$title = 'Αξιολόγηση';
navbar($str, $title);
?>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap  ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span> Αξιολογηση  </span>
                            <h2 class="title"> Αξιολόγηση Ιδιοσυγκρασίας </h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner ">

                            <p class="disc">
                                Απαντήστε με βάση το τι είναι στη φύση σας, κι οχι το τι πιστεύετε πως είναι το "σωστό".
                            </p>

                        </div>
                        <!-- end -->
                    </div>
                </div>


                <form id="testForm">
                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται αυθόρμητα. </div>
                        <div class="label-range">Β) Ο καταιγισμός ιδεών είναι καλύτερα να γίνεται όταν τα θέματα έχουν διανεμηθεί από πριν.</div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_1" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Μια ιδανική μέρα ρεπό περιλαμβάνει χρόνο για εμένα. </div>
                        <div class="label-range">Β) Μια ιδανική μέρα ρεπό κυλά παρέα με άλλους.</div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_2" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>


                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Οι άνθρωποι πιθανόν με θεωρούν κάπως μοναχικό. </div>
                        <div class="label-range">Β) Οι άνθρωποι πιθανόν σκέφτονται ότι μιλάω πάρα πολύ.</div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_3" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Όταν κάνω δικτύωση, είμαι καλός στο να περιφέρομαι ανάμεσα στον κόσμο. </div>
                        <div class="label-range">Β) Όταν κάνω δικτύωση, συνήθως εστιάζω σε ένα-δυο άτομα. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_4" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>


                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Προτιμώ να εργάζομαι ανεξάρτητα. </div>
                        <div class="label-range">Β) Προτιμώ να εργάζομαι στο πλαίσιο μιας ομάδας. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_5" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>


                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Οι ιδέες μου έρχονται όταν σκέφτομαι τα πράγματα. </div>
                        <div class="label-range">Β) Οι ιδέες μου έρχονται όταν συζητάω τα πράγματα. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_6" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Προτιμώ να γευματίζω παρέα με άλλα άτομα. </div>
                        <div class="label-range">Β) Προτιμώ να γευματίζω μόνος ή με ένα άλλο άτομο. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_7" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Νιώθω άβολα να πιάνω κουβεντούλα. </div>
                        <div class="label-range">Β) Είναι στη φύση μου να είμαι ομιλητικός. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_8" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Κάνω φίλους όπου πηγαίνω. </div>
                        <div class="label-range">Β) Έχω λίγους πραγματικούς φίλους. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_9" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Συχνά νιώθω πως δεν γίνομαι κατανοητός. </div>
                        <div class="label-range">Β) Γίνομαι εύκολα κατανοητός. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_10" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                <div class="questionBox ">
                    <div class="d-flex justify-content-between flex-wrap  labelsBox">
                        <div class="label-range">Α) Έχω πολλά και ποικίλα ενδιαφέροντα. </div>
                        <div class="label-range">Β) Έχω λίγα ενδιαφέροντα και ασχολούμαι με αυτά σε βάθος. </div>
                    </div>

                    <div class="__range __range-step __range-step-popup ">

                        <input value="1" type="range" name="q_11" max="5" min="1" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option value="1">Συμφωνώ μόνο με το Α</option>
                            <option value="2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3">Συμφωνώ και με το Α και το Β</option>
                            <option value="4">Συμφωνώ κυρίως με το Β</option>
                            <option value="5">Συμφωνώ μόνο με το Β</option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>
                </form>

                <div class="text-center  p-5 ">
                    <button href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Αποστολή
                    </button>
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