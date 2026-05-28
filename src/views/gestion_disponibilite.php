<?php
/**
 * Vue admin — Gestion des disponibilités (épurée)
 * - Hérite du layout global (head, fonts, Tailwind)
 * - Conserve la sidebar, la topbar, et le contenu métier
 * - Aucune importation de scripts/styles inline
 */
?>

<!-- Sidebar -->
<nav class="fixed left-0 top-0 h-full flex flex-col p-4 space-y-2 bg-surface-container-low border-r border-outline-variant w-64 z-50">
  <div class="mb-8 px-4 py-2">
    <h1 class="font-headline-md text-headline-md font-bold text-primary">La Lumière Divine</h1>
    <p class="font-label-sm text-label-sm text-on-surface-variant">Portail Admin</p>
  </div>
  <div class="space-y-1">
    <a href="/dashboard" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">dashboard</span>
      <span class="font-body-md text-body-md">Tableau de bord</span>
    </a>
    <a href="/demandes" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">auto_stories</span>
      <span class="font-body-md text-body-md">Demandes de messe</span>
    </a>
    <a href="/rendezvous" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">calendar_month</span>
      <span class="font-body-md text-body-md">Rendez-vous</span>
    </a>
    <a href="/disponibilites" class="flex items-center gap-3 px-4 py-3 bg-primary-container text-on-primary-container rounded-full font-bold translate-x-1 transition-transform duration-200">
      <span class="material-symbols-outlined">event_available</span>
      <span class="font-body-md text-body-md">Disponibilités</span>
    </a>
    <a href="/dons" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">volunteer_activism</span>
      <span class="font-body-md text-body-md">Dons</span>
    </a>
    <a href="/communiques" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">campaign</span>
      <span class="font-body-md text-body-md">Communiqués</span>
    </a>
    <a href="/settings" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 rounded-full">
      <span class="material-symbols-outlined">settings</span>
      <span class="font-body-md text-body-md">Paramètres</span>
    </a>
  </div>
  <div class="mt-auto pt-6 px-4">
    <a href="/live" class="w-full py-3 bg-primary text-on-primary rounded-full font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-all">
      <span class="material-symbols-outlined">live_tv</span>
      Messe en direct
    </a>
  </div>
</nav>

