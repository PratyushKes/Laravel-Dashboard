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
    return view('index');
  }

  public function easy()
  {
      // Equivalent to "select * from question WHERE id = 1"
      $questions = Question::all(); // Returns all question
      $counts = count($questions);
      $id = rand(1,$counts);
      $question = $questions[$id]; // To select second question
      return view('easy', compact('question'));
  }


  public function medium()
  {
    // Equivalent to "select * from question WHERE id = 1"
    $questions = Question::all(); // Returns all question
    $counts = count($questions);
    $id = rand(1,$count);
    $question = $questions[$id]; // To select second question
    return view('medium', compact('question'));
  }

  public function hard()
  {
    // Equivalent to "select * from question WHERE id = 1"
    $questions = Question::all(); // Returns all question
    $counts = count($questions);
    $id = rand(0,$count);
    $question = $questions[$id]; // To select second question
    return view('hard', compact('question'));
  }
}


?>

<html>
<body>

</body>
</html>
