@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>chambre Page</h2>
            <ol>
                <li><a href="index.html">chambre</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('chambres.create')}}" class="get-started-btn scrollto"><b>Ajouter un nouveau
                chambre</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr style="border: 2px solid #ffc451;border-radius: 4px;">
                        <th style="background-color:#313131;">
                            <font color="white"><b>ID chambre</b></font>
                        </th>

                        <th style="background-color:#313131;">
                            <font color="white"><b>Nom hotel</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Numero etage</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Numero chambre</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Date debut</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Date fin</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Numero place</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>type</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Prix achat</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Prix vente</b></font>
                        </th>
                        <th style="background-color:#313131;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($chambres as $chambre)
                    <tr>
                        <td style="vertical-align:middle;">{{$chambre->id}}</td>
                        <td style="vertical-align:middle;">{{$chambre->hotel_nom}}</td>
                        <td style="vertical-align:middle;">{{$chambre->num_etage}}</td>
                        <td style="vertical-align:middle;">{{$chambre->num}}</td>
                        <td style="vertical-align:middle;">{{$chambre->date_debut}}</td>
                        <td style="vertical-align:middle;">{{$chambre->date_fin}}</td>
                        <td style="vertical-align:middle;">{{$chambre->n_place}}</td>
                        <td style="vertical-align:middle;">{{$chambre->prix_achat}}</td>
                        <td style="vertical-align:middle;">{{$chambre->prix_vente}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('chambres.edit',$chambre->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('chambres.destroy', $chambre->id)}}" method="post">
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