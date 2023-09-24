<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($tweets as $tweet)
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>{{ $tweet->content }}</p>
                            <small>By: {{ $tweet->user->name }} | {{ $tweet->created_at->format('Y-m-d') }}</small>
                        </div>
                    </div>
                @endforeach
                {{ $tweets->links() }}
            </div>
        </div>
    </div>
@endsection
