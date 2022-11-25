<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class StoreController extends Controller
{
    public function __invoke()
    {
       
        $data = request()->validate([
            'content' => 'string',
            'host' => '',

        ]);
        //dd($data);
        Message::create($data);
        //return view('ophones.create');
        return redirect()->route('admin.ophone.index');
    }

	
}
