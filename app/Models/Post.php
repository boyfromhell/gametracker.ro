<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string|null $feautred_image
 * @property string $title
 * @property string $slug
 * @property string|null $excerpt
 * @property string|null $body
 * @property string|null $external_url
 * @property \Illuminate\Support\Carbon|null $publish_at
 * @property bool $is_exclusive
 * @property bool $is_published
 * @property string|null $view_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $author
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereExternalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereFeautredImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereIsExclusive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post wherePublishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereViewCount($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'is_published' => 'boolean',
        'is_exclusive' => 'boolean',
        'publish_at' => 'date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
