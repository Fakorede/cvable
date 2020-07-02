<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'fullname', 'email', 'phone', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
