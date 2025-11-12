<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceReview extends Model
{
    protected $fillable = ['service_id','name','rating','comment'];
    public $timestamps = true;

    public function service(){ return $this->belongsTo(Service::class); }
}
