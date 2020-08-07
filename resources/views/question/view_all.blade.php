@extends('adminlte::page')

@section('title', 'Manage Question')

@section('content_header')
    <h1>Manage Question</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
      </div>
    <div class="col-sm-12">
        <h1 class="display-3">Questions</h1>
        <div class="col-sm-12">
          <div>
            <a style="margin: 19px;" href="{{ route('questions.create')}}" class="btn btn-primary">New question</a>
          </div>
      <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Question</td>
              <td>Option A</td>
              <td>Option B</td>
              <td>Option C</td>
              <td>Option D</td>
              <td>Answer</td>
              <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->question}}</td>
                <td>{{$question->option_a}}</td>
                <td>{{$question->option_b}}</td>
                <td>{{$question->option_c}}</td>
                <td>{{$question->option_d}}</td>
                <td>{{$question->answer}}</td>
                <td>
                    <a href="{{ route('questions.edit',$question->id)}}" class="btn btn-primary">
                      <i class="fa fas fa-edit fa-sm"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('questions.destroy', $question->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">
                        <i class="fa fas fa-trash fa-sm"></i>
                      </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    <div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="question1.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
