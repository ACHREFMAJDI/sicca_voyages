@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>client Edit</h2>
            <ol>
                <li><a href="/clients">client</a></li>
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
                <form name="client" method="post" action="{{ route('clients.update', $client->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="client">Nom:</label>
                                <input type="text" class="form-control" name="nom" value="{{ $client->nom }}" />
                            </div>

                            <div class="form-group">
                                <label for="client">Passeport:</label>
                                <input type="text" class="form-control" name="passeport" value="{{ $client->passeport }}" />
                            </div>

                            <div class="form-group">
                                <label for="ville">Tel:</label>
                                <input type="text" class="form-control" name="tel" value="{{ $client->tel }}" />
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="ville">Prenom:</label>
                                <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}" />
                            </div>
                            <div class="form-group">
                                <label for="edresse">Cin:</label>
                                <input type="text" class="form-control" name="cin" value="{{ $client->cin }}" />
                            </div>
                            <div class="form-group">
                                <label for="edresse">Email:</label>
                                <input type="text" class="form-control" name="email" value="{{ $client->email }}" />
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group py-4">
                                <button type="submit" class="get-started-btn scrollto">Modification du client</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






















@endsection