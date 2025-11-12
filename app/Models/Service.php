<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','user_id','title','slug','short_description','content','price','location','phone_number','status','thumbnail'];

    public function category(){ return $this->belongsTo(Category::class); }
    public function user(){ return $this->belongsTo(User::class); }
    public function images(){ return $this->hasMany(ServiceImage::class); }
    public function reviews(){ return $this->hasMany(ServiceReview::class); }
}
