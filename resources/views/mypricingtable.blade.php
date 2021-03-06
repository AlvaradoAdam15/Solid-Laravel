@extends('layouts.app')

@section('htmlheader_title')
	My Pricing Table
@endsection


@section('main-content')
	<div class="pricing pricing--sonam">
		<div class="pricing__item">
			<h3 class="pricing__title">Startup</h3>
			<div class="pricing__price"><span class="pricing__currency">€</span>9.90</div>
			<p class="pricing__sentence">Small business solution</p>
			<ul class="pricing__feature-list">
				<li class="pricing__feature">Unlimited calls</li>
				<li class="pricing__feature">Free hosting</li>
				<li class="pricing__feature">40MB of storage space</li>
			</ul>
			<button class="pricing__action">Choose plan</button>
		</div>
		<div class="pricing__item">
			<h3 class="pricing__title">Standard</h3>
			<div class="pricing__price"><span class="pricing__currency">€</span>29,90</div>
			<p class="pricing__sentence">Medium business solution</p>
			<ul class="pricing__feature-list">
				<li class="pricing__feature">Unlimited calls</li>
				<li class="pricing__feature">Free hosting</li>
				<li class="pricing__feature">10 hours of support</li>
				<li class="pricing__feature">Social media integration</li>
				<li class="pricing__feature">1GB of storage space</li>
			</ul>
			<button class="pricing__action">Choose plan</button>
		</div>
		<div class="pricing__item">
			<h3 class="pricing__title">Professional</h3>
			<div class="pricing__price"><span class="pricing__currency">€</span>59,90</div>
			<p class="pricing__sentence">Gigantic business solution</p>
			<ul class="pricing__feature-list">
				<li class="pricing__feature">Unlimited calls</li>
				<li class="pricing__feature">Free hosting</li>
				<li class="pricing__feature">Unlimited hours of support</li>
				<li class="pricing__feature">Social media integration</li>
				<li class="pricing__feature">Anaylitcs integration</li>
				<li class="pricing__feature">Unlimited storage space</li>
			</ul>
			<button class="pricing__action">Choose plan</button>
		</div>
	</div>
@endsection
