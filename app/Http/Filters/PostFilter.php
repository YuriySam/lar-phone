<?php

namespace App\Http\Filter;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;



class PostFilter extends AbstractFilter
{

    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const IMAGE = 'image';
    public const IS_PUBLISHED = 'is_published';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array{

        return[
          self::TITLE => [$this, 'title'],
         self::CONTENT => [$this, 'content'],
         self::IMAGE => [$this, 'image'],
         self::IS_PUBLISHED => [$this, 'is_published'],
         self::CATEGORY_ID => [$this, 'category_id'],
         
        ];}

    public function title($builder, $value){
        $builder->where('title', 'like','%$value%');
    }

    public function content($builder, $value)
    {
        $builder->where('content', 'like', '%$value%');
    }

    public function image($builder, $value)
    {
        $builder->where('image', 'like', '%$value%');
    }
    public function likes($builder, $value)
    {
        $builder->where('likes', 'like', '%$value%');
    }
    public function is_published($builder, $value)
    {
        $builder->where('is_published', 'like', '%$value%');
    }
    public function titcategory_id($builder, $value)
    {
        $builder->where('category_id', 'like', '%$value%');
    }
}

?>