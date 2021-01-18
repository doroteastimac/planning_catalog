<?php

/*
    Proučite u ovom dokumentu sljedeće:
    1. kako su definirane 1 to many veze
    2. kako su definirane many to many veze
    3. proučiti https://laravel.com/docs/8.x/eloquent-relationships
       koji objašnjava detaljnije kako se definiraju veze.
*/

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /*
        Atributi kod kojih je dozvoljen INSERT
    */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'role_id'
    ];

    /*
        Nikada nemoj poslati na frontend sljedeće atribute (kolone)
    */
    protected $hidden = [
        'password'
    ];

    /*
        Definiranje svih one to many veza:
    */
    public function role() { return $this->belongsTo(Role::class); }

    public function country() { return $this->belongsTo(Country::class); }

    /*
        Definiranje svih many to many veza:
    */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_membership'); /* ime sredisnje (pivot) tablice */
    }

    public function friendships()
    {
        /* pogledati https://www.alexsears.com/tutorial/user-friendships-laravel/ */
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
            ->where(function($query) {
                $query->whereNotNull('accepted_at'); /* samo oni koje ste prihvatili */
            });

        /* Pitanje: što znači 'friendships', 'user_id', 'friend_id' ovdje?
           friendships - ime tablice
           user_id - ime prvog kljuca
           friend_id - ime drugog kljuca
           Napomena: pogledati u migracije
        */
    }

    public function friendRequests()
    {
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
            ->where(function($query) {
                $query->whereNull('accepted_at'); /* samo oni koje niste prihvatili */
            });
    }

    /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3
}