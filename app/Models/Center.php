<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $fillable = [
        'center_code',
        'center_name',
        'center_address'
    ];
    public function article()
    {
        return $this->belongsToMany('planning_catalog\Models\Article');
    }
}
