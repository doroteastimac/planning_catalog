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
        'category',
        'producer_id'
    ];
    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }
    
    public function centers()
    {
        return $this->belongsToMany(Article::class,'article_center','center_id','article_id');
    }
    public function customers()
    {
        return $this->belongsToMany(Article::class,'article_customer','article_id','customer_id');
    }
    public function catalogs()
    {
        return $this->belongsToMany(Article::class,'article_catalog','article_id','catalog_id')->withPivot('sales_count');
    }
}
