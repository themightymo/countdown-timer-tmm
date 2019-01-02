<?php
/*
Plugin Name: Countdown Timer by The Mighty Mo!
Plugin URI: https://www.themightymo.com/
Description: Repeating & Recurring 24-hour javascript countdown timer by themightymo.com
Author: themightymo
Author URI: https://www.themightymo.com
Version: 1.0
License: GPLv2 or later
Text Domain: themightymo
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2019 The Mighty Mo! Design Co.
*/





function countdown_timer_custom_js () {
	wp_enqueue_script( 'countdown_timer_custom_js', plugin_dir_url( __FILE__ ) . 'countdown-timer-tmm.js', '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'countdown_timer_custom_js');

function countdown_timer_custom_css () {
	wp_enqueue_style( 'countdown_timer_custom_css', plugin_dir_url( __FILE__ ) . 'countdown-timer-tmm.css' );
}
add_action('wp_enqueue_scripts', 'countdown_timer_custom_css');