<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use App\Models\BlockChain\BlockDataContext as BlockDataContextStructure;
use function PHPUnit\Framework\isInstanceOf;

class BlockDataContext implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return BlockDataContextStructure::fromArray(json_decode($value,true));
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, string $key, $value, array $attributes)
    {
        if(!is_string($value) && !$value InstanceOf BlockDataContextStructure)
        {
            return new \InvalidArgumentException($key,'значение должно быть обьектом BlockDataContextStructure или json строкой');
        }
        if(is_string($value))return $value;
        return $value->toJson();
    }
}
