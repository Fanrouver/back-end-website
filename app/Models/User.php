<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements Auditable, MustVerifyEmail, HasMedia
{
    use \OwenIt\Auditing\Auditable;
    use InteractsWithMedia, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['full_name'];
    public static $collectionValue = 'user';
    
    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->last_name}";
	}

    protected function isVideo($media) {
        return (strpos($media, 'video') !== false);
    }

    public function registerMediaCollections(): void {
        $this->addMediaCollection(self::$collectionValue)
        ->registerMediaConversions(function (Media $media) {
            if (!$this->isVideo($media->custom_properties['type'])) {
                $this->addMediaConversion('thumb')
                ->width(368)
                ->height(232)
                ->format('png')
                ->queued();
            }
        });
	}
}
