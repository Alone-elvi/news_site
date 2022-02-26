<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

//    Поля таблицы базы данных

    protected $fillable = ['title', 'body', 'img', 'slug'];

//    protected $guarded =[];

//   Отношения с полями других таблиц

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function state() {
        return $this->hasOne(State::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
