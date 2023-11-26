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

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "users";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // ========== HIDDEN ATTRIBUTES FOR SERIALIZATION (INVISIBLE WHEN CONVERTING TO ARRAY OR JSON) ========== //
    protected $hidden = [
        'password',
        'activation_hash',
        'reset_hash',
    ];

    // ========== CASTED ATTRIBUTES (CHANGE DATA TYPE) ========== //
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        // EXAMPLE OF USAGE
        // $user = User::where('id', 'xxxxxxxx')->first();
        // $user->profile->full_name WILL RETURN THE USER'S FULL NAME
        return $this->hasOne(Profile::class);
    }

    // ========== DEFINE CARDINALITY & RELATIONSHIP BETWEEN POST AND ITS USER ========== //
    public function user()
    {
        // withoutTrashed() WILL INCLUDE ONLY ACTIVE USERS
        return $this->belongsTo(User::class)->withoutTrashed();
    }
}
