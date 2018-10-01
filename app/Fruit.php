<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'price'
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot('quantity', 'frequency')
            ->withTimestamps();
    }
}
