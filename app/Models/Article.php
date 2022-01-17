<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','text', 'subtitle','image'
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment')->latest();
    }
    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i',strtotime($value));
    }
    public function getTeaserAttribute(){

        return Str::limit($this->text,300);

    }
}
