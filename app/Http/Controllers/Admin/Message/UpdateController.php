<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class UpdateController extends Controller
{
    public function __invoke(Message $message)
    {

        $data = request()->validate([
            'content' => 'string',
            'host' => '',
        ]);
        //dd($data);
        $message->update($data);
        return redirect()->route('admin.message.show', $message->id);
    }

}
