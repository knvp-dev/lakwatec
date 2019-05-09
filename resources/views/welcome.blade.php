@extends('layouts.app')

@section('content')


<section class="section is-centered" style="background-color: #fafafa;margin-top:50px;">
    <div class="intro has-text-centered">

            <h1 class="title">Gezocht: Arbeider</h1>
            <p class="mb-10">Lakwatec BVBA is een erkend boorbedrijf en staat in voor de plaatsing van boorputten, aansluiten van warmtesondes en plaatsen van beregening installaties voor tuinen. De vestiging van dit bedrijf ligt in Oostkamp maar de activiteiten worden voornamelijk in volledig West-Vlaanderen uitgevoerd. </p>
            
            <p class="mb-10">Word jij onze nieuwe collega? Voor ons team zijn wij op zoek naar een arbeider voor de ondersteuning van de boormeester en het zelfstandig aansluiten van warmtesondes en beregening installaties. Bij voorkeur: nederlands / engelstalig, B-rijbewijs. Geen voorkennis vereist.</p>
            
            <p class="mb-10">Meer info? Contacteer Frederik Vanthournout 0472 97 03 82 of <a href="mailto:info@lakwatecbe">info@lakwatecbe</a></p>
        </div>

</section>

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
            <a href="{{ route('pe-lassen') }}">
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