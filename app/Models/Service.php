<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\AppHelper;

class Service extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'shortDesc', 'meta_title', 'meta_description', 'meta_h1', 'menu_anchor', 'desc', 'descOne', 'descTwo', 'descThree', 'factTitle', 'factOne', 'factTwo', 'factThree', 'factFour', 'thumbnail', 'full_image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null, $type = 'thumb')
    {
        if (($request->hasFile('thumbnail') && $type == 'thumb')  || ($request->hasFile('full_image') && $type == 'full')) {
            if ($image) {
                Storage::delete($image);
            }

            $folder = date('Y-m-d');
			if($type == 'thumb'){
				return $request->file('thumbnail')->store("images/{$folder}");
			} else if($type == 'full'){
				return $request->file('full_image')->store("images/{$folder}");
			}
        }
        return null;
    }

    public function getImage($width = null, $height = null, $quality = 75, $zc = 0, $type = 'thumb')
    {

        if ($type == 'thumb') {
			if(!$this->thumbnail){
				return asset("no-image.png");
			}
            
        }
		
        if ($type == 'full') {
			if(!$this->full_image){
				return asset("no-image.png");
			}
            
        }
		
		$width = empty($width)?1000:$width;
		if($type == 'thumb'){
			$full_image_path = public_path("uploads/{$this->thumbnail}");
		} else {
			$full_image_path = public_path("uploads/{$this->full_image}");
		}
		

					
		if($zc == 1){
		return AppHelper::cropImage($full_image_path, $width, $height, $quality);
		} else {
		return AppHelper::resizeImage($full_image_path, $width, $height, $quality);
		}

        //return asset("uploads/{$this->thumbnail}");
    }
	
	public function servicesRelinking(){
        return $this->hasMany(ServicesRelinking::class,'target_service_id');
    }
}
