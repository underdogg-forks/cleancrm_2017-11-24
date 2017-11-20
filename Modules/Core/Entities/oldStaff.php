<?php
namespace Modules\Core\Models;

use App\Notifications\StaffResetPassword;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Stuff extends Authenticatable
{

    /*AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
    {
      use Authenticatable, Authorizable, CanResetPassword, Messagable;*/
    use Notifiable, EntrustUserTrait;

    protected $table = "stiff";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'rolemyrole'
    ];

    public function role()
    {
        return $this->hasOne(RoleStaff::class, 'staff_id', 'id');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StaffResetPassword($token));
    }
}
