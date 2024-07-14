<?php
namespace App\Views;

class StdView
{
	public static function ErrorMessage($title, $text)
	{
		return '<p class="alert alert-danger"><strong>'. $title .'</strong><br>'. $text .'</p>';
	}
	
	public static function FormInput($text, $name, $type = 'text', $placeholder = '', $value = '')
	{
		return '<div class="form-group mb-3">'.
				form_label($text, $name).
				form_input($name, self::SetValue($name, $value), ['id' => $name, 'class' => 'form-control', 'placeholder' => $placeholder], $type).
			'</div>';
	}
	public static function FormSelect($text, $name, $options, $value = 0)
	{
		return '<div class="form-group mb-3">'.	
				form_label($text, $name).
				form_dropdown($name, $options, self::SetValue($name, $value), ['id' => $name, 'class' => 'form-control']).
				'</div>';
	}
	public static function FormButton($text, $icon = '')
	{
		if($icon)
		{
			$text = '<i class="fa-solid fa-'. $icon .'"></i> '. $text;
			
		}
		return '<center>'.
				form_button(['type' => 'submit', 'class' => 'btn btn-secondary'], $text).
				'</center>';
	}
	
	private static function SetValue($name, $value)
	{
		if(self::$formAutoValues)
		{
			return set_value($name, $value);
		}
		else
		{
			return $value;
		}
	}
	public static $formAutoValues = true;
	
}