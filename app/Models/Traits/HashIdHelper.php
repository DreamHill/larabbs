<?php

namespace App\Models\Traits;
use Hashids;
trait HashIdHelper
{

    private $hashId;
    //调用 $mode->hash_id 时 触发
    public function getHashIdAttribute()
    {
        if(!$this->hashId){
            $this->hashId = Hashids::encode($this->id);
        }
        return $this->hashId;
    }
    public function resolveRouteBinding($value)
    {
        if(!is_numeric($value)){
            $value = current(Hashids::decode($value));
            if(!$value){
                return;
            }
        }
        return parent::resolveRouteBinding($value);
    }
    public function getRouteKey()
    {
        return Hashids::encode($this->id);
    }
}