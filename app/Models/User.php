<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'bio',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function affichages(){
        return $this->hasMany(Affichage::class);
    }
    public function comments(){
        return $this->hasMany(comment::class);
    }
    public function sent(){
        return $this->hasMany(Message::class,'sender_id');
    }
    public function received(){
        return $this->hasMany(Message::class,'sent_to_id');
    }

    public function getImageURL(){
        if($this->image){
            return url('storage/'.$this->image);
        }
        return asset('images/unknownPfp.png');
    }
      public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}