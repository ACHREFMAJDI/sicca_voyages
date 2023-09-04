@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Vol Page</h2>
      <ol>
        <li><a href="index.html">Vol</a></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
  <div class="col-md-12">
    <a style="margin: 19px;" href="{{ route('vols.create')}}" class="get-started-btn scrollto"><b>Ajouter un nouveau
        vol</b></a>
  </div>
  <div class="col-md-12">
    <div style="display:block;position:relative;height:300px;overflow:auto;">
      <table class="table table-hover table-condensed ">
        <thead>
          <tr>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>ID vol</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>n_vol</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>date_achat</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>date_depart</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>h_depart</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>date_arrivée</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>h_arrivage</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>type</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>n_place</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>prix_achat</b></font>
            </th>
            <th style="background-color:#313131;border: 2px solid #ffc451;border-radius: 4px;">
              <font color="white"><b>prix_vente</b></font>
            </th>
            <th style="background-color:#313131;text-align:center;border: 2px solid #ffc451;border-radius: 4px;"
              colspan="4">
              <font color="white"><b>Actions</b></font>
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach($vols as $vol)
          <tr>
            <td style="vertical-align:middle;">{{$vol->id}}</td>
            <td style="vertical-align:middle;">{{$vol->n_vol}}</td>
            <td style="vertical-align:middle;">{{$vol->date_achat}}</td>
            <td style="vertical-align:middle;">{{$vol->date_depart}}</td>
            <td style="vertical-align:middle;">{{$vol->h_depart}}</td>
            <td style="vertical-align:middle;">{{$vol->date_arrivée}}</td>
            <td style="vertical-align:middle;">{{$vol->h_arrivage}}</td>
            <td style="vertical-align:middle;">{{$vol->type}}</td>
            <td style="vertical-align:middle;">{{$vol->n_place}}</td>
            <td style="vertical-align:middle;">{{$vol->prix_achat}}</td>
            <td style="vertical-align:middle;">{{$vol->prix_vente}}</td>
            <td colspan="2"></td>
            <td>
              <a href="{{ route('vols.edit',$vol->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
              <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
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