<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    protected $dates = ['deleted_at'];

    public function childsFaqCaCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(self::class, 'category_id');
    }
    public function parentFaqCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(self::class, 'category_id');
    }
    public function faqCategoryArticles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(FaqArticle::class, 'category_id');
    }
    public static function getCategories(){ // получаем корневые категории (у которых нету родителей) с жадной загрузкой отношения categories()
        return self::where('category_id','=',0)->with('categories')->get();
    }
    public function categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    { // отношение категории к дочерним категориям, отдаётся сразу с жадной загрузкой
        return $this->hasMany(self::class,'category_id','id')->with('categories');
    }
    public function publicGetArticles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(FaqArticle::class,'faq_category_id','id');
    }
}
