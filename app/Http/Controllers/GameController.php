<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class GameController extends Controller
{
  // This line checks if the user has logged in or not.
  // Since we don't want to authenticate the admin pages so we'll disable it for now.

  public function index()
  {
      // Equivalent to "select * from question WHERE id = 1"
      $questions = Question::all(); // Returns all question

      $question = $questions[0]; // To select second question

      return view('index', compact('question'));
  }
}
