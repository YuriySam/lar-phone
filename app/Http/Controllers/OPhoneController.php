<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ophone;

class OPhoneController extends Controller
{
	public function index()
	{
		
		$ophones = Ophone::all();
		return view('ophones.index', compact('ophones'));
	}

	public function create()
	{

		return view('ophones.create');
	}

	public function store()
	{
		$data = request()->validate([
			'number' =>'string',
			'number1' => 'string',
			'surname' => 'string',
			'name' => 'string',
			'patronymic' => 'string',
			'funid' => 'integer',
			'branid' => 'integer',
			'offid' => 'integer'
		]);
		//dd($data);
		Ophone::create($data);
		//return view('ophones.create');
		return redirect()->route('ophone.index');

	}

	public function show(Ophone $ophone)
	{

		return view('ophones.show', compact('ophone'));
	}

	public function edit(Ophone $ophone)
	{

		return view('ophones.edit', compact('ophone'));
	}

	public function update(Ophone $ophone)
	{

		$data = request()->validate([
			'number' => 'string',
			'number1' => 'string',
			'surname' => 'string',
			'name' => 'string',
			'patronymic' => 'string',
			'funid' => 'integer',
			'branid' => 'integer',
			'offid' => 'integer'
		]);
		//dd($data);
		$ophone->update($data);
		return redirect()->route('ophone.show', $ophone->id);
	}

	public function delete()
	{
		$post = Ophone::find(5);
		$post->delete();

		dd('delete psge' . $post->id);
	}

	public function undelete()
	{
		$ophone = Ophone::withTrashed()->find(5);
		$ophone->restore();

		dd('undelete psge  ' . $ophone->id);
	}

	public function destroy(Ophone $ophone)
	{
		$ophone->delete();

		return redirect()->route('ophone.index');
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
		$post = Ophone::firstOrCreate(
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


		dd('firstOrCreate records id= ' . $post->id);
	}

	public function updateOrCreate()
	{
		//dd('updateOrCreate');

		$post = Ophone::updateOrCreate(
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


		dd('updateOrCreate records id= ' . $post->id);
	}
}
