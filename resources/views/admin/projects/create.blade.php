@extends('layouts.app')
@section('content')
    <section class="container">
      <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf     
          <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Img</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="img">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">invia</button>    
            </form>
    </section>
@endsection
