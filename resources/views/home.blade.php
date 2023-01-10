
@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Вітаю, Ви увійщли в систему !') }}

                        

                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.post.index') }}">Перейти до Post Адмінки1</a>
                                

                            @endif
                             @if (Auth::user()->role !== 'admin')
                                <a href="{{ route('ophone.index') }}">Перейти до Post </a>
                                

                            @endif
                             

                       
                                                


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
