<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public const STORE_RULES=['title' => 'required', 'content' => 'required | min:15'];
    protected $fillabe=['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'news_teams');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
