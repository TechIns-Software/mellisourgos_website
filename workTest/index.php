<?php
include_once '../commonParts.php';
$str = '../';
$title = 'Αξιολόγηση';
$_SESSION['page'] = 5;
navbar($str, $title);
$questions = [
    "Ανυπομονώ να πηγαίνω στη δουλειά κάθε πρωί",
    "Έχω θετική διάθεση στη δουλειά",
    "Μετά τη δουλειά έχω ενέργεια για την προσωπική μου ζωή",
    "Οι εντάσεις στην καθημερινότητα με συνεργάτες και προμηθευτές είναι περιορισμένες",
    "Αισθάνομαι σημαντικός και απαραίτητος στην επιχείρησή μου",
    "Νιώθω πως η εργασία μου ανταμείβεται υλικά",
    "Νιώθω πως η εργασία μου ανταμείβεται συναισθηματικά",
    "Η εργασία μου μου επιτρέπει να είμαι ευέλικτος στις αποφάσεις μου",
    "Μαθαίνω συνεχώς νέα πράγματα",
    "Νιώθω δημιουργικός στην επαγγελματική καθημερινότητά μου",
    "Νιώθω καινοτόμος στην επαγγελματική καθημερινότητά μου",
    "Έχω τα υλικά και τον εξοπλισμό που χρειάζομαι για να γίνεται η δουλειά μου πιο εύκολα.",
    "Δεν είμαι ικανοποιημένος εάν δεν φτάσω στο επιθυμητό αποτέλεσμα",
    "Προσπαθώ να κάνω τη δουλειά μου όσο το δυνατόν καλύτερα, ακόμη και όταν οι εξωτερικές συνθήκες είναι δύσκολες",
    "Υπάρχει ένας σωστός τρόπος και ένας λάθος τρόπος να κάνω σχεδόν τα πάντα",
    "Η αποτυχία απλώς με κάνει να προσπαθώ πιο έντονα",
    "Αισθάνομαι ανασφαλής για τις ικανότητές μου",
    "Θαυμάζω τους ανθρώπους που ξεκινούν τη δική τους επιχείρηση",
    "Όταν κάνω σχέδια, είναι σχεδόν βέβαιο ότι θα τα πετύχω",
    "Πιστεύω συνήθως στη δική μου άποψη, ακόμη και αν οι γύρω μου δεν συμφωνούν μαζί μου",
    "Απολαμβάνω να παίρνω ρίσκα",
    "Θα προτιμούσα να δουλεύω για μια μικρή παρά για μια μεγάλη επιχείρηση"];
?>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap  ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="about-progress-inner">
                        <div class="title-area text-start">

                            <h5 class="title text-decoration-underline"> Είσαι χαρούμενος από το επάγγελμα σου; </h5>
                        </div>

                    </div>
                </div>


                <form id="testForm">

                    <?php
                    foreach ($questions as $index => $question){
                        ?>
                        <div class="questionBox " version="second">
                            <div class="text-center labelsBox">
                                <h4> <?= $question?> </h4>
                            </div>

                            <div class="d-flex justify-content-center flex-wrap  ">
                                <div class="form-check mx-2 custom-radio">
                                    <input class="form-check-input" type="radio" name="question<?= $index?>" id="yes_<?= $index?>"
                                           value="yes">
                                    <label class="form-check-label" for="yes_<?= $index?>">ΝΑΙ</label>
                                </div>
                                <div class="form-check mx-2  custom-radio ">
                                    <input class="form-check-input" type="radio" name="question<?= $index?>" id="no_<?= $index?>"
                                           value="no">
                                    <label class="form-check-label" for="no_<?= $index?>">ΟΧΙ</label>
                                </div>

                            </div>
                        </div>


                        <?php
                    }
                    ?>



                </form>

                <div class="text-center  p-5 ">
                    <button href="#" class="btn-primary-mycustom2  "
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Υποβολή
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

                        <h4>Τελικό Αποτέλεσμα: <span id="finalResult"></span></h4>
                        <h5> 43-34 :Αισθάνεστε μέγιστη ικανοποίηση για τη δουλειά σας</h5>
                        <h5> 33-23 :Αισθάνεστε ικανοποίηση για τη δουλειά σας</h5>
                        <h5> 22-12 : Δεν αισθάνεστε ιδιαίτερη ικανοποίηση για τη δουλειά σας</h5>
                        <h5> 11-1 : Έχετε ακολουθήσει λάθος δρόμο</h5>


                        <h3>Θέλετε περαιτέρω ανάλυση των αποτελεσμάτων ?</h3>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div class="text-center my-2" id="submitContainer">
                        <button href="#" class="btn-primary-mycustom2  "
                                    onclick="getTestData(event,'secondTest')">Αποτελέσματα</button>
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