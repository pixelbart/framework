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
	 * Start form
	 *
	 * @param array $atts Attributes
	 * @retun string $form
	 */	
	public static function form( $atts )
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
		
		$form  = '<form action="' . $a . '" method="' . $m . '" class="' . $c . '" id="' . $i . '" enctype="multipart/form-data" autocomplete="false">';
		
 		return $form;		
	}
	
	/**
	 * Close form
	 *
	 * @retun string $form
	 */	
	public static function form_close()
	{
		$form = '</form>';
		return $form;	
	}
	
	/**
	 * Generate an html input
	 *
	 * @param array $atts Attributes
	 * @retun string $input
	 */	
	public static function input( $atts )
	{
		
		if($atts['id']) {
			$i = $atts['id'];
		}
		
		if($atts['required'] == true) {
			$r = 'required="required"';
		}
		
		if($atts['label']) {
			if($i) {
				if($r) {
					$l = '<label for="' . $i  . '">' . $atts['label'] . ' <span class="req">*</span></label>';	
				} else {
					$l = '<label for="' . $i  . '">' . $atts['label'] . '</label>';						
				}
			} else {
				if($r) {
				$l = '<label>' . $atts['label'] . ' <span class="req">*</span></label>';
				} else {
				$l = '<label>' . $atts['label'] . '</label>';
				}
			}
		} else {
			$l = '';
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
		
		if($atts['container']) {
			$con = $atts['container'];
		} else {
			$con = '';
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
		
		$input  = '<div class="form-group ' . $con . '">';
		$input .= $l;
		
		
		if($t == 'textarea') {
		
			$input .= '<textarea name="' . $n . '" class="form-control ' . $c . '" id="' . $i . '"placeholder="' . $p . '" ' . $r . '>' . $v . '</textarea>';
					
		} else {
		
			$input .= '
			<input type="' . $t . '" name="' . $n . '" class="form-control ' . $c . '" id="' . $i . '" value="' . $v . '" placeholder="' . $p . '"  ' . $r . ' 
			 readonly onfocus="this.removeAttribute(\'readonly\');" />';
		
		}
			
		$input .= '</div>';
		
		return $input;
	}
	
	/**
	 * Generate an progress bar
	 *
	 * @param array $atts Attributes
	 * @retun string $progress
	 */	
	public static function progress( $atts )
	{
		
		if($atts['id']) {
			$i = $atts['id'];
		}
		
		if($atts['class']) {
			$c = $atts['class'];
		} else {
			$c = '';
		}
		
		if($atts['container']) {
			$con = $atts['container'];
		} else {
			$con = '';
		}
		
		if($atts['value']) {
			$v = $atts['value'];
		} else {
			$v = 0;
		}
		
		if($atts['label_left']) {
			$ll = $atts['label_left'];
		} else {
			$ll = '';
		}
		
		if($atts['label_right']) {
			$lr = $atts['label_right'];
		} else {
			$lr = '';
		}
		
		$progress  = '<div class="form-group ' . $con . ' form-progress">';					
		$progress .= '<span class="label_left">' . $ll . '</span>';					
		$progress .= '<span class="label_right">' . $lr . '</span>';	
		$progress .= '<div class="bar' . $c . '" style="width: ' . $v . '%"></div>';		
		$progress .= '</div>';
		
		return $progress;
	}
	
	
	/**
	 * Start select
	 *
	 * @param array $atts Attributes
	 * @retun string $select
	 */
	public static function select( $atts )
	{		
		if($atts['id']) {
			$i = $atts['id'];	
		} else {
			$i = '';
		}
		
		if($atts['required'] == true) {
			$r = 'required="required"';
		}
		
		if($atts['label']) {
			if($i) {
				if($r) {
					$l = '<label for="' . $i  . '">' . $atts['label'] . ' <span class="req">*</span></label>';	
				} else {
					$l = '<label for="' . $i  . '">' . $atts['label'] . '</label>';						
				}
			} else {
				if($r) {
				$l = '<label>' . $atts['label'] . ' <span class="req">*</span></label>';
				} else {
				$l = '<label>' . $atts['label'] . '</label>';
				}
			}
		} else {
			$l = '';
		}
		
		if($atts['class']) {
			$c = $atts['class'];			
		} else {
			$c = '';
		}
		
		if($atts['container']) {
			$con = $atts['container'];
		} else {
			$con = '';
		}
		
		if($atts['name']) {
			$n = $atts['name'];
		} else {
			$n = '';
		}
		
		$select .= '<div class="form-group ' . $con . '">';	
		$select .= $l;	
		
		$select .= '<select id="' . $a . '" class="' . $c . '" name="' . $n . '">';
		
		return $select;		
	}
	
	
	/**
	 * Close select
	 *
	 * @retun string $select
	 */
	public static function select_close()
	{		
		$select .= '</select>';
		
		$select .= '</div>';
		
		return $select;		
	}
	
	/**
	 * Generate an html option
	 *
	 * @param array $atts Attributes
	 * @retun string $option
	 */	
	public static function option( $atts )
	{
		
		if($atts['label']) {
			$l = $atts['label'];
		} else {
			$l = '';
		}
		
		if($atts['value']) {
			$v = $atts['value'];
		}
		
		if($atts['selected'] == true) {
			$d = 'selected="selected"';
		}
		
		$option = '<option value="' . $v . '" ' . $d . '>' . $l . '</option>';
		
		return $option;
	}
}
