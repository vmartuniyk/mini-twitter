<?php

namespace App;
use App\Like;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email','avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value){

        if(isset($value)) {

            return asset('storage/' . $value );
    
        } else {

            return asset('/images/default-avatar.jpg');
        }
        
    }
    public function timeline(){
        $friends = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(40);
    }
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toogleFollow(User $user) {

        if ( $this->following($user)) {
           return  $this->unfollow($user);
        }

        return  $this->follow($user);
        
    }

    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id', 'following_user_id'
        );
    }
    public function following(User $user) {
        return $this->follows()->where('following_user_id', $user->id)
        ->exists();
    }

    public function likes() {
         return $this->hasMany(Like::class);
     }

    
}
