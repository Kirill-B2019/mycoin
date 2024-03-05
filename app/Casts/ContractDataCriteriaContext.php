<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use App\Structures\ContractDataCriteriaContext as ContractDataCriteriaContextStructure;
use Illuminate\Database\Eloquent\Model;

class ContractDataCriteriaContext implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return ContractDataCriteriaContextStructure
     */
    public function get($model, string $key, $value, array $attributes): ContractDataCriteriaContextStructure
    {
        return ContractDataCriteriaContextStructure::fromcCiteriaArray(json_decode($value));
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
    public function set($model, string $key, $value, array $attributes)
    {
        if(!is_string($value) && !$value instanceof ContractDataCriteriaContextStructure){
            return new \InvalidArgumentException($key.' значение должно быть обьектом ContractDataCriteriaContextStructure или json строкой');
        }
        if(is_string($value))return $value;
        return $value->toJson();
    }
}
