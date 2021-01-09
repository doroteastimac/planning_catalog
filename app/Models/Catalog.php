<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'starts_at',
        'ends_at',
        'catalog_type_id'
    ];
    public function catalog_type()
    {
        return $this->belongsTo(CatalogType::class);
    }
    public function article_catalog()
    {
        return $this->belongsToMany(Catalog::class,'article_catalog','article_id','catalog_id');
    }
}
