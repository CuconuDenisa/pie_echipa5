<?php

include("header.php");

?>


<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Contacteaza-ne</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>Nu ezita sa ne contactezi</h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p> </p>

                <!-- Form itself -->
                <form name="sentMessage" id="contactForm"  novalidate>
                    <div class="input-field">
                        <input type="text" name="name" class="form-control"
                               id="name" required
                               data-validation-required-message="Please enter your name" />
                        <label for="name" class="">   Nume </label>
                        <p class="help-block"></p>

                    </div>
                    <div class="input-field">
                        <input type="email" class="form-control" id="email" required
                               data-validation-required-message="Please enter your email" />
                        <label for="name" class="">   Email </label>
                    </div>

                    <div class="input-field">
				 <textarea rows="10" cols="100" required class="form-control materialize-textarea"
                           idation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                        <label for="name" class="">   Mesaj </label>
                    </div>
                    <div id="success"> </div> <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Trimite</button><br />
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179174.37190093574!2d27.90741155708903!3d45.43757293691818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b6dee589f2c4b5%3A0x53d7342f252d702b!2zR2FsYcibaQ!5e0!3m2!1sen!2sro!4v1574888867244!5m2!1sen!2sro" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

</section>


<?php

include("footer.php");

?>
