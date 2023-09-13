@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>hotel Edit</h2>
            <ol>
                <li><a href="/hotels">hotel</a></li>
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
                <form name="hotel" method="post" action="{{ route('hotels.update', $hotel->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="hnom">Nom hotel:</label>
                                <input type="text" class="form-control" name="hnom" value="{{ $hotel->hnom }}" />
                            </div>
                            <div class="form-group">
                                <label for="etoile">Etoile:</label>
                                <input type="text" class="form-control" name="etoile" value="{{ $hotel->etoile }}" />
                            </div>
                            <div class="form-group">
                                <label for="site">Site:</label>
                                <input type="text" class="form-control" name="site" value="{{ $hotel->site }}" />
                            </div>
                        </div>
                        <div class="col-md-6 ">


                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" value="{{ $hotel->email }}" />
                            </div>


                            <div class="form-group">
                                <label for="tel">tel:</label>
                                <input type="text" class="form-control" name="tel" value="{{ $hotel->tel }}" />
                            </div>


                            <div class="card" style="margin-top: 1.5rem;">
                                <button type="submit" class="get-started-btn scrollto">Modification du hotel</button>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="card" style="border: 0;">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="hotel">n_hotel:</label>
                                    <input type="text" class="form-control" name="n_hotel" value="{{ $hotel->n_hotel }}" />
                                </div>
                                <div class="form-group">
                                    <label for="ville">date_depart:</label>
                                    <input type="text" class="form-control" name="date_depart" value="{{ $hotel->date_depart }}" />
                                </div>
                                <div class="form-group">
                                    <label for="edresse">h_depart:</label>
                                    <input type="text" class="form-control" name="h_depart" value="{{ $hotel->h_depart }}" />
                                </div>


                                <div class="form-group">
                                    <label for="hotel">date_achat:</label>
                                    <input type="text" class="form-control" name="date_achat" value="{{ $hotel->date_achat }}" />
                                </div>


                                <div class="form-group">
                                    <label for="ville">prix_achat:</label>
                                    <input type="text" class="form-control" name="prix_achat" value="{{ $hotel->prix_achat }}" />
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="ville">n_place:</label>
                                    <input type="text" class="form-control" name="n_place" value="{{ $hotel->n_place }}" />
                                </div>

                                <div class="form-group">
                                    <label for="edresse">date_arrivée:</label>
                                    <input type="text" class="form-control" name="date_arrivée" value="{{ $hotel->date_arrivée }}" />
                                </div>
                                <div class="form-group">
                                    <label for="edresse">h_arrivage:</label>
                                    <input type="text" class="form-control" name="h_arrivage" value="{{ $hotel->h_arrivage }}" />
                                </div>
                                <div class="form-group">
                                    <label for="edresse">type:</label>
                                    <input type="text" class="form-control" name="type" value="{{ $hotel->type }}" />
                                </div>
                                <div class="form-group">
                                    <label for="edresse">prix_vente:</label>
                                    <input type="text" class="form-control" name="prix_vente" value="{{ $hotel->prix_vente }}" />
                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group py-4">
                                    <button type="submit" class="get-started-btn scrollto">Modification du hotel</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>






















    @endsection