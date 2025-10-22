<?php

namespace App\Models\MainPage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\AppHelper;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['thumbnail'];

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
        }
        return null;
    }

    public function getImage($width = null, $height = null, $quality = 75, $zc = 0)
    {
        if (!$this->thumbnail) {
            return asset("no-image.png");
        }
		$width = empty($width)?1920:$width;
		$full_image_path = public_path("uploads/{$this->thumbnail}");
		if($zc == 1){
		return AppHelper::cropImage($full_image_path, $width, $height, $quality);
		} else {
		return AppHelper::resizeImage($full_image_path, $width, $height, $quality);
		}

        //return asset("uploads/{$this->thumbnail}");
    }
}
