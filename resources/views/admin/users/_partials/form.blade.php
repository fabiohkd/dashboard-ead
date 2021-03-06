@include('admin.includes.alerts')
@csrf
<div class="">
	<label class="block text-sm text-gray-600" for="name">Nome</label>
	<input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" value="{{ $user->name ?? old('name')}}"
	name="name" type="text" required placeholder="Nome" aria-label="Name">
</div>
<div class="mt-2">
	<label class="block text-sm text-gray-600" for="email">Email</label>
	<input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" value="{{ $user->email ?? old('email')}}"
	name="email" type="email" required placeholder="Email" aria-label="Email">
</div>
<div class="mt-2">
	<label class="block text-sm text-gray-600" for="password">Senha</label>
	<input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password"
	name="password" type="password" placeholder="Senha" aria-label="Password">
</div>
<div class="mt-6">
	<button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Salvar</button>
</div>
