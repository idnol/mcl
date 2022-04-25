<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://fillsites.net/
 * @since      1.0.0
 *
 * @package    Mcl
 * @subpackage Mcl/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="mcl-main" style="<?php echo (get_option('mcl_size') == 'rectangle')?'margin-bottom:0; align-items: end;':'align-items: center;';?>">
    <div class="mcl-main-btn mcl-main-btn-<?php
    if (get_option('mcl_size') == 'small') {
	    echo 'small';
    } elseif (get_option('mcl_size') == 'big') {
	    echo 'big';
    } elseif (get_option('mcl_size') == 'rectangle') {
	    echo 'rectangle';
    }
    ?>"
         style="background: <?php echo get_option('mcl_color');?>;" onclick="DisplayChatsButtons()"
    >
        <img src="<?php echo plugins_url();?>/mcl/public/img/main.svg" class="mcl-chats-main-img mcl-chats-img-<?php echo (get_option('mcl_size') == 'small'||get_option('mcl_size') == 'rectangle')?'small':'big';?>" alt="">
        <img src="<?php echo plugins_url();?>/mcl/public/img/close.svg" class="mcl-chats-img-close" alt="">
	    <?php echo (get_option('mcl_size') == 'rectangle')?'<span class="mcl-text">Tap me. I can help you!</span>':false;?>
    </div>
    <div class="mcl-chats-buttons">
		<?php if (get_option('mcl_telegram')):?>
            <a href="https://t.me/<?php echo get_option('mcl_telegram');?>" target="_blank">
                <div class="mcl-chats mcl-telegram mcl-chats-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                    <img src="<?php echo plugins_url();?>/mcl/public/img/telegram.svg" alt="" class="mcl-chats-img-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                </div>
            </a>
		<?php endif;?>
        <?php if (get_option('mcl_viber')):?>
            <a href="viber://chat?number=<?php echo get_option('mcl_viber');?>">
                <div class="mcl-chats mcl-viber mcl-chats-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                    <img src="<?php echo plugins_url();?>/mcl/public/img/viber.svg" alt="" class="mcl-chats-img-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                </div>
            </a>
		<?php endif;?>
        <?php if (get_option('mcl_email')):?>
            <a href="mailto:<?php echo get_option('mcl_email');?>">
                <div class="mcl-chats mcl-email mcl-chats-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                    <img src="<?php echo plugins_url();?>/mcl/public/img/mail.svg" alt="" class="mcl-chats-img-<?php echo (get_option('mcl_size') == 'small')?'small':'big';?>">
                </div>
            </a>
        <?php endif;?>
    </div>
</div>
