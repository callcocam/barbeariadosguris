<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */
namespace App\Suports\Categorizable;

use Illuminate\Database\Eloquent\Builder;
use App\Suports\Categorizable\Models\Category;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Categorizable
{
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable', 'categorizable');
    }

    public function categorize(...$categories): self
    {
        $this->categories()->attach($this->differenceCategoryBetweenExistences($this->normalizeCategory($categories)));
        return $this->load('categories');
    }

    public function uncategorize(...$categories): self
    {
        $this->categories()->detach($this->normalizeCategory($categories));
        return $this->load('categories');
    }

    public function decategorize(): self
    {
        $this->categories()->sync([]);
        return $this->load('categories');
    }

    public function recategorize(...$categories): self
    {
        $this->decategorize()->categorize(...$categories);
        return $this->load('categories');
    }

    public function scopeHasCategories(Builder $builder, ...$categories): Builder
    {
        return $builder->whereHas('categories', function (Builder $query) use ($categories) {
            $query->whereIn('category_id', collect($this->normalizeCategory($categories))->map(function ($category) {
                return Category::descendantsAndSelf($category);
            })->flatten()->pluck('id'));
        });
    }

    public function scopeHasStrictCategories(Builder $builder, ...$categories): Builder
    {
        return $builder->whereHas('categories', function (Builder $query) use ($categories) {
            $query->whereIn('category_id', $this->normalizeCategory($categories));
        });
    }

    /*
     * Convert everything to category ids
     */
    public function normalizeCategory(array $categories): array
    {
        $ids = collect($categories)->map(function ($categories) {
            switch (true) {
                case is_integer($categories) || is_numeric($categories):
                    return $categories;
                case is_string($categories):
                    return Category::firstOrCreate(['name' => $categories])->id;
                case $categories instanceof Category:
                    return $categories->id;
                case is_array($categories):
                    return $this->normalizeCategory($categories);
            }
        })->flatten()->toArray();

        // reject ids not exist in database
        return Category::whereIn('id', $ids)->pluck('id')->toArray();
    }

    protected function differenceCategoryBetweenExistences(array $ids): array
    {
        return array_diff($ids, $this->categories->pluck('id')->toArray());
    }

    abstract public function morphToMany(
        $related,
        $name,
        $table = null,
        $foreignPivotKey = null,
        $relatedPivotKey = null,
        $parentKey = null,
        $relatedKey = null,
        $inverse = false
    );

    abstract public function load($relations);
}
