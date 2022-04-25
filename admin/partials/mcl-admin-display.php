<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://fillsites.net/
 * @since      1.0.0
 *
 * @package    Mcl
 * @subpackage Mcl/admin/partials
 */
?>
<?php
if (isset($_POST['mcl_size'])&&$_POST['mcl_size']) {
	update_option('mcl_telegram',$_POST['mcl_telegram']);
	update_option('mcl_viber',$_POST['mcl_viber']);
	update_option('mcl_email',$_POST['mcl_email']);
//	update_option('mcl_rect',$_POST['mcl_rect']);
	update_option('mcl_color',$_POST['mcl_color']);
	update_option('mcl_size',$_POST['mcl_size']);
	update_option('mcl_message',$_POST['mcl_message']);
}
$telegram = get_option('mcl_telegram');
$viber = get_option('mcl_viber');
$email = get_option('mcl_email');
$color = get_option('mcl_color');
$size = get_option('mcl_size');
$message = get_option('mcl_message');
//$start = get_option('mcl_rect');
?>
<h1 class="mcl-title">Magic Chat Link</h1>
<div class="mcl-admin">
    <div class="mcl-row">
        <form action="" method="post">

            <h2 class="mcl-main-title">Main settings</h2>

            <span class="mcl-setting-title">Main button size</span>
            <div>
                <input type="radio" id="sizeChoice1" name="mcl_size" value="small" <?php echo (get_option('mcl_size')=="small")?'checked':false; ?>>
                <label for="sizeChoice1">Small circle</label>

                <input type="radio" id="sizeChoice2" name="mcl_size" value="big" <?php echo (get_option('mcl_size')=="big")?'checked':false; ?>>
                <label for="sizeChoice2">Big circle</label>

                <input type="radio" id="sizeChoice3" name="mcl_size" value="rectangle" <?php echo (get_option('mcl_size')=="rectangle")?'checked':false; ?>>
                <label for="sizeChoice3">Rectangle type</label>
            </div>

<!--            <div class="rect-start-msg">-->
<!--                <span class="mcl-setting-title">Rectangle start message</span>-->
<!--                <input type="text" placeholder="enter short message" class="mcl-link" name="mcl_rect value="--><?php //echo $start;?><!--" maxlength="12">-->
<!--            </div>-->

            <span class="mcl-setting-title">Main button background</span>
            <input name="mcl_color" type="text" value="<?php echo $color;?>" class="mcl-link color-field" />

            <span class="mcl-setting-title">Welcome message</span>
            <textarea name="mcl_message" id="" cols="20" rows="5" placeholder="Say something" class="mcl-link" maxlength="25"><?php echo $message;?></textarea>

            <h3 class="mcl-main-title">Telegram link settings</h3>
            <span class="mcl-setting-title">Telegram nickname</span>
            <input type="text" placeholder="enter @yourname" class="mcl-link" name="mcl_telegram" value="<?php echo $telegram;?>">

            <h3 class="mcl-main-title">Viber link settings</h3>
            <span class="mcl-setting-title">Viber number</span>
            <input type="tel" placeholder="enter viber number" class="mcl-link" name="mcl_viber" value="<?php echo $viber;?>">

            <h3 class="mcl-main-title">Email settings</h3>
            <span class="mcl-setting-title">Your email</span>
            <input type="email" placeholder="enter your email" class="mcl-link" name="mcl_email" value="<?php echo $email;?>">


            <input type="submit" class="mcl-submit">
        </form>
    </div>
    <div class="mcl-row mcl-desc-block">
        <h2>About settings</h2>
        <p>Grogs are the mainlands of the fine yellow fever. Countless spacecrafts outweigh quirky, greatly exaggerated crews. Pars, humani generis, et pulchritudine.</p>
        <p>Grogs are the mainlands of the fine yellow fever. Countless spacecrafts outweigh quirky, greatly exaggerated crews. Pars, humani generis, et pulchritudine.</p>
        <p>Grogs are the mainlands of the fine yellow fever. Countless spacecrafts outweigh quirky, greatly exaggerated crews. Pars, humani generis, et pulchritudine.</p>
        <p>Grogs are the mainlands of the fine yellow fever. Countless spacecrafts outweigh quirky, greatly exaggerated crews. Pars, humani generis, et pulchritudine.</p>
    </div>
</div>