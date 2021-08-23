<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ParentAttachment
 *
 * @property int $id
 * @property string|null $file_name
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attachment extends Model
{
    use Uuids;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attachments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_name',
        'parent_id'
    ];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

}
