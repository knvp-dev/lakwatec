@extends('layouts.app')

@section('content')

<section class="section has-pattern-background">
    <div class="container">
        <div class="intro has-text-centered">
            <img src="/images/icons/sprinkler.png" class="mb-20" alt="">
            <h1 class="title mb-0 is-uppercase fs-15">Beregeningen</h1><br>
            <!-- <h2 class="subtitle is-uppercase">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2> -->
        </div>
    </div>
</section>

<div class="container">

<section class="section m-20 beregening">

        <div class="intro has-text-centered">
            <img src="/images/icons/sprinkler.png" class="mb-20" alt="">
            <h1 class="title mb-20 is-uppercase fs-15">Beregeningen Particulier</h1><br>
            <h2 class="subtitle mb-20">Tuinberegeningen | Paardenpiste beregeningen</h2>
            <img class="product-image" src="/images/beregening_part.jpg" alt="">
        </div>



        <div class="intro has-text-centered">
            <img src="/images/icons/garden-hose.png" class="mb-20" alt="">
            <h1 class="title mb-20 is-uppercase fs-15">Beregeningen Landbouw</h1><br>
            <h2 class="subtitle mb-20">Haspels nieuw & jong tweedehands | Stationaire pompinstallaties  </h2>
            <img class="product-image" src="/images/beregening-landbouw.jpg" alt="">
        </div>

</section>

<div class="clear-fix"></div>

</div>

@endsection