<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_code',
        'article_name',
        'article_tp',
        'article_pal',
        'category'
    ];
    public function catalog()
    {
        return $this->belongsToMany('planning_catalog\Models\Catalog');
    }
    public function customer()
    {
        return $this->belongsToMany('planning_catalog\Models\Customer');
    }
    public function center()
    {
        return $this->belongsToMany('planning_catalog\Models\Center');
    }
}
