<?php

/*

 Plugin Name: WP Capitalized Titles

 Plugin URI: http://easyguidetowp.com/wordpress-plugins/wordpress-capitalized-titles-plugin/

 Description: This is plugin will convert all your post and page titles into capitalized word format, Buzzfeed style.

 Version: 1.0

 Author: Easy Guide To Wordpress

 Author URI: http://easyguidetowp.com/

 License: 

 */



/*  Copyright 2014  Andy Skraga / Easy Guide To WP (email : info@easyguidetowp.com)



 This program is free software; you can redistribute it and/or modify

 it under the terms of the GNU General Public License as published by

 the Free Software Foundation; either version 2 of the License, or

 (at your option) any later version.



 This program is distributed in the hope that it will be useful,

 but WITHOUT ANY WARRANTY; without even the implied warranty of

 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

 GNU General Public License for more details.



 You should have received a copy of the GNU General Public License

 along with this program; if not, write to the Free Software

 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

 */



add_filter( 'the_title', 'capitalized_wp_titles_convert');

function capitalized_wp_titles_convert ($title) {
    $title = ucwords($title);
    return $title;
}

?>