<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'image',
        'active',
        'description',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getGetImageAttribute(){
        if($this->image){
            return url("storage/$this->image");
        }
    }

}
