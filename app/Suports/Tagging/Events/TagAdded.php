<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Tagging\Events;

use App\Suports\Tagging\Model\Tagged;
use App\Suports\Tagging\Taggable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;

class TagAdded
{
    use SerializesModels;

    /** @var Taggable|Model **/
    public $model;

    /** @var string */
    public $tagSlug;

    /** @var Tagged */
    public $tagged;

    /**
     * Create a new event instance.
     *
     * @param Taggable|Model $model
     * @param string $tagSlug
     * @param Tagged $tagged
     */
    public function __construct($model, string $tagSlug, Tagged $tagged)
    {
        $this->model = $model;
        $this->tagSlug = $tagSlug;
        $this->tagged = $tagged;
    }
}
