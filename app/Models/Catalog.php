<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'starts_at',
        'ends_at'
    ];
    public function article()
    {
        return $this->belongsToMany('planning_catalog\Models\Article');
    }
}
