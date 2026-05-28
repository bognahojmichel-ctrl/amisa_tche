<?php
// Admin - Gestion des demandes de messe
// Cette vue assume que le layout global inclut les <head>, Tailwind et les polices.
// Sections clairement commentées : Sidebar / Header admin / Dashboard stats / Tableau activités / Agenda / Sections secondaires

// Données simulées si le contrôleur n'envoie rien
if (!isset($demandes)) {
    $demandes = [
        ['reference' => 'MS-2023-081', 'nom' => 'Marie-Claire Lefebvre', 'email' => 'mcl@email.com', 'type' => 'Ordinaire', 'date' => '15 Octobre 2023', 'montant' => '18,00 €', 'statut' => 'Payé'],
        ['reference' => 'MS-2023-082', 'nom' => 'Jean-Pierre Dubois', 'email' => 'jp.dubois@provider.fr', 'type' => 'Spéciale', 'date' => '22 Octobre 2023', 'montant' => '50,00 €', 'statut' => 'En attente'],
        ['reference' => 'MS-2023-083', 'nom' => 'Thérèse Martin', 'email' => 't.martin@martin.com', 'type' => 'Ordinaire', 'date' => '24 Octobre 2023', 'montant' => '18,00 €', 'statut' => 'Payé'],
        ['reference' => 'MS-2023-084', 'nom' => 'Famille Bernard', 'email' => 'bernard.famille@outlook.fr', 'type' => 'Spéciale', 'date' => '01 Novembre 2023', 'montant' => '120,00 €', 'statut' => 'Payé'],
    ];
}

function statut_badge_html($statut) {
    $s = strtolower(trim($statut));
    if ($s === 'payé' || $s === 'paye' || $s === 'payed') {
        return '<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-bold"><span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Payé</span>';
    }
    if ($s === 'en attente' || $s === 'attente') {
        return '<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-xs font-bold"><span class="w-1.5 h-1.5 rounded-full bg-orange-600"></span>En attente</span>';
    }
    return '<span class="px-2 py-1 bg-surface-container-highest rounded-md text-xs font-bold uppercase">'.htmlspecialchars($statut).'</span>';
}
?>

<!-- Sidebar -->
<aside class="fixed left-0 top-0 h-full w-64 bg-surface-container-low border-r border-outline-variant flex flex-col p-4 space-y-2 z-50">
    <div class="flex flex-col mb-8 px-4">
        <h1 class="font-headline-md text-headline-md font-bold text-primary">La Lumière Divine</h1>
        <p class="font-label-sm text-label-sm text-on-surface-variant">Portail Admin</p>
    </div>
    <nav class="flex-1 space-y-1">
        <a href="/dashboard" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-md">Tableau de bord</span>
        </a>
        <a href="/demandes" class="flex items-center gap-3 px-4 py-3 bg-primary-container text-on-primary-container rounded-full font-bold translate-x-1 transition-transform duration-200">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-body-md">Demandes de messe</span>
        </a>
        <a href="/rendezvous" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-body-md">Rendez-vous</span>
        </a>
        <a href="/disponibilites" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">event_available</span>
            <span class="font-body-md">Disponibilités</span>
        </a>
        <a href="/dons" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">volunteer_activism</span>
            <span class="font-body-md">Dons</span>
        </a>
        <a href="/communiques" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">campaign</span>
            <span class="font-body-md">Communiqués</span>
        </a>
        <a href="/settings" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all duration-300">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-body-md">Paramètres</span>
        </a>
    </nav>
    <div class="pt-4 mt-auto">
        <a href="/live" class="w-full flex items-center justify-center gap-2 bg-primary text-on-primary py-3 rounded-full font-bold hover:opacity-90 transition-all">
            <span class="material-symbols-outlined">videocam</span>
            Messe en direct
        </a>
    </div>
</aside>

