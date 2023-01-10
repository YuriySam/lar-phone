<?php

namespace App\http\Controllers\Kmr\Appeal;

use App\Http\Controllers\Controller;

use App\Services\Kmr\Appeal\Service;


class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        
        $this->service = $service; 
    }
    
   
}
