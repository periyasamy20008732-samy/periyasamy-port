<svg class="hero-art" viewBox="0 0 360 340" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustration of layered code, database and API panels">
    <defs>
        <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#7C3AED"/>
            <stop offset="100%" stop-color="#EC4899"/>
        </linearGradient>
        <linearGradient id="g2" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#F97316"/>
            <stop offset="100%" stop-color="#EAB308"/>
        </linearGradient>
        <linearGradient id="g3" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#0D9488"/>
            <stop offset="100%" stop-color="#2563EB"/>
        </linearGradient>
    </defs>

    <circle cx="180" cy="170" r="150" fill="#F1EEFC"/>

    <!-- back panel: database -->
    <g transform="translate(46,150)">
        <rect x="0" y="0" width="120" height="90" rx="14" fill="url(#g3)"/>
        <ellipse cx="60" cy="16" rx="42" ry="12" fill="#fff" opacity="0.9"/>
        <rect x="18" y="16" width="84" height="58" fill="#fff" opacity="0.18"/>
        <ellipse cx="60" cy="74" rx="42" ry="12" fill="#fff" opacity="0.5"/>
    </g>

    <!-- middle panel: API brackets -->
    <g transform="translate(150,60)">
        <rect x="0" y="0" width="150" height="110" rx="16" fill="url(#g1)"/>
        <text x="24" y="66" font-family="IBM Plex Mono, monospace" font-size="46" fill="#fff">&lt;/&gt;</text>
    </g>

    <!-- front panel: card / livewire component -->
    <g transform="translate(96,196)">
        <rect x="0" y="0" width="168" height="104" rx="16" fill="#fff" stroke="#E7E4F5" stroke-width="2"/>
        <rect x="18" y="20" width="70" height="10" rx="5" fill="url(#g2)"/>
        <rect x="18" y="40" width="132" height="8" rx="4" fill="#E7E4F5"/>
        <rect x="18" y="56" width="100" height="8" rx="4" fill="#E7E4F5"/>
        <rect x="18" y="78" width="46" height="16" rx="8" fill="url(#g1)"/>
    </g>

    <!-- floating IoT node dots -->
    <circle cx="70" cy="90" r="9" fill="url(#g2)"/>
    <circle cx="300" cy="120" r="7" fill="#0D9488"/>
    <circle cx="288" cy="250" r="10" fill="url(#g1)"/>
    <path d="M79 96 L150 70" stroke="#F97316" stroke-width="2" stroke-dasharray="3 5" fill="none"/>
    <path d="M293 128 L260 150" stroke="#0D9488" stroke-width="2" stroke-dasharray="3 5" fill="none"/>
</svg>
