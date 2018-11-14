<nav class="navbar has-shadow">
	<div class="container">
		<div class="navbar-start">
			<a class="navbar-item" href="/">
				<img src="images/logo.png" height="30" alt="Lakwatec">
			</a>
		</div>

		<div class="mobile-toggle" @click="toggleMobile">
		<i class="fa fa-bars"></i>
		</div>

		<div class="navbar-end">
			<a class="navbar-item" href="{{ route('pompinstallaties') }}">
				Pompinstallaties
			</a>
            <a class="navbar-item" href="{{ route('boorputten') }}">
				Boorputten
			</a>
            <a class="navbar-item" href="{{ route('beregeningen') }}">
				Beregening
			</a>
            <a class="navbar-item" href="{{ route('water-en-gierslangen') }}">
				Water &amp; gierslangen
			</a>
            <a class="navbar-item" href="{{ route('pe-lassen') }}">
				PE Lassen
			</a>
		</div>

	</div>
</nav>