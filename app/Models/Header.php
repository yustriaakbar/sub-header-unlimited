<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    public function sub_header()
    {
        return $this->hasMany(self::class, 'parent_id')->with('sub_header');
    }
}
