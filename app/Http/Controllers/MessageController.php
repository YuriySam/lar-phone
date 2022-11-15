<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class MessageController extends Controller
{
	public function index()
	{
		
		$messages = Message::all();
		return view('message.index', compact('messages'));
	}

	public function create()
	{

		return view('message.create');
	}

	public function store()
	{
		$data = request()->validate([
			'content' =>'string',
			'host' => '',
			
		]);
		//dd($data);
		Message::create($data);
		//return view('ophones.create');
		return redirect()->route('message.index');

	}

	public function show(Message $message)
	{

		return view('message.show', compact('message'));
	}

	public function edit(Message $message)
	{

		return view('message.edit', compact('message'));
	}

	public function update(Message $message)
	{

		$data = request()->validate([
			'content' => 'string',
			'host' => '',
		]);
		//dd($data);
		$message->update($data);
		return redirect()->route('message.show', $message->id);
	}

	public function delete()
	{
		$message = Message::find(5);
		$message->delete();

		dd('delete psge' . $message->id);
	}

	public function undelete()
	{
		$message = Message::withTrashed()->find(5);
		$message->restore();

		dd('undelete psge  ' . $message->id);
	}

	public function destroy(Message $message)
	{
		$message->delete();

		return redirect()->route('message.index');
	}

	public function firstOrCreate()
	{
		//$post = Post::find(1);
		$anotherPost = [
			'title' => 'title of post from vscode',
			'content' => 'some interesting content',
			'image' => 'imaget1.jpg',
			'likes' => '15',
			'is_published' => '1'

		];
		$message = Message::firstOrCreate(
			[
				'title' => '22title of post from vscode',
			],
			[

				'title' => '22title of post from vscode',
				'content' => 'some interesting content',
				'image' => 'imaget1.jpg',
				'likes' => '150',
				'is_published' => '1'

			]

		);


		dd('firstOrCreate records id= ' . $message->id);
	}

	public function updateOrCreate()
	{
		//dd('updateOrCreate');

		$message = Message::updateOrCreate(
			[
				'title' => 'updateOrCreate 22title of post from vscode',
			],
			[

				'title' => 'updateOrCreate 22title of post from vscode',
				'content' => 'updateOrCreate some interesting content',
				'image' => 'imaget1.jpg',
				'likes' => '150',
				'is_published' => '1'

			]

		);


		dd('updateOrCreate records id= ' . $message->id);
	}
}
