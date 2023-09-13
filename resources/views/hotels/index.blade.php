@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>hotel Page</h2>
            <ol>
                <li><a href="index.html">hotel</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('hotels.create')}}" class="get-started-btn scrollto"><b>Ajouter un nouveau
                hotel</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr style="border: 2px solid #ffc451;border-radius: 4px;">
                        <th style="background-color:#313131;">
                            <font color="white"><b>ID hotel</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Nom hotel</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Etoile</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Site</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>Email</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>tel</b></font>
                        </th>
                        <th style="background-color:#313131;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($hotels as $hotel)
                    <tr>
                        <td style="vertical-align:middle;">{{$hotel->id}}</td>
                        <td style="vertical-align:middle;">{{$hotel->hnom}}</td>
                        <td style="vertical-align:middle;">{{$hotel->etoile}}</td>
                        <td style="vertical-align:middle;">
                            <a href="{{$hotel->site}}" target="_blank">{{$hotel->site}}</a>
                        </td>
                        <td style="vertical-align:middle;">{{$hotel->email}}</td>
                        <td style="vertical-align:middle;">{{$hotel->tel}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('hotels.edit',$hotel->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('hotels.destroy', $hotel->id)}}" method="post">
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