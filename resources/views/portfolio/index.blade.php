@extends('layouts.app')

@section('content')

    {{-- ============ SIDEBAR ============ --}}
    <aside class="sidebar">
        <div class="sidebar-inner">
            <div class="brand">
               <a href="/"> <img src="{{asset('pssp.png')}}" alt="Periyasamy M" width="90px" height="90px" ></a>
                <div class="brand-text">
                    <h1>Periyasamy M</h1>
                    <p>PHP Laravel &amp; Livewire Developer</p>
                </div>
            </div>

            <nav class="side-nav">
                <a href="#about"><span>01</span>About</a>
                <a href="#experience"><span>02</span>Experience</a>
                <a href="#skills"><span>03</span>Skills</a>
                <a href="#education"><span>04</span>Education</a>
                <a href="#more"><span>05</span>Beyond Work</a>
                <a href="#contact"><span>06</span>Contact</a>
            </nav>

            <div class="side-meta">
                <p>Tirunelveli, Tamil Nadu</p>
                <p>3 yrs 10 mos in Software Development</p>
                <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a>
                <a href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a>
                <a href="https://{{ $profile['linkedin'] }}" target="_blank" rel="noopener">LinkedIn ↗</a>
            </div>
        </div>
    </aside>

    {{-- ============ MAIN ============ --}}
    <main class="main">

        {{-- HERO --}}
        <section class="hero">
            <div>
                <p class="hero-kicker">Portfolio / {{ date('Y') }}</p>
                <h2 class="hero-title">Building backend systems and the <span class="accent">Livewire interfaces</span> that sit on top of them.</h2>
                <p class="hero-sub">
                    I design and ship Laravel applications end to end &mdash; schema, API, and the
                    interactive front end &mdash; and I came up through Python, machine learning
                    and IoT before settling into PHP as my main craft.
                </p>
                <div class="hero-stats">
                    <div><strong>3y 10m</strong><span>Building software</span></div>
                    <div><strong>3y 5m</strong><span>PHP &amp; Laravel</span></div>
                    <div><strong>5</strong><span>Companies &amp; teams</span></div>
                </div>
            </div>
            @include('portfolio.hero-art')
        </section>

        {{-- ABOUT --}}
        <section id="about" class="block">
            <h3 class="block-title">About</h3>
            <p class="lede">{{ $profile['about'] }}</p>
        </section>

        {{-- EXPERIENCE --}}
        <section id="experience" class="block">
            <h3 class="block-title">Experience</h3>
            <ol class="timeline">
                @foreach ($experience as $job)
                    <li class="timeline-item c-{{ $job['color'] }}">
                        <div class="timeline-date">{{ $job['period'] }}</div>
                        <div class="timeline-body">
                            <h4>{{ $job['role'] }}</h4>
                            <p class="timeline-company">{{ $job['company'] }}</p>
                            <p class="timeline-desc">{{ $job['summary'] }}</p>
                            <ul class="timeline-points">
                                @foreach ($job['points'] as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ol>
        </section>

        {{-- SKILLS --}}
        <section id="skills" class="block">
            <h3 class="block-title">Skills</h3>
            <div class="skill-grid">
                @foreach ($skills as $group)
                    <div class="skill-group g-{{ $group['color'] }}">
                        <h4>{{ $group['name'] }}</h4>
                        <ul>
                            @foreach ($group['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- EDUCATION --}}
        <section id="education" class="block">
            <h3 class="block-title">Education</h3>
            <ul class="plain-list">
                @foreach ($education as $edu)
                    <li>
                        <div class="plain-list-row">
                            <span class="plain-list-title">{{ $edu['school'] }}</span>
                            <span class="plain-list-period">{{ $edu['period'] }}</span>
                        </div>
                        <p class="plain-list-sub">{{ $edu['detail'] }}</p>
                    </li>
                @endforeach
            </ul>
        </section>

        {{-- BEYOND WORK --}}
        <section id="more" class="block">
            <h3 class="block-title">Beyond Work</h3>
            <div class="two-col">
                <div>
                    <h4 class="sub-title">Internships</h4>
                    <ul class="plain-list">
                        @foreach ($internships as $item)
                            <li>
                                <div class="plain-list-row">
                                    <span class="plain-list-title">{{ $item['title'] }}</span>
                                    <span class="plain-list-period">{{ $item['period'] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="sub-title">Workshops</h4>
                    <ul class="plain-list">
                        @foreach ($workshops as $item)
                            <li>
                                <div class="plain-list-row">
                                    <span class="plain-list-title">{{ $item['title'] }}</span>
                                    <span class="plain-list-period">{{ $item['period'] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        {{-- CONTACT --}}
        <footer id="contact" class="contact-block">
            <h3 class="block-title">Contact</h3>
            <p class="contact-lede">Open to full-stack Laravel &amp; Livewire roles, and backend-focused API work.</p>
            <div class="contact-links">
                <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a>
                <a href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a>
                <a href="https://{{ $profile['linkedin'] }}" target="_blank" rel="noopener">{{ $profile['linkedin'] }}</a>
            </div>
            <p class="foot-note">Tirunelveli,Tamilnadu</p>
        </footer>

    </main>

@endsection
