<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $primaryKey = 'Code';
    protected $keyType = 'string';

    public function cities()
    {
        return $this->hasMany(City::class,'CountryCode','Code');
    }

    public function capital()
    {
        return $this->hasOne(City::class,'ID','Capital');
    }
}
