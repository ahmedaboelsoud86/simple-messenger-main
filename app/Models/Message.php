<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['text','to_us','from_us','read_us'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'from_us');
    }
}
