<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqArticle extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    // категория статьи
    public function faqCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FaqCategory::class,'faq_category_id','id');
    }
}
