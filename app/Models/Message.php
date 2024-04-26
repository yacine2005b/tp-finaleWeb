<?php

namespace App\Models;
use app\models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        "message","sent_to_id","sender_id"
    ] ;

public function sender(){
    return $this->belongsTo(User::class,"sender_id");
}
public function reciever(){
    return $this->belongsTo(User::class,"sent_to_id");
}
    use HasFactory;
}
