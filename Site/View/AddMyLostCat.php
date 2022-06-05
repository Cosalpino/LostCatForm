<?php
/**
 * @file    AddMyLostCat.php
 * @brief   This is the page for adding a lost cat.
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 04.06.2022 // 0.1
 */
$title = "Add my lost cat";
ob_start();
?>

<form action="">
    <!--Section start about the cat-->
    <fieldset>
        <legend class="title">Information's about the cat</legend>
        <div class="sectionForm">
            <label for="catName" class="indication"> Cat name </label>
            <input type="text" id="catName" name="catName" placeholder="Tom" required>
        </div>
        <div class="sectionForm">
            <label for="lostdate" class="indication"> Losing Date </label>
            <input type="date" id="lostdate" name="lostdate" required>
        </div>
        <div class="sectionForm">
            <label for="city" class="indication"> Losing City </label>
            <input type="text" id="city" name="city" placeholder="New York" required>
        </div>
        <div class="sectionForm">
            <label for="picture" class="indication"> Picture </label>
            <input type="file" id="picture" name="picture">
        </div>
        <div class="sectionForm">
            <label for="comments" class="indication"> Comments </label>
            <textarea name="comments" rows="5" id="comments" placeholder="He's my best-friend" class="longText"></textarea>
        </div>
        <hr>
    </fieldset>
    <!--Section finish about the cat-->
    <!--Section start about the contact-->
    <fieldset>
        <legend class="title">Information's about the contact </legend>
        <div class="sectionForm">
            <label for="contactName" class="indication"> Contact name </label>
            <input type="text" id="contactName" name="contactName" placeholder="John" required>
        </div>
        <div class="sectionForm">
            <label for="contactEmail" class="indication"> Contact email </label>
            <input type="email" id="contactEmail" name="contactEmail" placeholder="exemple@exemple.com" required>
        </div>
        <input type="submit" class="submit">
    </fieldset>
    <!--Section finish about the contact-->

</form>


<?php
$content = ob_get_clean();
require "View/Template.php";