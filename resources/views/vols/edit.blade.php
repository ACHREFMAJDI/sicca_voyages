@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Vol Edit</h2>
      <ol>
        <li><a href="/vols">Vol</a></li>
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
        <form name="vol" method="post" action="{{ route('vols.update', $vol->id) }}">
          @method('PATCH')
          @csrf
          <div class="card" style="border: 0;">
            <div class="row">
              <div class="col-md-6 ">
                <div class="form-group">
                  <label for="vol">n_vol:</label>
                  <input type="text" class="form-control" name="n_vol" value="{{ $vol->n_vol }}" />
                </div>
                <div class="form-group">
                  <label for="ville">date_depart:</label>
                  <input type="text" class="form-control" name="date_depart" value="{{ $vol->date_depart }}" />
                </div>
                <div class="form-group">
                  <label for="edresse">h_depart:</label>
                  <input type="text" class="form-control" name="h_depart" value="{{ $vol->h_depart }}" />
                </div>


                <div class="form-group">
                  <label for="vol">date_achat:</label>
                  <input type="text" class="form-control" name="date_achat" value="{{ $vol->date_achat }}" />
                </div>


                <div class="form-group">
                  <label for="ville">prix_achat:</label>
                  <input type="text" class="form-control" name="prix_achat" value="{{ $vol->prix_achat }}" />
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="form-group">
                  <label for="ville">n_place:</label>
                  <input type="text" class="form-control" name="n_place" value="{{ $vol->n_place }}" />
                </div>

                <div class="form-group">
                  <label for="edresse">date_arrivée:</label>
                  <input type="text" class="form-control" name="date_arrivée" value="{{ $vol->date_arrivée }}" />
                </div>
                <div class="form-group">
                  <label for="edresse">h_arrivage:</label>
                  <input type="text" class="form-control" name="h_arrivage" value="{{ $vol->h_arrivage }}" />
                </div>
                <div class="form-group">
                  <label for="edresse">type:</label>
                  <input type="text" class="form-control" name="type" value="{{ $vol->type }}" />
                </div>
                <div class="form-group">
                  <label for="edresse">prix_vente:</label>
                  <input type="text" class="form-control" name="prix_vente" value="{{ $vol->prix_vente }}" />
                </div>

              </div>
            </div>
            <div class="row">

              <div class="col-md-6">
                <div class="form-group py-4">
                  <button type="submit" class="btn btn-primary">Modification du vol</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>






















  @endsection
