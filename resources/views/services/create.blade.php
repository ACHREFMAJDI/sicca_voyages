@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>service Create</h2>
      <ol>
        <li><a href="/services">service</a></li>
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
      <form method="post" action="{{ route('services.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="service">Description:</label>
              <input type="text" class="form-control" name="description" />
            </div>
            <div class="form-group">
              <label for="ville">prix_achat:</label>
              <input type="text" class="form-control" name="prix_achat" />
            </div>

          </div>
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="ville">qte:</label>
              <input type="text" class="form-control" name="qte" />
            </div>

            <div class="form-group">
              <label for="edresse">prix_vente:</label>
              <input type="text" class="form-control" name="prix_vente" />
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card" style="margin-top: 2rem;">
              <button type="submit" class="get-started-btn scrollto">Ajouter le service</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>












@endsection