<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $fillable = ['name', 'icon'];

    public function WhyChooseUsDetails()
    {
        return $this->hasMany(WhyChooseUsDetail::class);
    }
}
