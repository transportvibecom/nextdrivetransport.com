<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesRelinking extends Model
{
    use HasFactory;

    protected $fillable = ['anchor', 'service_id','target_service_id'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
	
	public function serviceTarget(){
        return $this->belongsTo(Service::class, 'target_service_id');
    }
	
}
