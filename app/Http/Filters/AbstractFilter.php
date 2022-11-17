<?php

namespace App\Http\Filters;

use illuminate\Database\Eloquent\Builder;
use PHPUnit\Framework\Constraint\Callback;

abstract class AbstractFilter implements FilterInterface
{

    private $querryParams = [];


    public function __construct(array $queryParams)
    {
        $this->querryParams =  $queryParams;   
    }

    abstract protected function getCallbacks(): array;

    public function apply(Builder $builder){
        
        $this->before($builder);

        foreach($this->getCallbacks() as $name=>$callback ){
            if(isset($this->queryParams[$name])){
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }
        }
    }

    
}


?>