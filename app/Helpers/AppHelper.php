<?php
namespace App\Helpers;
use Gregwar\Image\Image;
use Illuminate\Support\Facades\File;

class AppHelper
{
     public static function instance()
     {
         return new AppHelper();
     }
	 
	public static function resizeImage($full_image_path, $width, $height, $quality)
	{
		$image = Image::open($full_image_path)->cropResize($width, $height)->webp($quality);

		return asset($image);
	}
	
	public static function cropImage($full_image_path, $width, $height, $quality)
	{
		$image = Image::open($full_image_path)->zoomCrop($width, $height)->webp($quality);
		
		return asset($image);
	}
	 
}