<!-- Main Content -->
<main class="ml-64 flex-1 flex flex-col">

  <!-- TopAppBar -->
  <header class="flex justify-between items-center w-full px-margin-desktop h-20 border-b border-outline-variant bg-surface-bright sticky top-0 z-10">
    <div class="flex items-center gap-4">
      <h2 class="font-headline-md text-headline-md font-bold text-primary">Gestion des Disponibilités</h2>
    </div>
    <div class="flex items-center gap-6">
      <div class="relative">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-outline material-symbols-outlined">search</span>
        <input class="pl-10 pr-4 py-2 bg-surface-container rounded-full border-none focus:ring-2 focus:ring-primary-container w-64 font-body-md" placeholder="Rechercher un créneau..." type="text"/>
      </div>
      <div class="flex items-center gap-4 text-on-surface-variant">
        <span class="material-symbols-outlined cursor-pointer hover:text-primary transition-colors">notifications</span>
        <span class="material-symbols-outlined cursor-pointer hover:text-primary transition-colors">help_outline</span>
        <div class="w-8 h-8 rounded-full border border-outline-variant overflow-hidden">
          <img alt="Admin Avatar" class="w-full h-full object-cover" src="/public/images/admin-avatar.jpg"/>
        </div>
      </div>
    </div>

                <?php
                if (!isset($disponibilites) || !is_array($disponibilites)) {
                    $disponibilites = [
                        ['id' => 1, 'date_display' => 'Lundi, 24 Mai', 'label' => 'Matinée Pastorale', 'start' => '09:00', 'end' => '11:30', 'capacity' => 4, 'occupied' => 3, 'tags' => ['Confessions','Urgent']],
                        ['id' => 2, 'date_display' => 'Mardi, 25 Mai', 'label' => 'Entretiens', 'start' => '14:00', 'end' => '17:00', 'capacity' => 5, 'occupied' => 1, 'tags' => ['Conseil']],
                    ];
                }

                foreach ($disponibilites as $slot):
                    $capacity = max(0, (int)($slot['capacity'] ?? 0));
                    $occupied = max(0, (int)($slot['occupied'] ?? 0));
                    $ratio = $capacity > 0 ? "$occupied/$capacity" : "0/0";
                    $fillPct = $capacity > 0 ? round(100 * $occupied / $capacity) : 0;
                ?>

                <div class="bg-white p-6 rounded-xl border border-primary-container/30 hover:shadow-md transition-shadow flex flex-col group relative">
                    <div class="absolute top-4 right-4 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="/disponibilites/<?= htmlspecialchars($slot['id'] ?? '') ?>" class="material-symbols-outlined">edit</a>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">calendar_today</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm text-outline uppercase"><?= htmlspecialchars($slot['date_display']) ?></p>
                            <p class="font-body-md text-body-md font-bold text-on-surface"><?= htmlspecialchars($slot['label']) ?></p>
                        </div>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="flex items-center justify-between text-on-surface-variant font-body-md">
                            <span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">schedule</span> <?= htmlspecialchars($slot['start']) ?> - <?= htmlspecialchars($slot['end']) ?></span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-label-sm text-label-sm text-outline">Occupation</span>
                            <div class="flex-1 mx-3 h-1 bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-primary" style="width: <?= $fillPct ?>%;"></div>
                            </div>
                            <span class="font-label-sm text-label-sm font-bold text-primary"><?= htmlspecialchars($ratio) ?></span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-2">
                        <?php foreach (($slot['tags'] ?? []) as $t): ?>
                            <span class="px-3 py-1 bg-surface-container rounded-full font-label-sm text-label-sm text-on-tertiary-container"><?= htmlspecialchars($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
            <div class="flex flex-col space-y-2">
              <label class="font-label-sm text-label-sm text-outline" for="end_time">Heure fin</label>
              <input class="border-b-2 border-outline-variant focus:border-primary bg-transparent py-2 px-0 focus:ring-0 font-body-md" id="end_time" type="time"/>
            </div>
            <div class="md:col-span-2 pt-4">
              <button class="bg-primary text-on-primary font-bold px-8 py-3 rounded-full flex items-center justify-center gap-2 hover:shadow-lg hover:shadow-primary/20 transition-all active:scale-95" type="submit">
                <span class="material-symbols-outlined">add_circle</span>
                Enregistrer la disponibilité
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Slots Grid Section -->
    <section class="max-w-container-max-width mx-auto pb-margin-desktop">
      <div class="flex items-end justify-between mb-8">
        <div>
          <h3 class="font-headline-lg text-headline-lg text-on-surface">Créneaux Existants</h3>
          <div class="h-1 w-20 bg-primary-container mt-2"></div>
        </div>
        <div class="flex gap-2">
          <button class="p-2 border border-outline-variant rounded-full text-outline hover:text-primary transition-colors">
            <span class="material-symbols-outlined">filter_list</span>
          </button>
          <button class="p-2 border border-outline-variant rounded-full text-outline hover:text-primary transition-colors">
            <span class="material-symbols-outlined">sort</span>
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
        <!-- Example Slot Card (repeatable) -->
        <div class="bg-white p-6 rounded-xl border border-primary-container/30 hover:shadow-md transition-shadow flex flex-col group relative">
          <div class="absolute top-4 right-4 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
            <span class="material-symbols-outlined cursor-pointer">edit</span>
          </div>
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
              <span class="material-symbols-outlined">calendar_today</span>
            </div>
            <div>
              <p class="font-label-sm text-label-sm text-outline uppercase">Lundi, 24 Mai</p>
              <p class="font-body-md text-body-md font-bold text-on-surface">Matinée Pastorale</p>
            </div>
          </div>
          <div class="space-y-3 flex-1">
            <div class="flex items-center justify-between text-on-surface-variant font-body-md">
              <span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">schedule</span> 09:00 - 11:30</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-label-sm text-label-sm text-outline">Occupation</span>
              <div class="flex-1 mx-3 h-1 bg-surface-container rounded-full overflow-hidden">
                <div class="h-full bg-primary w-3/4 rounded-full"></div>
              </div>
              <span class="font-label-sm text-label-sm font-bold text-primary">3/4</span>
            </div>
          </div>
          <div class="mt-6 flex gap-2">
            <span class="px-3 py-1 bg-surface-container rounded-full font-label-sm text-label-sm text-on-tertiary-container">Confessions</span>
            <span class="px-3 py-1 bg-primary-container/20 rounded-full font-label-sm text-label-sm text-primary">Urgent</span>
          </div>
        </div>

        <!-- Placeholder card for quick add -->
        <div class="border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center p-6 hover:bg-surface-container transition-colors cursor-pointer group h-full min-h-[180px]">
          <span class="material-symbols-outlined text-4xl text-outline-variant group-hover:text-primary transition-colors mb-2">add_circle</span>
          <p class="font-body-md text-body-md text-outline group-hover:text-primary font-bold transition-colors">Ajouter un créneau</p>
        </div>
      </div>
    </section>
  </div>

  <!-- Floating action button -->
  <button class="fixed bottom-8 right-8 bg-secondary-container text-on-secondary-container h-14 w-14 rounded-full flex items-center justify-center shadow-lg hover:scale-110 active:scale-90 transition-all z-20 group">
    <span class="material-symbols-outlined">bolt</span>
  </button>

</main>