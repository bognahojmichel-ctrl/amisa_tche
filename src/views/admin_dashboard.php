<?php // Sidebar 
?>
<aside class="fixed left-0 top-0 h-full flex flex-col p-4 space-y-2 bg-surface-container-low border-r border-outline-variant w-64 z-50">
    <div class="mb-8 px-4 py-2">
        <h1 class="font-headline-md text-headline-md font-bold text-primary">La Lumière Divine</h1>
        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Portail Admin</p>
    </div>
    <nav class="flex-grow space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 bg-primary-container text-on-primary-container rounded-full font-bold translate-x-1 transition-transform duration-200" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-md text-body-md">Tableau de bord</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-body-md text-body-md">Demandes de messe</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-body-md text-body-md">Rendez-vous</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">event_available</span>
            <span class="font-body-md text-body-md">Disponibilités</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">volunteer_activism</span>
            <span class="font-body-md text-body-md">Dons</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">campaign</span>
            <span class="font-body-md text-body-md">Communiqués</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high hover:text-primary rounded-full transition-all duration-300" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-body-md text-body-md">Paramètres</span>
        </a>
    </nav>
    <div class="mt-auto p-4 bg-secondary-fixed rounded-xl flex flex-col items-center text-center gap-2">
        <span class="material-symbols-outlined text-secondary scale-110">live_tv</span>
        <p class="font-label-sm text-on-secondary-fixed-variant font-bold uppercase">Messe en direct</p>
        <button class="bg-primary text-on-primary w-full py-2 rounded-full font-label-sm hover:opacity-90 transition-opacity">Diffuser</button>
    </div>
</aside>

