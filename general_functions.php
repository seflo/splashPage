<?php
// Globals

// image directory
define('IMG_DIR', 'img/cast/');

function printCastSlide($img_id, $file, $name, $bio) {
	$src = IMG_DIR . $file;
	$html = "<li>";
	// Slide Div
	$html .= "<div class=\"cast_slide row-fluid\">";
	// Image Div
	$html .= "<div class=\"span9\">";
	$html .= "<div class=\"img_container\">";
	$html .= "<img id=\"$img_id\" src=\"$src\" class=\"img-responsive col-xs-12\">";
	$html .= "</div>";
	$html .= "</div>";
	// Bio Div
	$html .= "<div class=\"bio center span3 text\">";
	$html .= "<div> $name </div>";
	$html .= "<span>";
	$html .= "$bio";
	$html .= "</span>";
	$html .= "</div>";
	// Close slide
	$html .= "</div>";
	$html .= "</li>";

	return $html;
}

?>