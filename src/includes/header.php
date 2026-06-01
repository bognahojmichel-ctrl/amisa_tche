<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Paroisse Saint Gabriel de Cococodji | Un Espace Sacré</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        background: '#fbf9f8',
                        surface: '#f7f4f1',
                        'surface-bright': '#ffffff',
                        'surface-muted': '#f1eeec',
                        'surface-deep': '#e5e2df',
                        'surface-container-lowest': '#ffffff',
                        'surface-container-low': '#f5f3f3',
                        'surface-container': '#efeded',
                        'surface-container-high': '#eae8e7',
                        'surface-container-highest': '#e4e2e2',
                        primary: '#0c6780',
                        'primary-soft': '#d9eef5',
                        'primary-container': '#87ceeb',
                        'primary-fixed': '#baeaff',
                        'primary-fixed-dim': '#89d0ed',
                        'on-primary': '#ffffff',
                        'on-primary-container': '#005870',
                        'on-primary-fixed': '#001f29',
                        'on-primary-fixed-variant': '#004d62',
                        'inverse-primary': '#89d0ed',
                        'secondary': '#735c00',
                        'secondary-container': '#fed65b',
                        'secondary-fixed': '#ffe088',
                        'secondary-fixed-dim': '#e9c349',
                        'on-secondary': '#ffffff',
                        'on-secondary-container': '#745c00',
                        'on-secondary-fixed': '#241a00',
                        'on-secondary-fixed-variant': '#574500',
                        'secondary-soft': '#fff2cc',
                        'tertiary': '#575f65',
                        'tertiary-container': '#bdc5cc',
                        'tertiary-fixed': '#dbe4ea',
                        'tertiary-fixed-dim': '#bfc8ce',
                        'on-tertiary': '#ffffff',
                        'on-tertiary-container': '#4a5258',
                        'on-tertiary-fixed': '#151d22',
                        'on-tertiary-fixed-variant': '#40484d',
                        'error': '#ba1a1a',
                        'error-container': '#ffdad6',
                        'on-error': '#ffffff',
                        'on-error-container': '#93000a',
                        'on-background': '#1b1c1c',
                        'on-surface': '#1b1c1c',
                        'on-surface-variant': '#3f484c',
                        'inverse-surface': '#303030',
                        'inverse-on-surface': '#f2f0f0',
                        outline: '#6f787d',
                        'outline-variant': '#bfc8cd',
                        'outline-soft': '#e6e2df',
                        muted: '#637075',
                        accent: '#7a9aa6',
                        'surface-glass': 'rgba(255,255,255,0.72)',
                    },
                    boxShadow: {
                        soft: '0 24px 64px rgba(23, 33, 38, 0.08)',
                        card: '0 18px 45px rgba(15, 40, 58, 0.08)',
                        glow: '0 0 0 1px rgba(12,103,128,0.08), 0 24px 80px rgba(12,103,128,0.12)',
                    },
                    borderRadius: {
                        DEFAULT: '0.125rem',
                        lg: '0.25rem',
                        xl: '1.5rem',
                        '2xl': '2rem',
                        '3xl': '2.5rem',
                        full: '0.75rem',
                    },
                    fontFamily: {
                        'headline': ['Noto Serif', 'serif'],
                        'body': ['Manrope', 'sans-serif'],
                        'headline-xl': ['Noto Serif'],
                        'headline-lg': ['Noto Serif'],
                        'headline-md': ['Noto Serif'],
                        'body-md': ['Manrope'],
                        'body-lg': ['Manrope'],
                        'label-sm': ['Manrope'],
                    },
                    fontSize: {
                        'headline-xl': ['48px', { lineHeight: '1.2', letterSpacing: '-0.02em', fontWeight: '700' }],
                        'headline-lg': ['32px', { lineHeight: '1.3', fontWeight: '600' }],
                        'headline-md': ['24px', { lineHeight: '1.4', fontWeight: '500' }],
                        'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }],
                        'body-md': ['16px', { lineHeight: '1.5', fontWeight: '400' }],
                        'label-sm': ['12px', { lineHeight: '1.2', letterSpacing: '0.05em', fontWeight: '600' }],
                    },
                    spacing: {
                        'margin-desktop': '48px',
                        'section-gap': '80px',
                        'container-max-width': '1200px',
                        'unit': '8px',
                        'gutter': '24px',
                        'margin-mobile': '16px',
                        'page': '48px',
                        'section': '40px',
                        'card': '32px',
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.filled { font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 24; }
        body { background-color: #fbf9f8; color: #1b1c1c; }
        ::selection { background: rgba(254, 214, 91, 0.25); color: #0c6780; }
    </style>
</head>

<body class="min-h-screen bg-background font-body text-body text-on-surface antialiased selection:bg-secondary-container selection:text-on-secondary-container">
    <!-- Liturgical Bar -->
    <div class="w-full bg-primary-container text-on-primary-container py-2 text-center overflow-hidden">
        <p class="font-label-sm text-label-sm tracking-widest uppercase">Temps Ordinaire • Cycle B • Année de Prière</p>
    </div>
    <!-- TopNavBar -->
    <header class="bg-surface shadow-sm sticky top-0 z-50">
        <nav class="flex justify-between items-center px-margin-desktop py-4 w-full max-w-[1200px] mx-auto">
            <div class="text-headline-md font-headline-md text-primary tracking-tight">Paroisse Saint Gabriel de Cococodji</div>
            <div class="hidden md:flex items-center gap-8">
                <a class="text-primary font-bold border-b-2 border-secondary" href="?p=home">Accueil</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="?p=demande-messe">Demandes de messe</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="?p=gestion-dons">Dons</a>
            </div>
            <div class="flex items-center gap-4">
                <button class="hidden md:block bg-primary text-on-primary px-6 py-2.5 rounded-xl font-bold hover:opacity-90 transition-all active:scale-95 duration-200 shadow-sm">
                    Faire un Don
                </button>
                <button class="md:hidden text-primary">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
            </div>
        </nav>
    </header>
    <main>
