<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function fruits()
    {
        return $this->belongsToMany('App\Fruit')->withPivot('quantity', 'frequency')
            ->withTimestamps();
    }
}
