<?php
/* Vue admin — Gestion des Dons
   Cette vue est incluse entre src/includes/header.php et src/includes/footer.php.
*/
?>

<!-- Sidebar -->
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-low border-r border-outline-variant p-6 pt-8 flex flex-col gap-4 z-50">
  <div class="space-y-2">
    <p class="font-label-sm uppercase tracking-[0.28em] text-on-surface-variant">La Lumière Divine</p>
    <h1 class="text-3xl font-headline font-semibold text-primary">Portail Admin</h1>
  </div>
  <nav class="flex-1 flex flex-col gap-2">
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">dashboard</span>
      Tableau de bord
    </a>
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">auto_stories</span>
      Demandes de messe
    </a>
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">calendar_month</span>
      Rendez-vous
    </a>
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">event_available</span>
      Disponibilités
    </a>
    <a class="flex items-center gap-3 rounded-3xl bg-primary-container px-4 py-3 text-body-md font-semibold text-on-primary shadow-sm shadow-primary/20" href="#">
      <span class="material-symbols-outlined">volunteer_activism</span>
      Dons
    </a>
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">campaign</span>
      Communiqués
    </a>
    <a class="flex items-center gap-3 rounded-3xl px-4 py-3 text-body-md font-medium text-on-surface transition hover:bg-surface-container-high hover:text-primary" href="#">
      <span class="material-symbols-outlined">settings</span>
      Paramètres
    </a>
  </nav>
  <button class="mt-auto inline-flex items-center justify-center gap-2 rounded-3xl bg-primary px-4 py-3 text-sm font-semibold text-on-primary transition hover:bg-primary/90">
    <span class="material-symbols-outlined">live_tv</span>
    Messe en direct
  </button>
</aside>

