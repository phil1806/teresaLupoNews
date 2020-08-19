<?php

namespace App\Models;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class News extends Model
{


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    use CrudTrait;
    protected $table = 'news';
    protected $guarded = [];


    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk ='uploads';
       
        $destination_path = "uploads/images";

        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image')) {

            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);

            // 1. Generate a filename.
            $filename = md5($value . time()) . '.jpg';

         
            \Storage::disk($disk)->put($destination_path . '/' . $filename, $image->stream());

            \Storage::disk($disk)->delete($this->{$attribute_name});

        
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
        }
    }
    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            \Storage::disk('uploads')->delete($obj->image);
        });
    }

}
