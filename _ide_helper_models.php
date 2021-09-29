<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Empresa
 *
 * @property int $id
 * @property string $nombreEmpresa
 * @property string $direccion
 * @property string $telefono
 * @property string $facebook
 * @property string $instagram
 * @property string $conocenos
 * @property string $sobreNosotros
 * @property string $tituloHome
 * @property string $tituloConocenos
 * @property string $tituloMenu
 * @property string $tituloContacto
 * @property string $imagenHome
 * @property string $imgConocenos
 * @property string $imgMenu
 * @property string $imgContacto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereConocenos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereImagenHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereImgConocenos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereImgContacto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereImgMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereNombreEmpresa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereSobreNosotros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereTituloConocenos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereTituloContacto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereTituloHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereTituloMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereUpdatedAt($value)
 */
	class Empresa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