<!-- Header admin -->
<div class="ml-64 min-h-screen flex flex-col">
    <header class="bg-surface-bright flex justify-between items-center w-full px-margin-desktop h-20 border-b border-outline-variant sticky top-0 z-40">
        <div class="flex items-center gap-4">
            <h2 class="font-headline-md text-headline-md font-bold text-primary">Gestion des Demandes</h2>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative w-64 group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-body-md transition-all" placeholder="Rechercher..." type="text"/>
            </div>
            <div class="flex items-center gap-2">
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined">help_outline</span>
                </button>
                <div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant ml-2 cursor-pointer hover:opacity-80 transition-opacity">
                    <img alt="Admin Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-hdZZrtoFAOlp5elp3vXZzs1VF17RQ39sKmbekNoY9dCgVblQsfetp7zE0jSRgB19k-lQgNpnNmXYVTKu7vl9v50C6i1k-_l9-hQWv1BTdFDvavcTMz09dOKbotJ5EVGcRN_J1dhfOZEFoj9iX95F5x5PqpE2I9Pe82H2AoGYkn7gEY1FUN_cQNAPdbCYbZ1jqlHklgwsm7X-Oi8V97NoyxpWA3ybZBizOse6tUMgjdZKXjVKz1GM7BQinOfPCtNdCRqi9TS58OM"/>
                </div>
            </div>
        </div>
    </header>

    <!-- Dashboard stats -->
    <main class="p-margin-desktop flex-1">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-section-gap">
            <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl flex flex-col gap-2 shadow-sm">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Total Demandes</span>
                <span class="font-headline-lg text-headline-lg text-primary"><?= count($demandes) ?></span>
                <div class="flex items-center gap-1 text-on-secondary-container bg-secondary-container w-fit px-2 py-0.5 rounded-full text-xs">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    <span>+12%</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl flex flex-col gap-2 shadow-sm">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">En attente</span>
                <span class="font-headline-lg text-headline-lg text-secondary"><?= count(array_filter($demandes, fn($d)=> strtolower($d['statut']) === 'en attente')) ?></span>
                <p class="font-body-md text-body-md text-on-surface-variant">Action requise</p>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl flex flex-col gap-2 shadow-sm">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Honoraires (Mois)</span>
                <span class="font-headline-lg text-headline-lg text-primary">4,520 €</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Collecté</span>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl overflow-hidden relative shadow-sm group">
                <div class="relative z-10">
                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider text-white drop-shadow-md">Prochaine Messe</span>
                    <span class="block font-headline-md text-headline-md text-white drop-shadow-md">Messe Solennelle</span>
                    <span class="block font-body-md text-body-md text-white drop-shadow-md">Demain, 10:30</span>
                </div>
                <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgTDhkA5hqIxSMw6pqM-dlGA0VcVUe448-UyINnc8NFhNueYSofGor46-Z_dcOM2J72YhwNdONtos1mm-Wh7THzbbuIPV9jjZFNoNY19e9_riqeUbIsB8ONvoKRHBJJth9_EObCJaLb84nE0hZUrI0goxhnlZyzjlZ1Dr-22mPOtqbpCr33OcGBBkp5NOdx-3GNTMMrawTn31BnRJ3g_nd7GDbS8OMwUObF7qwo1o469L6ZXRs6LPVR__kSndP9h40IUtCSvCkC8c" alt="Prochaine messe"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
        </div>

        <!-- Tableau activités -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b border-outline-variant flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <select class="appearance-none pl-4 pr-10 py-2 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-on-surface-variant focus:ring-2 focus:ring-primary focus:outline-none transition-all cursor-pointer">
                            <option>Tous les Types</option>
                            <option>Ordinaire</option>
                            <option>Spéciale</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-outline">expand_more</span>
                    </div>
                    <div class="relative">
                        <select class="appearance-none pl-4 pr-10 py-2 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-on-surface-variant focus:ring-2 focus:ring-primary focus:outline-none transition-all cursor-pointer">
                            <option>Tous les Statuts</option>
We need to finish reading file, but it's long; earlier create_file error said file exists; we created demande_messe.php earlier; now user asked to create gestion_demandes.php; we've already created one earlier via create_file? We attempted earlier create_file for gestion_demandes? I created gestion_demandes.php earlier with create_file successfully. Let's check: functions.create_file earlier executed and success for gestion_demandes.php. Yes earlier 