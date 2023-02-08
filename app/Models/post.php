<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class post extends Model
{
    use HasFactory;
      use SoftDeletes;

    protected $fillable=["title","description","post_creator","deleted_at"];
    protected $dates = [
        'from_date',
    ];

    public function user(){

        return $this->hasOne(User::class,'foreign_key');
    }
}
