<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// go to the model and get agroup of records
		$questions = Question::all();

		// return the view, and pass in the group of records to loop through
		return view('questions.index')->with('questions', $questions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('questions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// validate the form data
		$this->validate($request, [
			'title' => 'required|max:255'
			// 'description' => ''
		]);

		// process the data and submit to database
		$question = new Question();
		$question->title = $request->title;
		$question->description = $request->description;

		// if submit is successful, redirect to show method
		if($question->save()) {
			return redirect()->route('questions.show', $question->id);
		} else {
			return redirect()->route('questions.create');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		// use the model to get 1 record from the database
		$question = Question::findOrFail($id);

		// show the form for editing the specified resource
		return view('questions.show')->with('question', $question);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
