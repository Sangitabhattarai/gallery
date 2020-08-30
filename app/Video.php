<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function images()
    {
        return $this->morphMany(Image::class, 'imagetable');
    }
}
 
?>
