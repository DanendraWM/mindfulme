<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Pertemuan extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $dates = ['jadwal_pertemuan'];
    protected $casts = [
        'jadwal_pertemuan' => 'datetime'
    ];
    public function user()
    {
        return $this->belongsTo(user::class,'user_id');
    }
    public function dokter()
    {
        return $this->belongsTo(dokter::class,'dokter_id');
    }
    public $incrementing = false;
    protected $keyType = 'string';
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if ($model->getKey() == null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }
}