<div class="ml-72 min-h-screen">
  <!-- Header admin -->
  <header class="bg-surface-bright flex flex-col gap-4 px-8 py-6 border-b border-outline-variant sticky top-0 z-40 shadow-sm">
    <div class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div class="space-y-2">
        <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Administration</p>
        <div class="flex flex-wrap items-center gap-4">
          <h2 class="text-3xl font-headline font-semibold text-primary">Gestion des Dons</h2>
          <span class="rounded-full bg-secondary-container px-3 py-1 text-sm font-semibold text-secondary">Vue premium</span>
        </div>
      </div>
      <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
        <div class="relative w-full sm:w-96">
          <input class="w-full rounded-full border border-outline-variant bg-surface-container-low px-14 py-3 text-body-md text-on-surface outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20" placeholder="Rechercher un donateur..." type="text" />
          <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
        </div>
        <div class="flex items-center gap-3">
          <button class="grid h-12 w-12 place-items-center rounded-3xl bg-surface-container-low text-on-surface-variant transition hover:bg-primary-container hover:text-primary">
            <span class="material-symbols-outlined">notifications</span>
          </button>
          <button class="grid h-12 w-12 place-items-center rounded-3xl bg-surface-container-low text-on-surface-variant transition hover:bg-primary-container hover:text-primary">
            <span class="material-symbols-outlined">help_outline</span>
          </button>
          <div class="flex items-center gap-3 rounded-3xl border border-outline-variant bg-white px-3 py-2 shadow-sm">
            <div class="h-12 w-12 overflow-hidden rounded-full bg-secondary-container">
              <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=256&q=80" alt="Admin avatar" />
            </div>
            <div class="hidden sm:block">
              <p class="text-sm font-semibold text-on-surface">Mère Claire</p>
              <p class="text-xs text-on-surface-variant">Directrice des services</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="space-y-8 px-8 py-10">
    <div class="grid gap-6 xl:grid-cols-[1.45fr_0.95fr]">
      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <article class="rounded-[28px] border border-primary-container/25 bg-white p-8 shadow-card transition hover:-translate-y-1 hover:shadow-lg">
          <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Total récolté</p>
          <div class="mt-4 flex items-end gap-4">
            <span class="text-headline-xl font-semibold text-primary">42 380 €</span>
            <span class="rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">+18 %</span>
          </div>
          <p class="mt-4 text-body-md text-on-surface-variant">Objectif mensuel : 50 000 €. Le flux actuel reste dynamique et porteur.</p>
          <div class="mt-6 h-3 overflow-hidden rounded-full bg-surface-container-high">
            <div class="h-full w-[85%] rounded-full bg-primary transition-all duration-500"></div>
          </div>
        </article>
        <article class="rounded-[28px] border border-surface-container-high shadow-sm bg-surface-container-lowest p-8 transition hover:shadow-lg">
          <div class="flex items-center justify-between gap-4">
            <div>
              <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Donateurs actifs</p>
              <p class="mt-3 text-headline-lg font-semibold text-on-surface">3 240</p>
            </div>
            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-secondary-container text-secondary shadow-sm">
              <span class="material-symbols-outlined">groups</span>
            </span>
          </div>
          <p class="mt-5 text-body-md text-on-surface-variant">Engagement élevé avec un suivi personnalisé pour chaque donateur.</p>
        </article>
        <article class="rounded-[28px] border border-surface-container-high shadow-sm bg-surface-container-lowest p-8 transition hover:shadow-lg">
          <div class="flex items-center justify-between gap-4">
            <div>
              <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Don moyen</p>
              <p class="mt-3 text-headline-lg font-semibold text-primary">125 €</p>
            </div>
            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-primary/10 text-primary shadow-sm">
              <span class="material-symbols-outlined">volunteer_activism</span>
            </span>
          </div>
          <p class="mt-5 text-body-md text-on-surface-variant">Une belle stabilité des contributions, signe d’une communauté fidèle.</p>
        </article>
      </div>
      <article class="rounded-[36px] border border-primary-container/20 bg-gradient-to-br from-surface-bright via-white to-surface-container-lowest p-8 shadow-soft">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
          <div>
            <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Performance mensuelle</p>
            <h2 class="mt-3 text-3xl font-semibold text-primary">Tendance des dons</h2>
            <p class="mt-3 max-w-2xl text-body-md text-on-surface-variant">Un cycle croissant, soutenu par les campagnes de restauration et les collectes paroissiales.</p>
          </div>
          <div class="rounded-3xl bg-white/90 px-4 py-3 text-sm font-semibold text-primary shadow-sm">+18 % vs mai</div>
        </div>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl bg-white/80 p-6 shadow-sm border border-outline-variant">
            <p class="font-label-sm uppercase tracking-[0.25em] text-on-surface-variant">Revenu projeté</p>
            <p class="mt-3 text-headline-md font-semibold text-on-surface">57 000 €</p>
          </div>
          <div class="rounded-3xl bg-white/80 p-6 shadow-sm border border-outline-variant">
            <p class="font-label-sm uppercase tracking-[0.25em] text-on-surface-variant">Répartition</p>
            <p class="mt-3 text-headline-md font-semibold text-on-surface">71 % don récurrent</p>
          </div>
        </div>
        <div class="mt-8 overflow-hidden rounded-[28px] bg-surface-container-lowest p-6">
          <div class="flex items-center justify-between text-on-surface-variant">
            <span class="text-[10px] uppercase tracking-[0.35em]">J F M A M J</span>
            <span class="text-sm font-semibold text-on-surface">Trafic dons</span>
          </div>
          <div class="mt-6 grid gap-3 sm:grid-cols-6">
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-secondary-container/20 shadow-inner" style="height:88%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Jan</p>
            </div>
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-primary/20 shadow-inner" style="height:74%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Fév</p>
            </div>
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-secondary-container/20 shadow-inner" style="height:65%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Mar</p>
            </div>
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-primary/20 shadow-inner" style="height:78%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Avr</p>
            </div>
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-secondary-container/20 shadow-inner" style="height:82%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Mai</p>
            </div>
            <div class="space-y-2">
              <div class="h-24 rounded-[24px] bg-primary/20 shadow-inner" style="height:92%"></div>
              <p class="text-center text-xs font-semibold text-on-surface-variant">Juin</p>
            </div>
          </div>
        </div>
      </article>
    </div>

    <article class="rounded-[32px] border border-surface-container-high shadow-sm bg-white p-8">
      <div class="flex flex-col gap-6 xl:flex-row xl:items-center xl:justify-between">
        <div>
          <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Historique des dons</p>
          <h2 class="mt-3 text-3xl font-semibold text-on-surface">Tableau des dons récents</h2>
        </div>
        <div class="flex flex-wrap items-center gap-3">
          <button class="rounded-full border border-outline-variant bg-surface-container-low px-4 py-2 text-sm text-on-surface transition hover:bg-surface-container-high">Filtrer</button>
          <button class="rounded-full border border-outline-variant bg-surface-container-low px-4 py-2 text-sm text-on-surface transition hover:bg-surface-container-high">Trier</button>
          <button class="rounded-full bg-primary px-5 py-2 text-sm font-semibold text-white transition hover:bg-primary/90">Exporter</button>
        </div>
      </div>
      <div class="mt-6 overflow-x-auto rounded-[28px] border border-outline-variant bg-surface-container-lowest shadow-sm">
        <table class="w-full min-w-[920px] border-collapse text-left">
          <thead class="bg-white/90 text-on-surface-variant uppercase tracking-[0.18em] text-[11px] border-b border-outline-variant">
            <tr>
              <th class="px-6 py-4">Date</th>
              <th class="px-6 py-4">Donateur</th>
              <th class="px-6 py-4">Montant</th>
              <th class="px-6 py-4">Catégorie</th>
              <th class="px-6 py-4">Statut</th>
              <th class="px-6 py-4">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-outline-variant/20 text-on-surface">
            <tr class="group hover:bg-white transition-colors">
              <td class="px-6 py-5">18 Juin 2026</td>
              <td class="px-6 py-5">
                <div class="flex items-center gap-3">
                  <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-primary/10 text-primary font-semibold">MD</div>
                  <div>
                    <p class="font-semibold">Marie Dubois</p>
                    <p class="text-sm text-on-surface-variant">Paris</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 font-semibold text-primary">250 €</td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-secondary-container/15 px-3 py-1 text-sm font-semibold text-secondary">Maintenance</span></td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">Confirmé</span></td>
              <td class="px-6 py-5 text-right">
                <button class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-surface-container-high text-on-surface-variant transition hover:bg-primary hover:text-white">
                  <span class="material-symbols-outlined">more_vert</span>
                </button>
              </td>
            </tr>
            <tr class="group hover:bg-white transition-colors">
              <td class="px-6 py-5">17 Juin 2026</td>
              <td class="px-6 py-5">
                <div class="flex items-center gap-3">
                  <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-secondary-fixed/10 text-secondary font-semibold">JD</div>
                  <div>
                    <p class="font-semibold">Jean Dupuis</p>
                    <p class="text-sm text-on-surface-variant">Lyon</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 font-semibold text-secondary">420 €</td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">Jeunesse</span></td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-secondary-container/10 px-3 py-1 text-sm font-semibold text-secondary">En attente</span></td>
              <td class="px-6 py-5 text-right">
                <button class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-surface-container-high text-on-surface-variant transition hover:bg-primary hover:text-white">
                  <span class="material-symbols-outlined">more_vert</span>
                </button>
              </td>
            </tr>
            <tr class="group hover:bg-white transition-colors">
              <td class="px-6 py-5">15 Juin 2026</td>
              <td class="px-6 py-5">
                <div class="flex items-center gap-3">
                  <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-primary-container text-on-primary-container font-semibold">AL</div>
                  <div>
                    <p class="font-semibold">Anne Lambert</p>
                    <p class="text-sm text-on-surface-variant">Nice</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 font-semibold text-primary">1 200 €</td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-surface-container-high px-3 py-1 text-sm font-semibold text-on-surface-variant">Restauration</span></td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">Confirmé</span></td>
              <td class="px-6 py-5 text-right">
                <button class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-surface-container-high text-on-surface-variant transition hover:bg-primary hover:text-white">
                  <span class="material-symbols-outlined">more_vert</span>
                </button>
              </td>
            </tr>
            <tr class="group hover:bg-white transition-colors">
              <td class="px-6 py-5">12 Juin 2026</td>
              <td class="px-6 py-5">
                <div class="flex items-center gap-3">
                  <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-tertiary-container text-on-tertiary-container font-semibold">SV</div>
                  <div>
                    <p class="font-semibold">Sophie Vallet</p>
                    <p class="text-sm text-on-surface-variant">Bordeaux</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 font-semibold text-primary">85 €</td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-surface-container-high px-3 py-1 text-sm font-semibold text-on-surface-variant">Solidarité</span></td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-secondary-container/10 px-3 py-1 text-sm font-semibold text-secondary">Confirmé</span></td>
              <td class="px-6 py-5 text-right">
                <button class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-surface-container-high text-on-surface-variant transition hover:bg-primary hover:text-white">
                  <span class="material-symbols-outlined">more_vert</span>
                </button>
              </td>
            </tr>
            <tr class="group hover:bg-white transition-colors">
              <td class="px-6 py-5">10 Juin 2026</td>
              <td class="px-6 py-5">
                <div class="flex items-center gap-3">
                  <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-primary/10 text-primary font-semibold">RM</div>
                  <div>
                    <p class="font-semibold">Romain Martin</p>
                    <p class="text-sm text-on-surface-variant">Lille</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 font-semibold text-primary">320 €</td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-secondary-container/10 px-3 py-1 text-sm font-semibold text-secondary">Pèlerinage</span></td>
              <td class="px-6 py-5"><span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">Confirmé</span></td>
              <td class="px-6 py-5 text-right">
                <button class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-surface-container-high text-on-surface-variant transition hover:bg-primary hover:text-white">
                  <span class="material-symbols-outlined">more_vert</span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-6 flex flex-col gap-4 border-t border-outline-variant pt-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm text-on-surface-variant">Affichage 1-5 sur 128 dons</p>
        <div class="flex items-center gap-2">
          <button class="h-11 w-11 rounded-3xl border border-outline-variant bg-white text-on-surface shadow-sm transition hover:bg-surface-container-high">
            <span class="material-symbols-outlined">chevron_left</span>
          </button>
          <span class="rounded-full bg-surface-container-low px-4 py-2 text-sm font-semibold text-on-surface">1</span>
          <button class="h-11 w-11 rounded-3xl border border-outline-variant bg-white text-on-surface shadow-sm transition hover:bg-surface-container-high">
            <span class="material-symbols-outlined">chevron_right</span>
          </button>
        </div>
      </div>
    </article>
    <div class="grid gap-6 xl:grid-cols-2">
      <article class="relative overflow-hidden rounded-[36px] bg-primary text-white shadow-soft">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(255,246,187,0.4),_transparent_35%)]"></div>
        <img src="https://images.unsplash.com/photo-1514053026551-bbebd0f1307f?auto=format&fit=crop&w=1200&q=80" alt="Chapelle" class="absolute inset-0 h-full w-full object-cover opacity-30" />
        <div class="relative p-10 sm:p-12 lg:p-14">
          <p class="font-label-sm uppercase tracking-[0.3em] text-secondary/90">Campagne de Restauration</p>
          <h2 class="mt-4 text-4xl font-semibold leading-tight">Éclairer la nef et restaurer les vitraux sacrés</h2>
          <p class="mt-5 max-w-xl text-body-lg text-white/85">Une campagne haut de gamme pour préserver le patrimoine spirituel et offrir aux fidèles une expérience sacrée et contemplative.</p>
          <div class="mt-8 flex flex-wrap gap-4">
            <button class="rounded-full bg-white px-7 py-3 text-sm font-semibold text-primary shadow-lg transition hover:scale-[1.02]">Voir la campagne</button>
            <button class="rounded-full border border-white/70 bg-white/10 px-7 py-3 text-sm font-semibold text-white transition hover:bg-white/20">Partager</button>
          </div>
        </div>
      </article>
      <article class="rounded-[36px] border border-outline-variant bg-surface-bright p-10 shadow-sm">
        <div class="flex items-start gap-4">
          <div class="inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-primary/10 text-primary text-3xl shadow-sm">
            <span class="material-symbols-outlined">heart_plus</span>
          </div>
          <div>
            <p class="font-label-sm uppercase tracking-[0.3em] text-on-surface-variant">Transparence & Foi</p>
            <h2 class="mt-2 text-3xl font-semibold text-on-surface">Une gestion fidèle et claire</h2>
          </div>
        </div>
        <p class="mt-6 max-w-xl text-body-md text-on-surface-variant">La gestion des dons se fait avec la plus grande rigueur, pour que chaque projet soit financé dans la transparence et la confiance.</p>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl border border-primary-container/20 bg-white p-6 shadow-sm">
            <p class="text-sm uppercase tracking-[0.25em] text-on-surface-variant">Don moyen</p>
            <p class="mt-3 text-headline-lg font-semibold text-on-surface">82 €</p>
          </div>
          <div class="rounded-3xl border border-primary-container/20 bg-white p-6 shadow-sm">
            <p class="text-sm uppercase tracking-[0.25em] text-on-surface-variant">Nouveaux donateurs</p>
            <p class="mt-3 text-headline-lg font-semibold text-on-surface">+14</p>
          </div>
        </div>
        <div class="mt-8 rounded-3xl bg-surface-container-lowest p-5">
          <div class="flex items-center justify-between gap-4">
            <div>
              <p class="text-sm uppercase tracking-[0.25em] text-on-surface-variant">Rapports trimestriels</p>
              <p class="mt-2 text-body-md text-on-surface-variant">Publié à temps pour chaque réunion du conseil paroissial.</p>
            </div>
            <span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">Publié</span>
          </div>
          <div class="mt-6 grid gap-4 sm:grid-cols-2">
            <div class="rounded-3xl bg-white p-5 shadow-sm">
              <p class="text-sm text-on-surface-variant">Soutien projets</p>
              <p class="mt-2 text-headline-lg font-semibold text-on-surface">15</p>
            </div>
            <div class="rounded-3xl bg-white p-5 shadow-sm">
              <p class="text-sm text-on-surface-variant">Événements financés</p>
              <p class="mt-2 text-headline-lg font-semibold text-on-surface">8</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <button class="fixed bottom-8 right-8 z-40 inline-flex h-16 w-16 items-center justify-center rounded-full bg-secondary text-on-secondary shadow-2xl transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
      <span class="material-symbols-outlined text-3xl">add</span>
    </button>
  </section>
</div>
