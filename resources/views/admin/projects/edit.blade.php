@extends('layouts.app')
@section('content')
    <section class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <form action="{{ route('admin.projects.update',$project->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf     
        @method('PUT')
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$project->title}}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Img</label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="img" value="{{$project->img}}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">content</label>
          <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$project->content}}</textarea>
        </div>
        <div class="mb-3">
          <label for="category_id">Categoria</label>
          <select name="category_id" id="category_id" class="form-control">
              <option value="">Seleziona una categoria</option>
              @foreach($categories as $category)
                  <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                  </option>
              @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">invia</button>    
      </form>
    </section>
@endsection
