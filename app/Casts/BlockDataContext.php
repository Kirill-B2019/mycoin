<?php

namespace App\Casts;



use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use App\Structures\BlockDataContext as BlockDataContextStructure;
use Illuminate\Database\Eloquent\Model;


class BlockDataContext implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return BlockDataContextStructure
     */
    public function get($model, string $key, $value, array $attributes): BlockDataContextStructure
    {

        return BlockDataContextStructure::fromArray(json_decode($value,true));

    }


    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  BlockDataContextStructure  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, string $key, $value, array $attributes): \InvalidArgumentException|string
    {
        if(!is_string($value) && !$value instanceof BlockDataContextStructure)
        {
            return new \InvalidArgumentException($key.' значение должно быть обьектом BlockDataContextStructure или json строкой');
        }
        if(is_string($value))return $value;
        return $value->toJson();

    }
}
