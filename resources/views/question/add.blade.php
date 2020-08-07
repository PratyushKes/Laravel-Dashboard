@extends('adminlte::page')

@section('title', 'Add Question')

@section('content_header')
    <h1>Add Question</h1>
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
  <form method="post" action="{{ route('questions.store') }}">
    @csrf
    <div class="row">
      <div class="col-25">
        <label for="subject">Question</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="question" placeholder="Write Question here.." style="height:200px"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Option-A</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="option_a" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-B</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_b" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-C</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_c" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Option-D</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="option_d" placeholder="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Answer</label>
      </div>
      <div class="col-75">
        <select name="answer">
          <option value="a">A</option>
          <option value="b">B</option>
          <option value="c">C</option>
          <option value="d">D</option>
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
