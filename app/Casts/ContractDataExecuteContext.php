<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use App\Structures\ContractDataExecuteContext as ContractDataExecuteContextStructure;
use Illuminate\Database\Eloquent\Model;

class ContractDataExecuteContext implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return ContractDataExecuteContextStructure
     */
    public function get($model, string $key, $value, array $attributes): ContractDataExecuteContextStructure
    {
        return ContractDataExecuteContextStructure::fromcExecuteArray(json_decode($value));
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return false|\InvalidArgumentException|string
     */
    public function set($model, string $key, $value, array $attributes): false|\InvalidArgumentException|string
    {
        if(!is_string($value) && !$value instanceof ContractDataExecuteContextStructure){
            return new \InvalidArgumentException($key.' значение должно быть обьектом ContractDataExecuteContextStructure или json строкой');
        }
        if(is_string($value))return $value;
        return $value->toJson();
    }
}
