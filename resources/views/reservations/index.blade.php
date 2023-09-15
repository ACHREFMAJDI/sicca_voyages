@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>reservation Page</h2>
            <ol>
                <li><a href="index.html">reservation</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('reservations.create')}}" class="get-started-btn scrollto"><b>Ajouter un
                nouveau
                reservation</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr style="border: 2px solid #ffc451;border-radius: 4px;">
                        <th style="background-color:#313131;">
                            <font color="white"><b>ID reservation</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Nom d'utilisateur</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Date Reservation</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Vol</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Chambre</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Transport</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Service</b></font>
                        </th>
                        <th style="background-color:#313131;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                        <td style="vertical-align:middle;">{{$reservation->id}}</td>
                        <td style="vertical-align:middle;">{{$reservation->user_name}}</td>
                        <td style="vertical-align:middle;">{{$reservation->date_reservation}}</td>
                        <td style="vertical-align:middle;">{{$reservation->v_n_vol}}/{{$reservation->v_n_place}}</td>
                        <td style="vertical-align:middle;">
                            {{$reservation->c_hotel_id}}/{{$reservation->c_num}}/{{$reservation->c_num_etage}}
                        </td>
                        <td style="vertical-align:middle;">
                            {{$reservation->t_date_depart}}/{{$reservation->t_num}}/{{$reservation->t_n_place}}
                        </td>
                        <td style="vertical-align:middle;">{{$reservation->s_description}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('reservations.edit',$reservation->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">X</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
    </div>
</div>







@endsection