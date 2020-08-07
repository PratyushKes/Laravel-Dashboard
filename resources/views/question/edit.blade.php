@extends('adminlte::page')

@section('title', 'Update Question')

@section('content_header')
    <h1>Update Question</h1>
@stop

@section('content')
<div class="container">
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  <form method="post" action="{{ route('questions.update', $question->id) }}">
    @method('PATCH')
    @csrf
    <div class="row">
      <div class="col-25">
        <label for="subject">Question</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="question"
          placeholder="Write Question here.." style="height:200px">{{ $question->question }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Option-1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="option_a" placeholder="" value="{{ $question->option_a }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-2</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_b" placeholder="" value="{{ $question->option_b }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-3</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_c" placeholder="" value="{{ $question->option_c }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-4</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_d" placeholder="" value="{{ $question->option_d }}">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Answer</label>
      </div>
      <div class="col-75">
        <select name="answer">
          <option value="a" {{ $question->answer == 'a'? 'selected': ''}}>A</option>
          <option value="b" {{ $question->answer == 'b'? 'selected': ''}}>B</option>
          <option value="c" {{ $question->answer == 'c'? 'selected': ''}}>C</option>
          <option value="d" {{ $question->answer == 'd'? 'selected': ''}}>D</option>
        </select>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/question.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
