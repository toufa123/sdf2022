<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'country_name'
    ];

    // Add text attribute to the model
    //protected $appends = ['text'];
    public function getTextAttribute()
    {
        return $this->country_name;
    }




}
