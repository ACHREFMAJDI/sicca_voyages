@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>service Edit</h2>
      <ol>
        <li><a href="/services">service</a></li>
        <li>edit</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row m-0 px-4">
  <div class="col-12">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    <br />
    @endif
    <div class="row">
      <div class="col-12">
        <form name="service" method="post" action="{{ route('services.update', $service->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">
            <div class="col-md-6 ">
              <div class="form-group">
                <label for="service">Description:</label>
                <input type="text" class="form-control" name="description" value="{{ $service->description }}" />
              </div>
              <div class="form-group">
                <label for="ville">prix_achat:</label>
                <input type="text" class="form-control" name="prix_achat" value="{{ $service->prix_achat }}" />
              </div>

            </div>
            <div class="col-md-6 ">
              <div class="form-group">
                <label for="ville">qte:</label>
                <input type="text" class="form-control" name="qte" value="{{ $service->qte }}" />
              </div>

              <div class="form-group">
                <label for="edresse">prix_vente:</label>
                <input type="text" class="form-control" name="prix_vente" value="{{ $service->prix_vente }}" />
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
      </div>
      </form>
    </div>
  </div>






















  @endsection