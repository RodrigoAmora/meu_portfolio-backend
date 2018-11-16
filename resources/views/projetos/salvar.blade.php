@extends('admin.painel')
@section('body')

<form method="POST" action="salvarProjeto" enctype="multipart/form-data">
	@csrf
	<input type="file" name="photo">
	<input type="submit" value="Evniar">
</form>

@endsection
