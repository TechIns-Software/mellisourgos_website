<?php
include_once '../commonParts.php';
$str = '../';
$title = 'Αξιολόγηση';
$_SESSION['page'] = 5;
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

                        <input value="1" type="range" name="q_1" max="4" min="1" step="1" id="q_1" list="ticks1">
                        <datalist id="ticks1">
                            <option value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                            <option  value="3"  realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                            <option  value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
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

                        <input value="1" type="range" name="q_2" max="4" min="1" id="q_2" step="1" list="ticks2">
                        <datalist id="ticks2">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_3" max="4" min="1" id="q_3" step="1" list="ticks3">
                        <datalist id="ticks3">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_4" max="4" min="1" id="q_4" step="1" list="ticks4">
                        <datalist id="ticks4">
                            <option  value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
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

                        <input value="1" type="range" name="q_5" max="4" min="1" id="q_5" step="1" list="ticks5">
                        <datalist id="ticks5">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option  value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_6" max="4" min="1" id="q_6" step="1" list="ticks6">
                        <datalist id="ticks6">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_7" max="4" min="1"  id="q_7" step="1" list="ticks7">
                        <datalist id="ticks7">
                            <option  value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
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

                        <input value="1" type="range" name="q_8" max="4" min="1" id="q_8" step="1" list="ticks8">
                        <datalist id="ticks8">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_9" max="4" min="1" id="q_9" step="1" list="ticks9">
                        <datalist id="ticks9">
                            <option  value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
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

                        <input value="1" type="range" name="q_10" max="4" min="1" id="q_10" step="1" list="ticks10">
                        <datalist id="ticks10">
                            <option  value="1" realValue="0_3">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="1_2">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="2_1">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="3_0">Συμφωνώ μόνο με το Β</option>
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

                        <input value="1" type="range" name="q_11" max="4" min="1" id="q_11" step="1" list="ticks11">
                        <datalist id="ticks11">
                            <option value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                            <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                            <option value="3" realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                            <option value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
                        </datalist>
                        <output class="__range-output-square"></output>
                    </div>
                </div>

                    <div class="questionBox ">
                        <div class="d-flex justify-content-between flex-wrap  labelsBox">
                            <div class="label-range">Α) Οι συνάδελφοί μου με μαθαίνουν εύκολα. </div>
                            <div class="label-range">Β) Οι περισσότεροι συνάδελφοι δεν με γνωρίζον καλά. </div>
                        </div>

                        <div class="__range __range-step __range-step-popup ">

                            <input value="1" type="range" name="q_12" max="4" min="1" id="q_12" step="1" list="ticks12">
                            <datalist id="ticks12">
                                <option value="1" realValue="3_0">Συμφωνώ μόνο με το Α</option>
                                <option value="2" realValue="2_1">Συμφωνώ κυρίως με το Α</option>
                                <option value="3" realValue="1_2">Συμφωνώ κυρίως με το Β</option>
                                <option value="4" realValue="0_3">Συμφωνώ μόνο με το Β  </option>
                            </datalist>
                            <output class="__range-output-square"></output>
                        </div>
                    </div>
                </form>

                <div class="text-center  p-5 ">
                    <button href="#" class="btn-primary-mycustom2  "
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

                <div class="modal-body">
                    <div class="nameField ">
                        <h5>Ονοματεπώνυμο</h5>
                        <input type="text" name="fullName" id="fullName" >

                        <h5>Τηλέφωνο Επικοινωνίας</h5>
                        <input type="text" name="phone" id="phone" >

                        <h5>Πως βρήκες την ιστοσελίδα μας ;</h5>

                        <div class="form-check">
                            <input type="radio" class="radioInputs"  name="fromWhere" id="sinergatis" value="Συνεργάτης Γραφείου" checked>
                            <label class="form-check-label" for="sinergatis">
                             Συνεργάτης Γραφείου
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="tikTok" value=" Tik Tok">
                            <label class="form-check-label" for="tikTok">
                                Tik Tok
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="facebook" value="Facebook">
                            <label class="form-check-label" for="facebook">
                                Facebook
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="instagram" value="Instagram">
                            <label class="form-check-label" for="instagram">
                                Instagram
                            </label>
                        </div>


                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="internet" value="Διαδίκτυο">
                            <label class="form-check-label" for="internet">
                                Διαδίκτυο
                            </label>
                        </div>


                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="friend" value="Φίλο">
                            <label class="form-check-label" for="friend">
                                Φίλο
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="insuranceAgent" value="Ασφαλιστικό σύμβουλο">
                            <label class="form-check-label" for="insuranceAgent">
                                Ασφαλιστικό σύμβουλο
                            </label>
                        </div>


                        <div class="form-check">
                            <input type="radio" class="radioInputs" name="fromWhere" id="other" value="Άλλο">
                            <label class="form-check-label" for="other">
                              Άλλο
                            </label>
                        </div>

                    </div>

                    <div class="resultsContainer d-none ">
                        <h2>Αποτελέσματα</h2>
                        <h4>Άθροισμα Εξωστρεφή: <span id="extrovertsSummary"></span></h4>
                        <h4>Άθροισμα Εσωστρεφή: <span id="introvertsSummary"></span></h4>
                        <h4>Τελικό Αποτέλεσμα: <span id="finalResult"></span></h4>
                        <h5> 31-36 : Ισχυρή προτίμηση για το κυρίαρχο στυλ σας</h5>
                        <h5> 25-30 : Προτίμηση για το κυρίαρχο στυλ σας</h5>
                        <h5> 19-24 : Ελαφρά προτίμηση για το κυρίαρχο στυλ σας</h5>


                        <h3>Θέλετε περαιτέρω ανάλυση των αποτελεσμάτων ?</h3>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div class="text-center my-2" id="submitContainer">
                        <button href="#" class="btn-primary-mycustom2  "
                                    onclick="getTestData(event)">Υποβολή</button>
                    </div>

                    <div class="text-center my-2  " >
                        <a href="../index.php" class="btn-primary-mycustom3  "
                        >Πίσω</a>
                    </div>

                    <div class="text-center my-2 d-none " id="contactContainer">
                        <a href="../contact" class="btn-primary-mycustom2  "
                               >Επικοινωνία</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
footer($str);
?>