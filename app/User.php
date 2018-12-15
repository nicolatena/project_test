<?php
 
namespace App;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class User extends Authenticatable
{
    use Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Untuk mendapatkan data profile yang berelasi dengan User.
     */
    public function Profile()
    {
        return $this->hasOne('App\Profile', 'id_user');
    }

    // Untuk mendapatkan data kendaraan yang berelasi dengan User.
    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }

}