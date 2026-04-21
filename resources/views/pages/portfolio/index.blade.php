@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
<section class="inner-hero">
    <div class="container">
        <p class="eyebrow">Portfolio</p>
        <h1>Selected projects and premium digital work.</h1>
    </div>
</section>

<section class="section-space">
    <div class="container portfolio-grid">
        <a href="{{ route('portfolio.show') }}" class="portfolio-card large-card"><div class="portfolio-overlay"><span>Case Study</span><h3>Project One</h3></div></a>
        <a href="{{ route('portfolio.show') }}" class="portfolio-card"><div class="portfolio-overlay"><span>Case Study</span><h3>Project Two</h3></div></a>
        <a href="{{ route('portfolio.show') }}" class="portfolio-card"><div class="portfolio-overlay"><span>Case Study</span><h3>Project Three</h3></div></a>
    </div>
</section>
@endsection