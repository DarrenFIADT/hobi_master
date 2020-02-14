@extends('layouts.app')
# @Date:   2020-01-14T14:12:42+00:00
# @Last modified time: 2020-02-10T23:14:46+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an ordinary user!
                      </br>
                      Hi     {{ Auth::user()->name    }}
                      </br>
                      Email:    {{ Auth::user()->email   }} !
                    </br>
                    Check out the latest movies! <a href="{{ route('user.movies.index') }}">Here</a>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
