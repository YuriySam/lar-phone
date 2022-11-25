<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class ShowController extends Controller
{
    public function __invoke(Message $message)
    {

        return view('admin.message.show', compact('message'));
    }

}
