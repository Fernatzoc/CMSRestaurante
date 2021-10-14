<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'section'
    ];

    public function getGetImageAttribute(){
        if($this->image){
            return url("storage/$this->image");
        }
    }

    public function meals(){
        return $this->hasMany(Meal::class);
    }

}
