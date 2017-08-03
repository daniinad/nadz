@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Book
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
			<form action="{{route('book.update',$book->id)}}" method="POST">
			<input type="hidden" name="_method" value="PUT">	
			<input type="hidden" name="_token" value="{{csrf_token() }}">

					<div class="form-group">
						<label class="control-lable">Title</label>
						<input type="text" name="title" class="form-control" value="{{$book->title}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Author</label>
						<input type="text" name="author_id" class="form-control" readonly="" value="{{$book->author->nama}}" >

					<div class="form-group">
						<label class="control-lable">Amount</label>
						<input type="text" name="amount" class="form-control" value="{{$book->amount}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Cover</label><br>
						<td><img src="{{asset('/img/'.$book->cover.'')}}" height="100px" width="100px"></td>
					</div>

					
				</form>
			</div>
			</div>
@endsection