<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SystemUpdate extends Model
{
    use HasFactory;

    protected $table = 'information';
    protected $guarded = ['id'];

    public function category() 
    {
        return $this->belongsTo(SystemCategories::class, 'category_id', 'id');
    }

    // public function getCreatedAtAttribute()
    // {
    //     return \Carbon\Carbon::parse($this->attributes['created_at'])
    //         ->translatedFormat('d F Y');
    // }

}
