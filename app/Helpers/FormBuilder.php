<?php
/**
 * FormBuilder Class
 *
 * @author  Pixelbart
 * @version 1.0
 */
namespace Helpers;

class FormBuilder
{
	/**
	 * Start the form
	 *
	 * @param array $atts
	 * @return string
	 */
	public static function start( $atts )
	{		
		if($atts['action']) {
			$a = $atts['action'];	
		} else {
			$a = '';
		}
		
		if($atts['method']) {
			$m = $atts['method'];	
		} else {
			$m = 'POST';
		}
		
		if($atts['id']) {
			$i = $atts['id'];	
		} else {
			$i = '';
		}
		
		if($atts['class']) {
			$c = $atts['class'];			
		} else {
			$c = '';
		}
		
		$form = '<form action="' . $a . '" method="' . $m . '" class="' . $c . '" id="' . $i . '" enctype="multipart/form-data" />';
		return $form;		
	}
	
	/**
	 * Generate a html end form tag
	 *
	 * @return string
	 */
	public static function close()
	{
		$form = '</form>';
		return $form;	
	}
	
	/**
	 * Generates a html input field
	 *
	 * @param array $atts
	 * @return string
	 */
	public static function input( $atts )
	{
		
		if($atts['id']) {
			$i = $atts['id'];
		}
		
		if($atts['label']) {
			if($i) {
				$l = '<label for="' . $i  . '">' . $atts['label'] . '</label>';	
			} else {
				$l = '<label>' . $atts['label'] . '</label>';				
			}
		}
		
		if($atts['type']) {
			$t = $atts['type'];
		} else {
			$t = 'text';
		}
		
		if($atts['name']) {
			$n = $atts['name'];
		} else {
			$n = '';
		}
		
		if($atts['class']) {
			$c = $atts['class'];
		} else {
			$c = '';
		}
		
		if($atts['placeholder']) {
			$p = $atts['placeholder'];
		} else {
			$p = '';
		}
		
		if($atts['value']) {
			$v = $atts['value'];
		} else {
			$v = $_POST[$n];
		}
		
		$input  = '<div class="form-group">';
		$input .= $l;
		
		$input .= '<input type="' . $t . '" name="' . $n . '" class="' . $c . '" id="' . $i . '" value="' . $v . '" placeholder="' . $p . '" />';
		
		$input .= '</div>';
		
		return $input;
	}
}
