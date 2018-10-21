@extends('layouts.app')

@section('content')



<section class="section has-text-centered">
    <div class="container item-columns">
        <div class="columns is-multiline is-mobile is-centered is-gapless">
            <div class="column">
                <div class="icon-item">
                    <a href="{{ route('pompinstallaties') }}">
                        <img src="/images/icons/pump.png" alt="">
                        <span class="icon-item-text">Pompinstallaties</span>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="icon-item">
                    <a href="{{ route('boorputten') }}">
                        <img src="/images/icons/drill.png" alt="">
                        <span class="icon-item-text">Boorputten</span>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="icon-item">
                    <a href="{{ route('beregeningen') }}">
                        <img src="/images/icons/sprinkler.png" alt="">
                        <span class="icon-item-text">Beregeningsinstallaties</span>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="icon-item">
                    <a href="{{ route('beregeningen')"></a>
                    <img src="/images/icons/garden-hose.png" alt="">
                    <span class="icon-item-text">Beregeningsinstallaties landbouw</span>
                </div>
            </div>
            <div class="column">
                <div class="icon-item">
                <a href="{{ route('water-en-gierslangen')">
                    <img src="/images/icons/hose.png" alt="">
                    <span class="icon-item-text">Water & gierslangen</span>
                    </a>
                </div>
                </div>
            <div class="column">
                <div class="icon-item">
                <a href="{{ route('pe-lassen')">
                    <img src="/images/icons/welding.png" alt="">
                    <span class="icon-item-text">PE Lassen</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection