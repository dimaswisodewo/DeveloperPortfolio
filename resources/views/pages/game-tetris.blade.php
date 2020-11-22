@extends('layouts.detail')

@section('title', 'Game Tetris')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>January 2019</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Game Tetris</h1>
                </div>
                <hr class="line-separator">
                <div class="detail-header">
                    <div class="detail-header-title">Platform</div>
                    <div class="detail-header-content">PC, Mac & Linux Standalone</div>
                    <br>
                    <div class="detail-header-title">Technology</div>
                    <div class="detail-header-content">Unity</div>
                    <div class="detail-header-content">C#</div>
                    <br>
                    <div class="detail-header-title">Develoment Role</div>
                    <div class="detail-header-content">Unity Developer</div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Description</div>
                    <p class="detail-description-content">
                        Remake of the classic tetris game.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Learn how to apply a two-dimensional array to a grid system in a tetris game.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/Game_Tetris')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('#')}}" class="btn disabled btn-custom"><i class="fa fa-desktop mr-2"></i>Download Exe</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection