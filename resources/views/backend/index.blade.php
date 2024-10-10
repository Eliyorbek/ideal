@extends('backend.inc.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row d-flex" >
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jami ro'yhatdan o'tganlar </span>
                        <span class="info-box-number">
                  {{count($all)}}
                  <small>ta</small>
                </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Matematika</span>
                        <span class="info-box-number">{{count($matem)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Fizika</span>
                        <span class="info-box-number">{{count($fizika)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Ona tili</span>
                        <span class="info-box-number">{{count($ona)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Ingliz tili</span>
                        <span class="info-box-number">{{count($english)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Rus tili</span>
                        <span class="info-box-number">{{count($rus)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-light elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Arab tili</span>
                        <span class="info-box-number">{{count($arab)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Geografiya</span>
                        <span class="info-box-number">{{count($geografiya)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tarix</span>
                        <span class="info-box-number">{{count($tarix)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Biologiya</span>
                        <span class="info-box-number">{{count($biologiya)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Kimyo</span>
                        <span class="info-box-number">{{count($kimyo)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Huquq</span>
                        <span class="info-box-number">{{count($huquq)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            
            

        </div>
    </div>


@endsection




