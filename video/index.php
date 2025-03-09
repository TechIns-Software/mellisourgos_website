<?php
include_once '../commonParts.php';
$str = '../';
$title = 'Σχετικά με εμένα';
$_SESSION['page'] = 7;
navbar($str, $title);
?>

<div class="rts-about-area rts-section-gap">
    <div class="container">
        <div style='padding:56.25% 0 0 0;position:relative;'>
            <iframe src='https://player.vimeo.com/video/1056536606?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Μελισσουργος Κ."></iframe>
        </div>
    </div>
</div>

<div class="rts-contact-area contact-one mt-5 pb-5">
    <div class="container">
        <div class="row align-items-center g-0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-2">
                <div class="contact-form-area-one">
                    <div class="rts-title-area contact text-start">

                        <div class="pre-title">
                            <img src="../assets/images/banner/shape/pre-title.png" alt="pre-title">
                            <span class="pre">Επικοινωνια</span>
                            <img class="two" src="../assets/images/banner/shape/pre-title.png" alt="pre-title">
                        </div>
                        <h2 class="title">Φόρμα Επικοινωνίας</h2>
                    </div>

                    <form id="contact-form">
                        <div class="name-email">
                            <input type="text" placeholder="Ονοματεπώνυμο" id="fullName" name="fullName">
                            <input type="text" placeholder="Email " id="email" name="email">
                        </div>
                        <input type="text" placeholder="Κινητό" id="phone" name="phone">
                        <textarea placeholder="Μήνυμα" id="message" name="message"></textarea>
                        <div class="spinner-border d-none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <button type="submit" onclick="submitSimpleContactForm('')" class="rts-btn btn-primary">Υποβολή
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
footer($str);
?>