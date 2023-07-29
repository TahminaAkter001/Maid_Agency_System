<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maid extends Model
{
    use HasFactory;
    protected $table = 'maids';
    protected $fillable = [
        'serv_in',
        'name',
        'slug',
        'details',
        'salary',
        'image',
        'nid',
        'address',

    ];
    public function service(){
        return $this->belongsTo(Services::class,'serv_id','id');
    }
};

