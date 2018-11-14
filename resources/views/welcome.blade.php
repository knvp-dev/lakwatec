@extends('layouts.app')

@section('content')



<section class="section has-text-centered">
    <div class="container" style="
    display: flex;
    justify-content: center;
">
        <div class="columns is-multiline is-mobile is-centered is-gapless">
            <div class="column">
            <a href="{{ route('pompinstallaties') }}">
                <div class="icon-item">
                        <img src="/images/icons/pump.png" alt="">
                        <span class="icon-item-text">Pompinstallaties</span>
                </div>
                </a>
            </div>
            <div class="column">
            <a href="{{ route('boorputten') }}">
                <div class="icon-item">
                        <img src="/images/icons/drill.png" alt="">
                        <span class="icon-item-text">Boorputten</span>
                </div>
                </a>
            </div>
            <div class="column">
            <a href="{{ route('beregeningen') }}">
                <div class="icon-item">
                        <img src="/images/icons/sprinkler.png" alt="">
                        <span class="icon-item-text">Beregeningsinstallaties</span>
                </div>
                </a>
            </div>
            <div class="column">
            <a href="{{ route('beregeningen') }}">
                <div class="icon-item">
                        <img src="/images/icons/garden-hose.png" alt="">
                        <span class="icon-item-text">Beregeningsinstallaties landbouw</span>
                </div>
                </a>
            </div>
            <div class="column">
            <a href="{{ route('water-en-gierslangen') }}">
                <div class="icon-item">
                        <img src="/images/icons/hose.png" alt="">
                        <span class="icon-item-text">Water & gierslangen</span>
                </div>
                </a>
                </div>
            <div class="column">
            <a href="{{ route('pe-lassen')">
                <div class="icon-item">
                    <img src="/images/icons/welding.png" alt="">
                    <span class="icon-item-text">PE Lassen</span>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection