<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'date',
        'image',
        'active',
        'description',
    ];

    public function getGetImageAttribute(){
        if($this->image){
            return url("storage/$this->image");
        }
    }
}
