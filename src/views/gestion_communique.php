<?php
// Vue admin — Gestion des Communiqués
// Cette vue est incluse après src/includes/header.php et avant src/includes/footer.php.
?>

<div class="min-h-screen bg-[radial-gradient(circle_at_top_left,_rgba(12,103,128,0.12),_transparent_18%),radial-gradient(circle_at_bottom_right,_rgba(254,214,91,0.12),_transparent_20%),#fbf9f8]">
  <div class="mx-auto grid max-w-[1480px] grid-cols-[280px_1fr] gap-8 px-page py-section">
    <aside class="sticky top-24 flex h-[calc(100vh-96px)] flex-col gap-4 rounded-[2rem] border border-outline bg-surface-bright p-6 shadow-card">
      <div class="space-y-2 rounded-3xl bg-gradient-to-br from-primary/10 to-surface p-5 shadow-sm">
        <p class="text-xs uppercase tracking-[0.32em] text-primary/75">Tableau de bord</p>
        <h2 class="text-xl font-semibold text-on-surface">Navigation</h2>
      </div>
      <nav class="flex flex-col gap-2">
        <a href="?p=home" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">dashboard</span>
          Tableau de bord
        </a>
        <a href="?p=gestion-demandes" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">auto_stories</span>
          Demandes de messe
        </a>
        <a href="?p=gestion-rendez-vous" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">calendar_month</span>
          Rendez-vous
        </a>
        <a href="?p=gestion-disponibilite" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">event_available</span>
          Disponibilités
        </a>
        <a href="?p=gestion-dons" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">volunteer_activism</span>
          Dons
        </a>
        <a href="?p=communiques" class="flex items-center gap-3 rounded-3xl bg-primary/10 px-4 py-3 text-sm font-semibold text-primary shadow-sm shadow-primary/10 ring-1 ring-primary/15">
          <span class="material-symbols-outlined">campaign</span>
          Communiqués
        </a>
        <a href="?p=settings" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-semibold text-muted transition hover:bg-primary/10 hover:text-primary">
          <span class="material-symbols-outlined">settings</span>
          Paramètres
        </a>
      </nav>
      <button class="mt-auto inline-flex items-center justify-center gap-2 rounded-full bg-primary px-5 py-3 text-sm font-semibold text-on-primary shadow-lg shadow-primary/20 transition hover:bg-primary/90">
        <span class="material-symbols-outlined">live_tv</span>
        Messe en direct
      </button>
    </aside>

    <main class="space-y-8">
      <section class="rounded-[2rem] border border-outline bg-surface-bright p-8 shadow-card">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
          <div class="max-w-2xl space-y-4">
            <div class="inline-flex items-center gap-3 rounded-full bg-secondary-soft px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-secondary">
              <span class="material-symbols-outlined">auto_awesome</span>
              Editorial sacré
            </div>
            <div class="space-y-3">
              <h2 class="text-4xl font-headline font-semibold leading-tight text-primary">Gestion des Communiqués</h2>
              <p class="text-lg leading-8 text-muted">Concevez des messages lumineux, partagez l’espérance et créez des communiqués qui font rayonner la communauté.</p>
            </div>
          </div>
          <button class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-on-primary transition hover:bg-primary/90 shadow-lg shadow-primary/15">
            <span class="material-symbols-outlined">add_circle</span>
            Créer un communiqué
          </button>
        </div>
      </section>

      <section class="grid gap-6 xl:grid-cols-[360px_1fr]">
        <div class="space-y-6">
          <div class="rounded-[2rem] border border-outline bg-surface p-6 shadow-soft">
            <div class="flex items-center justify-between gap-4">
              <div>
                <p class="text-sm uppercase tracking-[0.32em] text-muted">Aperçu</p>
                <h3 class="mt-2 text-2xl font-semibold text-primary">Statistiques</h3>
              </div>
              <div class="rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">+14 %</div>
            </div>
            <div class="mt-6 space-y-4">
              <div class="rounded-[1.5rem] bg-surface-bright px-5 py-4 shadow-sm ring-1 ring-outline/70">
                <div class="flex items-center justify-between gap-4">
                  <span class="text-sm text-muted">Publiés</span>
                  <span class="text-2xl font-semibold text-primary">24</span>
                </div>
                <p class="mt-2 text-sm text-muted">Messages partagés dans la communauté ce mois-ci.</p>
              </div>
              <div class="rounded-[1.5rem] bg-surface-bright px-5 py-4 shadow-sm ring-1 ring-outline/70">
                <div class="flex items-center justify-between gap-4">
                  <span class="text-sm text-muted">Brouillons</span>
                  <span class="text-2xl font-semibold text-secondary">08</span>
                </div>
                <p class="mt-2 text-sm text-muted">Articles en attente de relecture ou de publication.</p>
              </div>
            </div>
            <div class="mt-6 border-t border-outline pt-5">
              <p class="text-xs uppercase tracking-[0.32em] text-muted">Catégories</p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">Liturgie</span>
                <span class="rounded-full bg-surface-bright px-3 py-1 text-xs font-semibold text-on-surface border border-outline">Solidarité</span>
                <span class="rounded-full bg-surface-bright px-3 py-1 text-xs font-semibold text-on-surface border border-outline">Jeunesse</span>
                <span class="rounded-full bg-surface-bright px-3 py-1 text-xs font-semibold text-on-surface border border-outline">Annonces</span>
              </div>
            </div>
          </div>

          <div class="rounded-[2rem] border border-outline bg-primary text-on-primary p-6 shadow-glow">
            <div class="flex items-center gap-4">
              <div class="grid h-14 w-14 place-items-center rounded-3xl bg-white/10 text-secondary">
                <span class="material-symbols-outlined filled">auto_awesome</span>
              </div>
              <div>
                <p class="text-sm uppercase tracking-[0.32em] opacity-80">Conseil Editorial</p>
                <h3 class="mt-2 text-2xl font-semibold">Approche contemplative</h3>
              </div>
            </div>
            <p class="mt-5 text-sm leading-7 text-on-primary/90">Équilibrez sobriété et sensibilité liturgique en choisissant des mots qui élèvent, inspirent et rassemblent.</p>
          </div>
        </div>

        <div class="space-y-6">
          <div class="rounded-[2rem] border border-outline bg-surface p-6 shadow-soft">
            <div class="flex flex-wrap items-center justify-between gap-4">
              <div>
                <p class="text-sm uppercase tracking-[0.32em] text-muted">Liste</p>
                <h3 class="mt-2 text-2xl font-semibold text-primary">Communiqués récents</h3>
              </div>
              <div class="inline-flex rounded-full bg-surface-bright px-4 py-2 text-sm font-semibold text-muted ring-1 ring-outline">3 / 32 affichés</div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3 rounded-full bg-surface-bright px-3 py-2 ring-1 ring-outline">
              <button class="rounded-full bg-primary px-4 py-2 text-sm font-semibold text-on-primary transition hover:bg-primary/90">Tous</button>
              <button class="rounded-full px-4 py-2 text-sm font-semibold text-muted transition hover:bg-surface-bright">Brouillons</button>
              <button class="rounded-full px-4 py-2 text-sm font-semibold text-muted transition hover:bg-surface-bright">Archives</button>
            </div>
            <div class="mt-6 space-y-4">
              <article class="group rounded-[2rem] border border-outline bg-surface-bright p-6 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="flex flex-col gap-5 lg:flex-row lg:items-start lg:justify-between">
                  <div class="flex gap-5">
                    <div class="relative h-28 w-36 overflow-hidden rounded-[1.75rem] border border-outline bg-surface-container-low">
                      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=480&q=80" alt="Église lumineuse" class="h-full w-full object-cover" />
                    </div>
                    <div>
                      <div class="flex flex-wrap items-center gap-3 text-xs uppercase tracking-[0.3em] text-muted">
                        <span class="rounded-full bg-primary/10 px-3 py-1 text-primary">Liturgie</span>
                        <span>Publié le 12 mai 2024</span>
                      </div>
                      <h4 class="mt-4 text-xl font-headline font-semibold text-on-surface transition group-hover:text-primary">Célébration de la Pentecôte : Horaires des Messes</h4>
                      <p class="mt-3 max-w-2xl text-sm leading-7 text-muted">Rejoignez-nous pour cette fête de l'Esprit Saint. Les messes seront célébrées à 9h, 11h et 18h30, avec une veillée de prière le samedi soir.</p>
                    </div>
                  </div>
                  <div class="flex flex-wrap items-center gap-3">
                    <button class="inline-flex items-center gap-2 rounded-full border border-outline bg-surface px-4 py-2 text-sm font-semibold text-primary transition hover:border-primary hover:bg-primary/10">
                      <span class="material-symbols-outlined">edit</span>
                      Modifier
                    </button>
                    <button class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-surface text-error transition hover:bg-error/10">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                </div>
              </article>
              <article class="group rounded-[2rem] border border-outline bg-surface-bright p-6 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="flex flex-col gap-5 lg:flex-row lg:items-start lg:justify-between">
                  <div class="flex gap-5">
                    <div class="relative flex h-28 w-36 items-center justify-center rounded-[1.75rem] border border-outline bg-surface-container-low text-muted">
                      <span class="material-symbols-outlined text-[38px]">image_not_supported</span>
                    </div>
                    <div>
                      <div class="flex flex-wrap items-center gap-3 text-xs uppercase tracking-[0.3em] text-muted">
                        <span class="rounded-full bg-secondary-soft px-3 py-1 text-secondary">Brouillon</span>
                        <span>Modifié il y a 2 heures</span>
                      </div>
                      <h4 class="mt-4 text-xl font-headline font-semibold text-on-surface transition group-hover:text-secondary">Campagne de Solidarité : Collecte de Printemps</h4>
                      <p class="mt-3 max-w-2xl text-sm leading-7 text-muted italic">Aucun aperçu disponible. Commencez à rédiger pour partager les besoins de la collecte alimentaire et susciter la générosité.</p>
                    </div>
                  </div>
                  <div class="flex flex-wrap items-center gap-3">
                    <button class="inline-flex items-center gap-2 rounded-full border border-outline bg-surface px-4 py-2 text-sm font-semibold text-primary transition hover:border-primary hover:bg-primary/10">
                      <span class="material-symbols-outlined">edit_note</span>
                      Reprendre
                    </button>
                    <button class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-surface text-error transition hover:bg-error/10">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                </div>
              </article>
              <article class="group rounded-[2rem] border border-outline bg-surface-bright p-6 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="flex flex-col gap-5 lg:flex-row lg:items-start lg:justify-between">
                  <div class="flex gap-5">
                    <div class="relative h-28 w-36 overflow-hidden rounded-[1.75rem] border border-outline bg-surface-container-low">
                      <img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=480&q=80" alt="Jeunes en prière" class="h-full w-full object-cover" />
                    </div>
                    <div>
                      <div class="flex flex-wrap items-center gap-3 text-xs uppercase tracking-[0.3em] text-muted">
                        <span class="rounded-full bg-surface-deep px-3 py-1 text-on-surface">Jeunesse</span>
                        <span>Publié le 05 mai 2024</span>
                      </div>
                      <h4 class="mt-4 text-xl font-headline font-semibold text-on-surface transition group-hover:text-primary">Rencontre des Jeunes Pros : Foi au Travail</h4>
                      <p class="mt-3 max-w-2xl text-sm leading-7 text-muted">Le groupe se réunit ce jeudi soir pour échanger sur la conciliation entre vie spirituelle et exigences professionnelles.</p>
                    </div>
                  </div>
                  <div class="flex flex-wrap items-center gap-3">
                    <button class="inline-flex items-center gap-2 rounded-full border border-outline bg-surface px-4 py-2 text-sm font-semibold text-primary transition hover:border-primary hover:bg-primary/10">
                      <span class="material-symbols-outlined">edit</span>
                      Modifier
                    </button>
                    <button class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-surface text-error transition hover:bg-error/10">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                </div>
              </article>
            </div>
            <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-outline pt-5 text-sm text-muted">
              <p>Affichage de 3 sur 32 communiqués</p>
              <div class="flex flex-wrap items-center gap-2">
                <button class="rounded-2xl border border-outline bg-surface px-4 py-3 text-sm text-muted transition hover:bg-surface-bright disabled:opacity-50" disabled>
                  <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="rounded-2xl bg-primary px-4 py-3 text-sm font-semibold text-on-primary">1</button>
                <button class="rounded-2xl border border-outline bg-surface px-4 py-3 text-sm text-muted transition hover:bg-surface-bright">2</button>
                <button class="rounded-2xl border border-outline bg-surface px-4 py-3 text-sm text-muted transition hover:bg-surface-bright">3</button>
                <button class="rounded-2xl border border-outline bg-surface px-4 py-3 text-sm text-muted transition hover:bg-surface-bright">
                  <span class="material-symbols-outlined">chevron_right</span>
                </button>
              </div>
            </div>
          </div>

          <div class="rounded-[2rem] border border-outline bg-surface p-6 shadow-soft">
            <div class="flex items-center gap-4">
              <div class="grid h-14 w-14 place-items-center rounded-3xl bg-secondary-soft text-secondary shadow-sm">
                <span class="material-symbols-outlined">tune</span>
              </div>
              <div>
                <p class="text-sm uppercase tracking-[0.32em] text-muted">Paramètres</p>
                <h3 class="text-2xl font-semibold text-on-surface">Publication</h3>
              </div>
            </div>
            <div class="mt-6 space-y-5">
              <div>
                <label class="text-xs uppercase tracking-[0.28em] text-muted">Catégorie</label>
                <select class="mt-3 w-full rounded-3xl border border-outline bg-surface p-4 text-sm text-on-surface outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">
                  <option>Liturgie</option>
                  <option>Communauté</option>
                  <option>Solidarité</option>
                  <option>Annonces</option>
                </select>
              </div>
              <div>
                <p class="text-xs uppercase tracking-[0.28em] text-muted">Visibilité</p>
                <div class="mt-3 grid gap-3 sm:grid-cols-2">
                  <label class="flex cursor-pointer items-center gap-3 rounded-3xl border border-outline bg-surface p-4 text-sm transition hover:border-primary">
                    <input type="radio" name="visibility" checked class="h-4 w-4 accent-primary" />
                    <span>Public</span>
                  </label>
                  <label class="flex cursor-pointer items-center gap-3 rounded-3xl border border-outline bg-surface p-4 text-sm transition hover:border-primary">
                    <input type="radio" name="visibility" class="h-4 w-4 accent-primary" />
                    <span>Privé</span>
                  </label>
                </div>
              </div>
              <div>
                <p class="text-xs uppercase tracking-[0.28em] text-muted">Image de couverture</p>
                <div class="mt-3 rounded-[1.75rem] border border-dashed border-outline bg-surface-container-low p-6 text-center transition hover:border-primary">
                  <span class="material-symbols-outlined text-4xl text-muted">cloud_upload</span>
                  <p class="mt-3 text-sm text-muted">Déposez une image ou cliquez pour choisir un fichier</p>
                </div>
              </div>
              <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-[1.75rem] border border-outline p-5 bg-surface-bright text-sm">
                  <p class="text-xs uppercase tracking-[0.32em] text-muted">Score d’engagement</p>
                  <p class="mt-3 text-xl font-semibold text-on-surface">92 / 100</p>
                </div>
                <div class="rounded-[1.75rem] border border-outline p-5 bg-surface-bright text-sm">
                  <p class="text-xs uppercase tracking-[0.32em] text-muted">Priorité</p>
                  <p class="mt-3 text-xl font-semibold text-primary">Haute</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="grid gap-6 xl:grid-cols-[1.6fr_0.9fr]">
        <div class="rounded-[2rem] border border-outline bg-surface p-6 shadow-soft">
          <div class="flex items-center justify-between gap-4">
            <div>
              <p class="text-sm uppercase tracking-[0.32em] text-muted">Éditeur</p>
              <h2 class="mt-2 text-3xl font-headline font-semibold text-primary">Nouvel Éditeur</h2>
            </div>
            <div class="inline-flex items-center gap-3 rounded-full bg-surface-bright px-4 py-2 text-sm font-semibold text-muted ring-1 ring-outline">
              <span class="material-symbols-outlined">rocket_launch</span>
              Enrichir
            </div>
          </div>
          <div class="mt-8 space-y-6">
            <input class="w-full bg-transparent text-4xl font-headline font-semibold text-on-surface outline-none placeholder:text-outline" placeholder="Titre du communiqué..." type="text" />
            <div class="rounded-[1.75rem] border border-outline bg-surface-bright p-4 shadow-sm">
              <div class="flex flex-wrap items-center gap-3">
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">format_bold</span>
                </button>
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">format_italic</span>
                </button>
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">format_list_bulleted</span>
                </button>
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">image</span>
                </button>
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">link</span>
                </button>
                <button class="inline-flex h-11 min-w-[48px] items-center justify-center rounded-3xl bg-surface text-muted transition hover:bg-primary/10 hover:text-primary">
                  <span class="material-symbols-outlined">format_quote</span>
                </button>
              </div>
            </div>
            <textarea class="min-h-[420px] w-full rounded-[2rem] border border-outline bg-surface-bright p-6 text-lg leading-8 text-on-surface outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10" placeholder="Commencez à rédiger votre message divin...">Chers fidèles,</textarea>
          </div>
          <div class="mt-8 flex flex-wrap items-center justify-between gap-4 border-t border-outline pt-6">
            <div class="text-sm text-muted">Enregistrez vos idées, puis publiez quand le message est prêt à toucher les coeurs.</div>
            <div class="flex flex-wrap gap-3">
              <button class="rounded-full border border-outline bg-surface px-5 py-3 text-sm font-semibold text-on-surface transition hover:bg-surface-bright">Annuler</button>
              <button class="rounded-full border border-primary bg-surface px-5 py-3 text-sm font-semibold text-primary transition hover:bg-primary/10">Sauvegarder brouillon</button>
              <button class="rounded-full bg-primary px-6 py-3 text-sm font-semibold text-on-primary shadow-lg shadow-primary/15 transition hover:bg-primary/90">Publier</button>
            </div>
          </div>
        </div>

        <aside class="rounded-[2rem] border border-outline bg-surface p-6 shadow-soft">
          <div class="flex items-center gap-4">
            <div class="grid h-14 w-14 place-items-center rounded-3xl bg-secondary-soft text-secondary shadow-sm">
              <span class="material-symbols-outlined">insights</span>
            </div>
            <div>
              <p class="text-sm uppercase tracking-[0.32em] text-muted">Raccourcis</p>
              <h3 class="text-xl font-semibold text-on-surface">Publication rapide</h3>
            </div>
          </div>
          <div class="mt-6 space-y-5">
            <div class="rounded-[1.75rem] bg-surface-bright p-5 ring-1 ring-outline">
              <p class="text-xs uppercase tracking-[0.28em] text-muted">Statut du communiqué</p>
              <p class="mt-3 text-lg font-semibold text-on-surface">Brouillon</p>
            </div>
            <div class="rounded-[1.75rem] bg-surface-bright p-5 ring-1 ring-outline">
              <p class="text-xs uppercase tracking-[0.28em] text-muted">Révision</p>
              <p class="mt-3 text-lg font-semibold text-primary">Prêt pour validation</p>
            </div>
            <div class="rounded-[1.75rem] bg-surface-bright p-5 ring-1 ring-outline">
              <p class="text-xs uppercase tracking-[0.28em] text-muted">Visibilité</p>
              <p class="mt-3 text-lg font-semibold text-on-surface">Public</p>
            </div>
          </div>
        </aside>
      </section>
    </main>
  </div>

  <button class="fixed bottom-8 right-8 z-50 inline-flex h-16 w-16 items-center justify-center rounded-full bg-secondary text-on-secondary shadow-2xl shadow-secondary/30 transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-secondary/40">
    <span class="material-symbols-outlined text-3xl">add</span>
  </button>
</div>
