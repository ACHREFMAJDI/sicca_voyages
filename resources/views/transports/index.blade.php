@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>transport Page</h2>
            <ol>
                <li><a href="index.html">transport</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('transports.create')}}" class="get-started-btn scrollto"><b>Ajouter un
                nouveau
                transport</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr style="border: 2px solid #ffc451;border-radius: 4px;">
                        <th style="background-color:#313131;">
                            <font color="white"><b>ID transport</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>numero transport</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Date depart</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Date fin</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Heure depart</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Heure arrivage</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>type</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>numero place</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>prix achat</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>prix vente</b></font>
                        </th>
                        <th style="background-color:#313131;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($transports as $transport)
                    <tr>
                        <td style="vertical-align:middle;">{{$transport->id}}</td>
                        <td style="vertical-align:middle;">{{$transport->num}}</td>
                        <td style="vertical-align:middle;">{{$transport->date_depart}}</td>
                        <td style="vertical-align:middle;">{{$transport->date_fin}}</td>
                        <td style="vertical-align:middle;">{{$transport->heure_depart}}</td>
                        <td style="vertical-align:middle;">{{$transport->heure_arrivage}}</td>
                        <td style="vertical-align:middle;">{{$transport->type}}</td>
                        <td style="vertical-align:middle;">{{$transport->n_place}}</td>
                        <td style="vertical-align:middle;">{{$transport->prix_achat}}</td>
                        <td style="vertical-align:middle;">{{$transport->prix_vente}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('transports.edit',$transport->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('transports.destroy', $transport->id)}}" method="post">
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