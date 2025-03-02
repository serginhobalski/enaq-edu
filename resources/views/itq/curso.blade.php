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
                            <h3> ENAQ </h3>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="#">Curso</a></li>
                            {{-- <li>Módulo</li> --}}
                            <li class="active">{{ $curso->codigo }}</li>
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
                        <div class="col-md-3 shop-media">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="image-wrap entry">
                                        <img src="{{ asset('edu/images/' . $curso->imagem) }}" alt=""
                                            class="img-responsive" />
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]"
                                                href="{{ asset('edu/images/' . $curso->imagem) }}"
                                                title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div>
                                    <!-- end image-wrap -->
                                </div>
                            </div>
                            <!-- end row -->

                            <hr class="invis" />

                        </div>
                        <!-- end col -->

                        <div class="col-md-9">
                            <div class="shop-desc">
                                <h3>Disciplinas do Curso</h3>
                                <p>
                                <ol>
                                    @foreach ($disciplinas as $disciplina)
                                        <li><a style="color:#fff" href="{{url('disciplina/'.$disciplina->id)}}">
                                            {{ $disciplina->nome }}</a>  </li>
                                    @endforeach
                                </ol>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <hr class="invis" />

                    <hr class="invis" />

                    <div class="related-products">
                        <div class="text-widget">
                            <h3>Acessar Disciplinas</h3>
                        </div>

                        <div class="row blog-grid shop-grid">
                            @foreach ($disciplinas as $disciplina)

                            <div class="col-md-3">
                                <div class="course-box shop-wrapper">
                                    <div class="image-wrap entry">
                                        <img src="{{asset('edu/images/'.$disciplina->imagem)}}" alt="" class="img-responsive" />
                                        <div class="magnifier">
                                            <a href="{{url('disciplina/'.$disciplina->id)}}" title="{{$disciplina->nome}}">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="course-details shop-box text-center">
                                        <h4>
                                            <a href="{{url('disciplina/'.$disciplina->id)}}" title="{{$disciplina->nome}}"> {{$disciplina->nome}} </a>
                                            <small> {{$disciplina->codigo}} </small>
                                        </h4>
                                    </div>
                                    <div class="course-footer clearfix">
                                        <div class="pull-left">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="{{url('disciplina/'.$disciplina->id)}}"><i class="fa fa-book"></i> Acessar</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection


<!-- Custom scripts -->
@section('scripts')
@endsection
