<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $fillable =['name' ,'price','image' ,'user_id','quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
