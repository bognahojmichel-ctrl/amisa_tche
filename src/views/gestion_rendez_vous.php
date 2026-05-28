<?php
/**
 * Vue admin — Gestion des Rendez-vous
 * S'appuie sur `src/includes/header.php` et `src/includes/footer.php`
 */
?>

<!-- Sidebar -->
<aside class="fixed left-0 top-0 h-full flex flex-col p-4 space-y-2 bg-surface-container-low border-r border-outline-variant w-64 z-50">
  <div class="mb-8 px-4">
    <h1 class="font-headline-md text-headline-md font-bold text-primary">La Lumière Divine</h1>
    <p class="font-label-sm text-label-sm text-on-surface-variant">Portail Admin</p>
  </div>
  <nav class="flex-grow space-y-1">
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">dashboard</span>
      <span class="font-body-md text-body-md">Tableau de bord</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">auto_stories</span>
      <span class="font-body-md text-body-md">Demandes de messe</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 bg-primary-container text-on-primary-container rounded-full font-bold translate-x-1 transition-transform duration-200" href="#">
      <span class="material-symbols-outlined">calendar_month</span>
      <span class="font-body-md text-body-md">Rendez‑vous</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">event_available</span>
      <span class="font-body-md text-body-md">Disponibilités</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">volunteer_activism</span>
      <span class="font-body-md text-body-md">Dons</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">campaign</span>
      <span class="font-body-md text-body-md">Communiqués</span>
    </a>
    <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high rounded-full transition-all duration-300" href="#">
      <span class="material-symbols-outlined">settings</span>
      <span class="font-body-md text-body-md">Paramètres</span>
    </a>
  </nav>
  <button class="w-full mt-auto bg-primary text-on-primary py-3 rounded-full font-bold flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all">
    <span class="material-symbols-outlined">live_tv</span>
    Messe en direct
  </button>
</aside>

