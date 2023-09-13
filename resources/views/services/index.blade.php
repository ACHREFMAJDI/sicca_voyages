@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>service Page</h2>
            <ol>
                <li><a href="index.html">service</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row px-5">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('services.create')}}" class="get-started-btn scrollto"><b>Ajouter un nouveau
                service</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr style="border: 2px solid #ffc451;border-radius: 4px;">
                        <th style="background-color:#313131;">
                            <font color="white"><b>ID service</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>description</b></font>
                        </th>
                        <th style="background-color:#313131;">
                            <font color="white"><b>qte</b></font>
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
                    @foreach($services as $service)
                    <tr>
                        <td style="vertical-align:middle;">{{$service->id}}</td>
                        <td style="vertical-align:middle;">{{$service->description}}</td>
                        <td style="vertical-align:middle;">{{$service->qte}}</td>
                        <td style="vertical-align:middle;">{{$service->prix_achat}}</td>
                        <td style="vertical-align:middle;">{{$service->prix_vente}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('services.edit',$service->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('services.destroy', $service->id)}}" method="post">
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