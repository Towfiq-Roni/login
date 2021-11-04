@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <a>
                            <span>Name: {{ Auth::user()->name }}
                                <p style="text-align:right"><small>registered {{ Auth::user()->created_at->diffForHumans() }}
                                    </small></p>
                            </span>
                        </a>
                    </div>
                    <div class="card-body">
                        <a>
                            <span>E-Mail: {{ Auth::user()->email }}</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <a >
                            <span>Password: {{ Auth::user()->password }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
