<?php
/**
 * Plugin Name: Min-mave - Calender
 * Description: Hardcoded Calender
 * Author: Donald Chi
 * Version: 0.01
*/

wp_register_style( 'kalender_minmave', plugin_dir_url( __FILE__ ) . 'css/kalender_minmave.css' );
wp_enqueue_style( 'kalender_minmave');

//wp_enqueue_style('kalender_minmave', plugins_url('css/kalender_minmave.css', __FILE__));

class Minmave_Kalender
{
    public static function showView()
    {
        if (is_category('graviditetskalender') || is_category('projekt-baby') || is_category('uge-for-uge')) 
		{ 
			//wp_enqueue_script('kalender_minmave.js', plugins_url('js/kalender_minmave.js', __FILE__ ), array('jquery'), 1, true);
			require_once __DIR__.'/views/kalender.php'; 
		}
    }
}