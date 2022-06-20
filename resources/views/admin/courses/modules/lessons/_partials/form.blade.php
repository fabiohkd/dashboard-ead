@include('admin.includes.alerts')
@csrf
<div class="">
	<label class="block text-sm text-gray-600" for="name">Nome *</label>
	<input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" value="{{ $lesson->name ?? old('name')}}"
	name="name" type="text" required placeholder="Nome" aria-label="Name">
</div>
<div class="mt-2">
	<label class="block text-sm text-gray-600" for="video">Vídeo *</label>
	<input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="video" value="{{ $lesson->video ?? old('video')}}"
	name="video" type="text" required placeholder="Vídeo" aria-label="Video">
</div>
<div class="mt-2">
	<label class="block text-sm text-gray-600" for="description">Descrição</label>
	<textarea name="description" id="description" cols="30" rows="3" 
		class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" placeholder="Descrição" aria-label="Description">
		{{ $lesson->description ?? old('descripition')}}	
	</textarea>	
</div>

<div class="mt-6">
	<button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Salvar</button>
</div>
