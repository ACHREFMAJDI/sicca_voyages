@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>client Create</h2>
      <ol>
        <li><a href="/clients">client</a></li>
        <li>create</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row m-0 p-4">
  <div class="col-md-12">

    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form method="post" action="{{ route('clients.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="client">Nom:</label>
              <input type="text" class="form-control" name="nom" />
            </div>

            <div class="form-group">
              <label for="client">Passeport:</label>
              <input type="text" class="form-control" name="passeport" />
            </div>

            <div class="form-group">
              <label for="ville">Tel:</label>
              <input type="text" class="form-control" name="tel" />
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="ville">Prenom:</label>
              <input type="text" class="form-control" name="prenom" />
            </div>
            <div class="form-group">
              <label for="edresse">Cin:</label>
              <input type="text" class="form-control" name="cin" />
            </div>
            <div class="form-group">
              <label for="edresse">email:</label>
              <input type="text" class="form-control" name="email" />
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card" style="margin-top: 2rem;">
              <button type="submit" class="get-started-btn scrollto">Ajouter le client</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>












@endsection