<!-- Main content area -->
<main class="ml-64 min-h-screen">

  <!-- TopAppBar (admin) -->
  <header class="flex justify-between items-center w-full px-margin-desktop h-20 border-b border-outline-variant bg-surface-bright sticky top-0 z-40">
    <div class="flex items-center gap-4">
      <h2 class="font-headline-md text-headline-md font-bold text-primary">Gestion des Rendez‑vous</h2>
    </div>
    <div class="flex items-center gap-6">
      <div class="relative">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline">search</span>
        <input class="pl-10 pr-4 py-2 bg-surface-container rounded-full border-none text-body-md focus:ring-2 focus:ring-primary-container w-64" placeholder="Rechercher un paroissien..." type="text"/>
      </div>
      <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary">notifications</span>
        <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary">help_outline</span>
        <div class="w-10 h-10 rounded-full bg-primary-fixed-dim border border-outline-variant flex items-center justify-center overflow-hidden">
          <img alt="Admin Avatar" class="w-full h-full object-cover" src="/public/images/admin-avatar.jpg"/>
        </div>
      </div>
    </div>
  </header>

  <!-- Page canvas -->
  <div class="p-margin-desktop space-y-section-gap">
    <!-- Bento Layout for Schedule Overview -->
    <div class="grid grid-cols-12 gap-gutter">
      <!-- Main Calendar View -->
      <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest border border-primary-container/30 rounded-xl p-6 shadow-sm">
        <div class="flex justify-between items-center mb-6">
          <div class="flex items-center gap-4">
            <h3 class="font-headline-lg text-headline-lg text-primary">Octobre 2023</h3>
            <div class="flex border border-outline-variant rounded-full overflow-hidden">
              <button class="px-3 py-1 hover:bg-surface-container transition-colors border-r border-outline-variant">
                <span class="material-symbols-outlined">chevron_left</span>
              </button>
              <button class="px-3 py-1 hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
              </button>
            </div>
          </div>
          <div class="flex bg-surface-container-low p-1 rounded-lg">
            <button class="px-4 py-1 rounded-md text-label-sm font-bold bg-surface-container-lowest shadow-sm text-primary">Semaine</button>
            <button class="px-4 py-1 rounded-md text-label-sm text-on-surface-variant hover:text-on-surface">Mois</button>
          </div>
        </div>
        <div class="grid grid-cols-7 gap-px bg-outline-variant border border-outline-variant rounded-lg overflow-hidden">
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">LUN</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">MAR</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">MER</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">JEU</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">VEN</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">SAM</div>
          <div class="bg-surface-container p-3 text-center text-label-sm font-bold text-on-tertiary-fixed-variant">DIM</div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">25</span></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">26</span><div class="bg-primary-container/20 text-on-primary-container p-1 rounded text-[10px] font-bold border-l-2 border-primary">09:00 Mariage</div></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">27</span></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">28</span><div class="bg-secondary-container/20 text-on-secondary-fixed-variant p-1 rounded text-[10px] font-bold border-l-2 border-secondary">15:00 Confession</div></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">29</span></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1"><span class="text-label-sm text-outline">30</span></div>
          <div class="bg-surface-container-lowest min-h-[120px] p-2 space-y-1 bg-surface-container-low"><span class="text-label-sm text-outline">01</span><div class="bg-tertiary-container/30 text-on-tertiary-container p-1 rounded text-[10px] font-bold border-l-2 border-tertiary">10:30 Messe</div></div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-4 space-y-gutter">
        <div class="bg-surface-container-low border border-outline-variant rounded-xl p-6">
          <h4 class="font-headline-md text-headline-md text-primary mb-4">Capacité du jour</h4>
          <div class="space-y-4">
            <div><div class="flex justify-between text-label-sm mb-1"><span>Père Jean-Marc</span><span class="font-bold text-primary">2/5 créneaux</span></div><div class="w-full bg-surface-container-highest h-2 rounded-full"><div class="bg-primary h-2 rounded-full" style="width: 40%"></div></div></div>
            <div><div class="flex justify-between text-label-sm mb-1"><span>Père Antoine</span><span class="font-bold text-secondary">4/4 créneaux</span></div><div class="w-full bg-surface-container-highest h-2 rounded-full"><div class="bg-secondary h-2 rounded-full" style="width: 100%"></div></div></div>
            <div><div class="flex justify-between text-label-sm mb-1"><span>Père Pierre</span><span class="font-bold text-tertiary">1/6 créneaux</span></div><div class="w-full bg-surface-container-highest h-2 rounded-full"><div class="bg-tertiary h-2 rounded-full" style="width: 16%"></div></div></div>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-xl h-48 group"><img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnO9mvGeH6ovu4jd4tZaXwS6mkwJr9cQ4WNISjhZ22dCXQYnh2uIcdmbK8ehBHMTCEYbqOrcQx-1-aQ3d37fIHeziyEf9Gz8hTAULOCEo-VhdEjSySQ1xtdNFwWPchZX6S9FnSL3E7z4omnmE-QRg9MJYumP7yw3ZH-sy4XTCQtt5H0fKafBwnykhMhLrQ1gZ1H87-nqUSFSo0B0vEkRzZxQpgEdcqdQDdgXzocd0TigP_vVQTgdQePv62QbPO5l_9KeQIkAly8wE" alt="chapel"><div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6"><p class="text-white font-headline-md leading-tight italic">"Le temps donné à l'autre est un temps sacré."</p></div></div>
      </div>
    </div>
    <section class="space-y-6">
      <div class="flex justify-between items-center">
        <h3 class="font-headline-lg text-headline-lg text-primary">Réunions à venir</h3>
        <button class="text-primary font-bold flex items-center gap-2 hover:underline">Tout voir <span class="material-symbols-outlined">arrow_forward</span></button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
        <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl hover:shadow-lg transition-shadow group"><div class="flex justify-between items-start mb-4"><span class="px-3 py-1 bg-primary-container text-on-primary-container text-label-sm rounded-full font-bold">Mariage</span><span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">more_vert</span></div><h4 class="font-headline-md text-headline-md mb-2">Jean &amp; Marie Dupont</h4><div class="space-y-3 text-body-md text-on-surface-variant"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">person</span><span>Père Jean-Marc</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">schedule</span><span>Aujourd'hui, 14:30 - 15:30</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">location_on</span><span>Bureau Paroissial A</span></div></div><div class="mt-6 pt-4 border-t border-outline-variant flex gap-3"><button class="flex-1 py-2 rounded-lg bg-primary text-white font-bold text-label-sm hover:opacity-90">Confirmer</button><button class="flex-1 py-2 rounded-lg border border-outline text-on-surface-variant font-bold text-label-sm hover:bg-surface-container">Modifier</button></div></div>
        <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl hover:shadow-lg transition-shadow group"><div class="flex justify-between items-start mb-4"><span class="px-3 py-1 bg-secondary-container text-on-secondary-fixed-variant text-label-sm rounded-full font-bold">Confession</span><span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">more_vert</span></div><h4 class="font-headline-md text-headline-md mb-2">Marc Lambert</h4><div class="space-y-3 text-body-md text-on-surface-variant"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">person</span><span>Père Antoine</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">schedule</span><span>Demain, 10:00 - 10:30</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">meeting_room</span><span>Confessionnal Nord</span></div></div><div class="mt-6 pt-4 border-t border-outline-variant flex gap-3"><button class="flex-1 py-2 rounded-lg bg-primary text-white font-bold text-label-sm hover:opacity-90">Confirmer</button><button class="flex-1 py-2 rounded-lg border border-outline text-on-surface-variant font-bold text-label-sm hover:bg-surface-container">Modifier</button></div></div>
        <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl hover:shadow-lg transition-shadow group"><div class="flex justify-between items-start mb-4"><span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-label-sm rounded-full font-bold">Baptême</span><span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">more_vert</span></div><h4 class="font-headline-md text-headline-md mb-2">Famille Rousseau</h4><div class="space-y-3 text-body-md text-on-surface-variant"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">person</span><span>Père Jean-Marc</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">schedule</span><span>25 Octobre, 11:00 - 12:00</span></div><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[20px]">church</span><span>Nef Principale</span></div></div><div class="mt-6 pt-4 border-t border-outline-variant flex gap-3"><button class="flex-1 py-2 rounded-lg bg-primary text-white font-bold text-label-sm hover:opacity-90">Confirmer</button><button class="flex-1 py-2 rounded-lg border border-outline text-on-surface-variant font-bold text-label-sm hover:bg-surface-container">Modifier</button></div></div>
      </div>
    </section>
    <div class="bg-primary-container/10 border border-primary-container p-8 rounded-xl flex items-center gap-8"><div class="w-24 h-24 rounded-full bg-primary flex items-center justify-center text-white"><span class="material-symbols-outlined text-4xl">auto_awesome</span></div><div class="flex-grow"><h4 class="font-headline-md text-headline-md text-primary">Saison Liturgique : Temps Ordinaire</h4><p class="text-body-md text-on-surface-variant max-w-2xl">La couleur verte symbolise l'espérance et la croissance de la vie chrétienne. Les rendez-vous pastoraux sont ouverts pour la préparation des sacrements de l'Avent.</p></div><button class="px-6 py-3 bg-secondary text-white rounded-full font-bold hover:shadow-lg transition-all active:scale-95">Planifier l'Avent</button></div>
  </div>
  <button class="fixed bottom-8 right-8 w-14 h-14 bg-secondary-container text-on-secondary-container rounded-full shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-all z-50"><span class="material-symbols-outlined" style="font-size: 32px;">add</span></button>
</main>
