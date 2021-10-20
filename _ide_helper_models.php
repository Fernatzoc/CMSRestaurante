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
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $section
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $get_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Meal[] $meals
 * @property-read int|null $meals_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Empresa
 *
 * @property int $id
 * @property string $nombreEmpresa
 * @property string $logo
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
 * @method static \Illuminate\Database\Eloquent\Builder|Empresa whereLogo($value)
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
 * App\Models\Events
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property string $description
 * @property string|null $image
 * @property string $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $get_image
 * @method static \Database\Factories\EventsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Events newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Events newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Events query()
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Events whereUpdatedAt($value)
 */
	class Events extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Meal
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $price
 * @property string|null $image
 * @property string $description
 * @property string $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read mixed $get_image
 * @method static \Database\Factories\MealFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meal whereUpdatedAt($value)
 */
	class Meal extends \Eloquent {}
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

