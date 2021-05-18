<?php

namespace App\Observers;


use App\Models\Category;
use Illuminate\Support\Str;


class CategoryObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function created(Category $category)
    {
        $category->slug = Str::slug($category->slugy, '-');
        $category->save();

    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function updated(Category $category)
    {

    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
