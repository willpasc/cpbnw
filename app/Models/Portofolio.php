<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 20 Aug 2019 17:17:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Portofolio
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $introduction
 * @property string $brief
 * @property string $location
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property int $created_by
 * @property \Carbon\Carbon $updated_at
 * @property int $updated_by
 *
 * @property \App\Models\Category $category
 * @property \App\Models\AdminUser $admin_user
 * @property \Illuminate\Database\Eloquent\Collection $portofolio_images
 *
 * @package App\Models
 */
class Portofolio extends Eloquent
{
	protected $casts = [
		'category_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'category_id',
		'name',
        'introduction',
        'brief',
		'location',
        'description',
		'created_by',
		'updated_by'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function admin_user()
	{
		return $this->belongsTo(\App\Models\AdminUser::class, 'updated_by');
	}

	public function portofolio_images()
	{
		return $this->hasMany(\App\Models\PortofolioImage::class, 'portofolio_id');
	}
}
