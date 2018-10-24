<?php

/**
 *  * @package howdyparser
 *   * @version 1.0
 *    */
/*
 * Plugin Name: howdyparser
 * Description: Plugin that grabe posts from howdyho.net
 * Author: Fatoom
 * Version: 1.0
 * Author URI: https://vk.com/npa98
 * */

add_action('admin_menu', function(){
    add_menu_page('howdyparser - парсинг сайта howdyho.net', 'HowdyParser', 8, 'howdyparser', function(){
        require('controller.php');
    });
});
