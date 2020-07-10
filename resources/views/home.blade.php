@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: #DC143C;" class="card-header">{{ __('Rida Music Player') }}</div>

                <div style="color: #DC143C;" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
