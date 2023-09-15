@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>reservation Edit</h2>
            <ol>
                <li><a href="/reservations">reservation</a></li>
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
                <form name="reservation" method="post" action="{{ route('reservations.update', $reservation->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="ville">Date de reservation:</label>
                                <input type="text" class="form-control" name="date_reservation" value="{{ $reservation->date_reservation }}" />
                            </div>
                            <div class="form-group">
                                <label for="reservation">Vol:</label>
                                <select name='id_vol' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option>Open vols menu</option>
                                    @foreach ($vols as $vol)
                                    <option value='{{ $vol->id }}'>
                                        {{ $vol->n_vol }}/{{ $vol->n_place }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card" style="margin-top: 1.5rem;">
                                <button type="submit" class="get-started-btn scrollto">Ajouter la reservation</button>
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="ville">Chambre:</label>
                                <select name='id_chambre' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option>Open chambres menu</option>
                                    @foreach ($chambres as $chambre)
                                    <option value='{{ $chambre->id }}'>
                                        {{ $chambre->hotel_nom }}/{{ $chambre->num }}/{{ $vol->num_etage }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="edresse">Transport:</label>
                                <select name='id_transport' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option>Open transports menu</option>
                                    @foreach ($transports as $transport)
                                    <option value='{{ $transport->id }}'>
                                        {{ $transport->date_depart }}/{{ $transport->num }}/{{ $transport->n_place }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edresse">Service:</label>
                                <select name='id_service' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option>Open services menu</option>
                                    @foreach ($services as $service)
                                    <option value='{{ $service->id }}'>
                                        {{ $service->description }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

























        @endsection