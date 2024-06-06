<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function multi_image()
    {
        return $this->hasMany(PortfoliomultiImage::class, 'portfolio_id' ,'id');
    }
}
