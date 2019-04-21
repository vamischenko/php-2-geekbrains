<?php
/**
 * Шаблон контактов
 * =======================
 */
?>

<div class="contact_us">
    <div class="breadcrumbs">
        <a href="./">Home</a><span>&nbsp;&gt;&gt;&nbsp;</span><span class="breadcrumbs-active">Contact Us</span>
    </div>
    <?php
    if (isset($_GET['success'])) {
        echo '<h3 class="new-products">Thank you for your feedback!</h3>';
    } else {
        echo '
            <form action="models/feedback.php" method="POST" class="contact">
                <p>FULL NAME<sup>*</sup></p>
                <p><input type="text" name="username" placeholder="e.g. robert smith" required></p><br>
                <p>EMAIL<sup>*</sup></p>
                <p><input type="email" name="email" placeholder="e.g. name@nome.com" required></p><br>
                <p>COMPANY</p>
                <p><input type="text" name="company" placeholder="e.g. your company (optional)"></p><br>
                <p>SUBJECT<sup>*</sup></p>
                <p><input type="text" name="subject" placeholder="e.g. info" required></p><br>
                <p>MESSAGE</p>
                <p><textarea name="message" required></textarea></p>
                <p><input type="submit" value="Send"></p>
            </form>
            <div class="address">
                <h4>Address</h4>
                <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                <p class="geolocation">&nbsp;&nbsp;Ut interdum tristique est com<wbr>modo pharetra.</p>
                <p class="lorem">Lorem Ipsum is&nbsp;siply dummy text of&nbsp;the printing and over</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<a href="tel:1-900-324-98-76" class="phone-address">1-900-324-98-76</a></p><br>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;<a href="mailto:info@surfhouse.com" class="email-address">info@surfhouse.com</a></p><br>
                <p class="customer-service">If&nbsp;you have questions about your order or&nbsp;need any general information, our customer service team will be&nbsp;happy to&nbsp;assist you.</p>
            </div>';
    }
    ?>
    <div class="clr">
    </div>
    <div class="brands brands-contact">
    </div>
</div>