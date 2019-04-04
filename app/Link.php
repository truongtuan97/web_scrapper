<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = "links";

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function website()
    {
        return $this->belongsTo('App\Website', 'website_id');
    }

    public function itemSelector()
    {
        return $this->belongsTo('App\ItemSelector', 'item_selector_id');
    }
}
