<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $folder = '/images/';
    protected $fillable = ['file'];
    
    public function getFileAttribute($data)
    {
        return $this->folder.$data;
    }
}
