<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class EditController extends Controller
{
    public function __invoke(Message $message)
    {

        return view('admin.message.edit', compact('message'));
    }

}
