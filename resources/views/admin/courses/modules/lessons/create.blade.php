@extends('admin.layouts.app')

@section('title', 'Cadastrar Aula')

@section('content')

<h3 class="w-full text-2xl text-black pb-2">Adicionar Nova Aula</h3>
<h3 class="w-full text-2xl text-black pb-2">Módulo: <strong>{{$module->name}}</strong> </h3>
<div class="flex flex-wrap">
	<div class="w-full my-6 pr-0 lg:pr-2">
	<div class="leading-loose">
		<form class="p-10 bg-white rounded shadow-xl" action="{{ route('lessons.store', $module->id) }}" method="POST" >
			@include('admin.courses.modules.lessons._partials.form')
		</form>
	</div>
	</div>
</div>
@endsection