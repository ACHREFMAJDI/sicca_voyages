@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>hotel Create</h2>
            <ol>
                <li><a href="/hotels">hotel</a></li>
                <li>create</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@section('content')
<div class="row m-0 p-4">
    <div class="col-md-12">

        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('hotels.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="hnom">Nom hotel:</label>
                            <input type="text" class="form-control" name="hnom" />
                        </div>
                        <div class="form-group">
                            <label for="etoile">Etoile:</label>
                            <input type="text" class="form-control" name="etoile" />
                        </div>
                        <div class="form-group">
                            <label for="site">Site:</label>
                            <input type="text" class="form-control" name="site" />
                        </div>
                    </div>
                    <div class="col-md-6 ">


                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" />
                        </div>


                        <div class="form-group">
                            <label for="tel">tel:</label>
                            <input type="text" class="form-control" name="tel" />
                        </div>


                        <div class="card" style="margin-top: 1.5rem;">
                            <button type="submit" class="get-started-btn scrollto">Ajouter le hotel</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>












@endsection