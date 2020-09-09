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
      // Equivalent to "select * from question"
      $questions = Question::all();

      return view('question.view_all', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // We've already created add view file.
        return view('question.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validation
      $request->validate([
          'question'=>'required',
          'option_a'=>'required',
          'option_b'=>'required',
          'option_c'=>'required',
          'option_d'=>'required',
          'answer'=>'required'
      ]);

      // Equivalent to insert query.
      $contact = new Question([
          'question' => $request->get('question'),
          'option_a' => $request->get('option_a'),
          'option_b' => $request->get('option_b'),
          'option_c' => $request->get('option_c'),
          'option_d' => $request->get('option_d'),
          'answer' => $request->get('answer')
      ]);

      // This will insert the given data in table
      $contact->save();

      // After insertion redirect to new page
      return redirect('/questions')->with('success', 'Question saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Equivalent to "select * from questin where id = $id"
      $question = Question::find($id);
      return view('question.edit', compact('question'));
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
      // Validation
      $request->validate([
          'question'=>'required',
          'option_a'=>'required',
          'option_b'=>'required',
          'option_c'=>'required',
          'option_d'=>'required',
          'answer'=>'required'
      ]);

      // Equivalent to insert query.
      $contact = Question::find($id);
      $contact->question = $request->get('question');
      $contact->option_a = $request->get('option_a');
      $contact->option_b = $request->get('option_b');
      $contact->option_c = $request->get('option_c');
      $contact->option_d = $request->get('option_d');
      $contact->answer = $request->get('answer');

      // This will insert the given data in table
      $contact->save();

      // After insertion redirect to new page
      return redirect('/questions')->with('success', 'Question updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $question = Question::find($id);
      $question->delete();
      return redirect('/questions')->with('success', 'Question deleted!');
    }

}
