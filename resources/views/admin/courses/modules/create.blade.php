@extends('admin.layouts.app')

@section('title', 'Cadastrar Módulo')

@section('content')

<h3 class="w-full text-2xl text-black pb-2">Adicionar Novo Módulo</h3>
<h3 class="w-full text-2xl text-black pb-2">Curso: <strong>{{$course->name}}</strong> </h3>
<div class="flex flex-wrap">
	<div class="w-full my-6 pr-0 lg:pr-2">
	<div class="leading-loose">
		<form class="p-10 bg-white rounded shadow-xl" action="{{ route('modules.store', $course->id) }}" method="POST" >
			@include('admin.courses.modules._partials.form')
		</form>
	</div>
	</div>
</div>
@endsection