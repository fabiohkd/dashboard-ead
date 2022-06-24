@extends('admin.layouts.app')

@section('title', 'Home')
		
@section('content')
<h1 class="w-full text-3xl text-black pb-6">Dashboard</h1>

<div class="grid grid-cols-12 gap-6 mb-6">
	@include('admin.home._partials.statistics', [
		'total' => $totalUsers,
		'icon' => 'fas fa-users',
		'text' => 'Usuários'
	])
	@include('admin.home._partials.statistics', [
		'total' => $totalAdmins,
		'icon' => 'fas fa-robot',
		'text' => 'Administradores'
	])
	@include('admin.home._partials.statistics', [
		'total' => $totalCourses,
		'icon' => 'fas fa-video',
		'text' => 'Cursos'
	])
	@include('admin.home._partials.statistics', [
		'total' => $totalSupports,
		'icon' => 'fas fa-headset',
		'text' => 'Suporte Pendente'
	])
</div>

@endsection