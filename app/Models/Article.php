<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function writer(){

        return $this->belongsTo(Writer::class, 'writer_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
