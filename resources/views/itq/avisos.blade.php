@extends('layouts.edu')

<!-- Custom styles -->
@section('estilos')
@endsection

<!-- Page content -->
@section('content')
    @include('itq._header_page')

    <div id="wrapper">

        <section class="section cb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="tagline-message page-title">
                            <h3> {{ Auth::user()->name . ' ' . Auth::user()->surname }}</h3>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="#"></a></li>
                            {{-- <li>Módulo</li> --}}
                            <li class="active">{{ Auth::user()->email }}</li>
                        </ul>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end section -->

        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-warning" >Avisos de {{Auth::user()->name}} </h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Aviso </th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($avisos as $aviso)
                                    <tr>
                                        <td>{{$aviso->titulo}}</td>
                                        <td>{{date('d/m/Y | H:i', strtotime($aviso->created_at))}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>

                <hr class="invis" />

            </div>
    </div>
    </section>

    </div>
@endsection


<!-- Custom scripts -->
@section('scripts')
@endsection