<?php // Main content and Topbar 
?>
<main class="ml-64 min-h-screen">

    <?php // Header admin 
    ?>
    <header class="flex justify-between items-center w-full px-margin-desktop h-20 border-b border-outline-variant bg-surface-bright sticky top-0 z-40">
        <div class="flex items-center gap-4">
            <span class="font-headline-md text-headline-md font-bold text-primary">Tableau de bord</span>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative flex items-center bg-surface-container-low rounded-full px-4 py-2 border border-outline-variant focus-within:border-primary transition-colors">
                <span class="material-symbols-outlined text-outline">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-body-md font-body-md ml-2 w-64" placeholder="Rechercher..." type="text" />
            </div>
            <div class="flex gap-4 items-center">
                <button class="p-2 rounded-full hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                </button>
                <button class="p-2 rounded-full hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant">help_outline</span>
                </button>
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-primary-container">
                    <img alt="Admin Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0olm7vutqqxS5G9qrWamlGAg-2q6zL0uUCfHP-4VIVtWtd-YkbUux6BuY2ziH4FFoXcmHStBZ2_2ZwNnQ1ID61TwS9AON9QJrp2DM6FJhYLantI8f36rD7SaPPINFMfwXLEdHM6YCoV-v2wXJAsarSVn2Px_ifGHwg9Qr6QNWmPVGVmCXr-jp5sIVIolHrmW61w9PGm_WGNVijc9Dbs_0tc-Y1PjXSg-uh03fVYc3NiDD6K6l2m7yXZW8rZSBkdWYdTjUHKPH7Sw" />
                </div>
            </div>
        </div>
    </header>

    <?php // Dashboard stats 
    ?>
    <div class="p-margin-desktop space-y-gutter">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant hover:border-primary-container transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-primary-container rounded-lg group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-on-primary-container">pending_actions</span>
                    </div>
                    <span class="text-error font-bold text-label-sm">+12%</span>
                </div>
                <h3 class="font-body-md text-on-surface-variant mb-1">Demandes en attente</h3>
                <p class="font-headline-lg text-headline-lg text-on-surface">24</p>
            </div>

            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant hover:border-primary-container transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-secondary-fixed rounded-lg group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-on-secondary-fixed-variant">church</span>
                    </div>
                    <span class="text-primary font-bold text-label-sm">Semaine</span>
                </div>
                <h3 class="font-body-md text-on-surface-variant mb-1">Messes prévues</h3>
                <p class="font-headline-lg text-headline-lg text-on-surface">3</p>
            </div>

            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant hover:border-primary-container transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-primary-container rounded-lg group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-on-primary-container">euro</span>
                    </div>
                    <span class="text-primary font-bold text-label-sm">+5%</span>
                </div>
                <h3 class="font-body-md text-on-surface-variant mb-1">Dons ce mois</h3>
                <p class="font-headline-lg text-headline-lg text-on-surface">1,240 €</p>
            </div>

            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant hover:border-primary-container transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-secondary-fixed rounded-lg group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-on-secondary-fixed-variant">person_add</span>
                    </div>
                    <span class="text-primary font-bold text-label-sm">+2</span>
                </div>
                <h3 class="font-body-md text-on-surface-variant mb-1">Nouveaux membres</h3>
                <p class="font-headline-lg text-headline-lg text-on-surface">8</p>
            </div>
        </div>

        <?php // Tableau activités 
        ?>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter items-start">
            <section class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden">
                <div class="p-6 border-b border-outline-variant flex justify-between items-center bg-white">
                    <h2 class="font-headline-md text-headline-md text-primary">Activités récentes</h2>
                    <button class="text-primary font-label-sm flex items-center gap-1 hover:underline">Voir tout <span class="material-symbols-outlined text-[16px]">arrow_forward</span></button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th class="px-6 py-4 font-label-sm text-on-surface-variant uppercase">Demandeur</th>
                                <th class="px-6 py-4 font-label-sm text-on-surface-variant uppercase">Type de Messe</th>
                                <th class="px-6 py-4 font-label-sm text-on-surface-variant uppercase">Date Souhaitée</th>
                                <th class="px-6 py-4 font-label-sm text-on-surface-variant uppercase">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold text-label-sm">JD</div>
                                        <span class="font-body-md">Jean Dupont</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-body-md">Action de grâce</td>
                                <td class="px-6 py-4 font-body-md">15 Oct, 09:00</td>
                                <td class="px-6 py-4">
                                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-label-sm">En cours</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-low transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant font-bold text-label-sm">ML</div>
                                        <span class="font-body-md">Marie Lefebvre</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-body-md">Défunt</td>
                                <td class="px-6 py-4 font-body-md">16 Oct, 18:30</td>
                                <td class="px-6 py-4">
                                    <span class="bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full text-label-sm">Nouveau</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-low transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold text-label-sm">PM</div>
                                        <span class="font-body-md">Pierre Morel</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-body-md">Anniversaire</td>
                                <td class="px-6 py-4 font-body-md">18 Oct, 11:00</td>
                                <td class="px-6 py-4">
                                    <span class="bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full text-label-sm">Nouveau</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <?php // Agenda 
            ?>
            <aside class="space-y-6">
                <section class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="font-headline-md text-headline-md text-primary">Agenda du jour</h2>
                        <span class="material-symbols-outlined text-primary">today</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex gap-4 p-4 rounded-lg bg-surface-container-low border-l-4 border-primary">
                            <div class="text-center min-w-[50px]">
                                <p class="font-label-sm text-primary font-bold">10:00</p>
                                <p class="font-label-sm text-outline">AM</p>
                            </div>
                            <div>
                                <h4 class="font-body-md font-bold text-on-surface">Réunion Conseil</h4>
                                <p class="font-label-sm text-on-surface-variant">Salle Paroissiale</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-lg border border-outline-variant hover:bg-surface-container-low transition-colors">
                            <div class="text-center min-w-[50px]">
                                <p class="font-label-sm text-primary font-bold">14:30</p>
                                <p class="font-label-sm text-outline">PM</p>
                            </div>
                            <div>
                                <h4 class="font-body-md font-bold text-on-surface">Entretien Mariage</h4>
                                <p class="font-label-sm text-on-surface-variant">Bureau du Père</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-lg border border-outline-variant hover:bg-surface-container-low transition-colors">
                            <div class="text-center min-w-[50px]">
                                <p class="font-label-sm text-primary font-bold">17:00</p>
                                <p class="font-label-sm text-outline">PM</p>
                            </div>
                            <div>
                                <h4 class="font-body-md font-bold text-on-surface">Confessions</h4>
                                <p class="font-label-sm text-on-surface-variant">Église Principale</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-6 py-3 border border-primary text-primary rounded-full font-label-sm hover:bg-primary-container transition-colors">Ajouter un rendez-vous</button>
                </section>

                <?php // Sections secondaires: Parish Visual Banner 
                ?>
                <div class="relative h-48 rounded-xl overflow-hidden group">
                    <img alt="Parish Exterior" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQKiviiaf-DhyPUIpoSzppnX0uLD_mReSsBHUUS2FM7x6O62DfyZse8hgNlRgqLguBkNdHW0223zTJQxtvnzBnScHDPVMUGo7rOSUKkNA7Y5dkKT7u7thvv96rZQTjHy7ayzAS-3JdEwASc12ke3sU0b0aTrlpK-7BmTX-PzvG08Sv3IsKF8XAd4xp23jVPnBRl5LHT7KFPo7owXd3UjSU1QSUqCs3rYREshkCLSMzTaaj-AdChji9KLrpleMXzi94OgBbBthD7f8" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end p-4">
                        <p class="text-on-primary font-body-md italic font-semibold">"Que la lumière brille dans les ténèbres."</p>
                    </div>
                </div>
            </aside>
        </div>

        <?php // Sections secondaires: Prayer Wall Quick Glance 
        ?>
        <section class="bg-surface-container-lowest p-8 rounded-2xl border border-outline-variant text-center space-y-4">
            <span class="material-symbols-outlined text-secondary text-4xl">auto_awesome</span>
            <h3 class="font-headline-md text-headline-md text-primary">Mur de Prière Paroissial</h3>
            <p class="font-body-md text-on-surface-variant max-w-2xl mx-auto">Il y a 12 nouvelles intentions de prière aujourd'hui. Votre présence spirituelle soutient notre communauté.</p>
            <div class="flex justify-center gap-4">
                <button class="bg-primary text-on-primary px-8 py-3 rounded-full font-label-sm hover:opacity-90 transition-opacity">Consulter les intentions</button>
                <button class="border border-outline text-on-surface-variant px-8 py-3 rounded-full font-label-sm hover:bg-surface-container-low transition-colors">Partager un verset</button>
            </div>
        </section>
    </div>

</main>