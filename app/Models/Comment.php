<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * Renvoi l'utilisateur qui a posé la pièce jointe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function photo()
     {
         return $this->belongsTo(Photo::class);
     }

    /**
     * Renvoi l'utilisateur qui a posé la pièce jointe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function replyTo()
     {
         return $this->belongsTo(Comment::class, 'comment_id' === 'id');
     }

     public function commentReply()
     {
         return $this->hasMany(Comment::class);
     }
}
