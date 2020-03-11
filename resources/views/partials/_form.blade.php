@csrf
<div class="form-group">
	<label for="">Título del proyecto</label>
	<input class="form-control bg-light shadow-sm" type="text" name="title" value="{{ old('title', $project->title) }}">
</div>
<div class="form-group">
	<label for="">Descripción	</label>
	<textarea class="form-control bg-light shadow-sm" name="description" id="" cols="30" rows="2">{{ old('description', $project->description) }}</textarea>
</div>
<div class="form-group">
	<label for="">URL del proyecto</label>
	<input class="form-control bg-light shadow-sm" type="text" name="url" value="{{ old('url', $project->url) }}">
</div>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}" class="link-item">Cancelar</a>