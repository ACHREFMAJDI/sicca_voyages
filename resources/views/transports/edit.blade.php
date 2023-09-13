@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>transport Edit</h2>
      <ol>
        <li><a href="/transports">transport</a></li>
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
        <form name="transport" method="post" action="{{ route('transports.update', $transport->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">
            <div class="col-md-6 ">
              <div class="form-group">
                <label for="transport">Numero de transport:</label>
                <input type="text" class="form-control" name="num" value="{{ $transport->num }}" />
              </div>
              <div class="form-group">
                <label for="ville">Date depart:</label>
                <input type="text" class="form-control" name="date_depart" value="{{ $transport->date_depart }}" />
              </div>
              <div class="form-group">
                <label for="edresse">Heure depart:</label>
                <input type="text" class="form-control" name="heure_depart" value="{{ $transport->heure_depart }}" />
              </div>

              <div class="form-group">
                <label for="transport">Prix vente:</label>
                <input type="text" class="form-control" name="prix_vente" value="{{ $transport->prix_vente }}" />
              </div>


              <div class="form-group">
                <label for="ville">type:</label>
                <input type="text" class="form-control" name="type" value="{{ $transport->type }}" />
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="form-group">
                <label for="ville">Numero de place:</label>
                <input type="text" class="form-control" name="n_place" value="{{ $transport->n_place }}" />
              </div>
              <div class="form-group">
                <label for="edresse">Date fin:</label>
                <input type="text" class="form-control" name="date_fin" value="{{ $transport->date_fin }}" />
              </div>
              <div class="form-group">
                <label for="edresse">Heure arrivage:</label>
                <input type="text" class="form-control" name="heure_arrivage"
                  value="{{ $transport->heure_arrivage }}" />
              </div>
              <div class="form-group">
                <label for="edresse">Prix achat:</label>
                <input type="text" class="form-control" name="prix_achat" value="{{ $transport->prix_achat }}" />
              </div>
              <div class="card" style="margin-top: 1.5rem;">
                <button type="submit" class="get-started-btn scrollto">Ajouter le transport</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>






















    @endsection