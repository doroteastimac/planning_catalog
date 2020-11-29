<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_code',
        'customer_name'
        
    ];
    public function article()
    {
        return $this->belongsToMany('planning_catalog\Models\Article');
    }
}
