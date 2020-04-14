<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $guarded = [];


    public function profileImage()
    {
        $imagePaht =  ($this->image) ?   $this->image : 'profile/G6OfSVuNdQlC1bNgDHL13TPwVNiZ4D2gEc1FtqM5.png';
        return '/storage/' . $imagePaht;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
