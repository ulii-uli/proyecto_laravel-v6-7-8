<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /*  los campos de la tabla */
    protected $fillable = [
        'name',
    ];


    public function Article(){

        return $this->belongsTo(Article::class);
    } 
     
    
}