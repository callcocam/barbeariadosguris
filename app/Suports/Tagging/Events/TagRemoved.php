<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Tagging\Events;

use App\Suports\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;

class TagRemoved
{
    use SerializesModels;

    /** @var Taggable|Model **/
    public $model;

    /*** @var string */
    public $tagSlug;

    /**
     * Create a new event instance.
     *
     * @param Taggable|Model $model
     * @param string $tagSlug
     */
    public function __construct($model, string $tagSlug)
    {
        $this->model = $model;
        $this->tagSlug = $tagSlug;
    }
}
