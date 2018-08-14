<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [];

    public function getAutorAttribute(){
        return "Pedro Merlo Junior";
    }
}
