<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';

    // Specify which fields can be mass assigned
    protected $fillable = ['pertanyaan', 'uraian', 'katakunci', 'user_id'];

    // If needed, define relationships with other models
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
