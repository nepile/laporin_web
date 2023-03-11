@extends('templates.dash')

@section('dash-content')
    <div class="container-fluid mb-5">
        <div class="row bg-dark justify-content-center align-items-center" style="height: 45vh">
            <div class="col-12 mt-5 text-light p-4">
                <h4 class="mb-0" style="font-weight: 700">
                    {{ $title }}
                </h4>
                <p>x
                    <a href="{{ route('overview') }}" class="text-light">
                        <i class="fa fa-home"></i> Dashboard
                    </a> /
                    <span>{{ $title }}</span>
                </p>
            </div>
        </div>

        <div class="row" style="position: relative; bottom: 50px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        mm
                    </div>
                    <div class="card-body">
                        mm
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection