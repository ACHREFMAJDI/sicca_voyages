@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>chambre Edit</h2>
            <ol>
                <li><a href="/chambres">chambre</a></li>
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
                <form name="chambre" method="post" action="{{ route('chambres.update', $chambre->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="chambre">Nom Hotel:</label>
                                <select name='getHotel' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open hotels menu</option>
                                    @foreach ($hotels as $hotel)
                                    <option value='{{ $hotel->id }}' selected>
                                        {{ $hotel->hnom }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="num_etage">Numero etage:</label>
                                <input type="text" class="form-control" name="num_etage" value="{{ $chambre->num_etage }}" />
                            </div>

                            <div class="form-group">
                                <label for="date_debut">Date debut:</label>
                                <input type="text" class="form-control" name="date_debut" value="{{ $chambre->num_etage }}" />
                            </div>

                            <div class="form-group">
                                <label for="ville">prix_achat:</label>
                                <input type="text" class="form-control" name="prix_achat" value="{{ $chambre->num_etage }}" />
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="n_place">Numero de place:</label>
                                <input type="text" class="form-control" name="n_place" value="{{ $chambre->n_place }}" />
                            </div>

                            <div class="form-group">
                                <label for="num">Numero de chambre:</label>
                                <input type="text" class="form-control" name="num" value="{{ $chambre->num }}" />
                            </div>

                            <div class="form-group">
                                <label for="date_fin">Date fin:</label>
                                <input type="text" class="form-control" name="date_fin" value="{{ $chambre->date_fin }}" />
                            </div>

                            <div class="form-group">
                                <label for="edresse">prix_vente:</label>
                                <input type="text" class="form-control" name="prix_vente" value="{{ $chambre->prix_vente }}" />
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group py-4">
                                <button type="submit" class="get-started-btn scrollto">Modification du chambre</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



























        @endsection