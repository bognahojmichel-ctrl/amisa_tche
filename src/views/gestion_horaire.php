<?php
/**
 * Vue: Gestion des horaires — intégrée au layout global
 * - Ne pas réimporter Tailwind / fonts (déjà dans includes/header.php)
 * - Fourni: sidebar, topbar améliorés, weekly view, table, form
 */

// données d'exemple si non fournies par le contrôleur
if (!isset($horaires) || !is_array($horaires)) {
    $horaires = [
        ['id'=>1,'day'=>'Lundi','time'=>'08:30','location'=>'Chapelle des Anges','type'=>'ordinary'],
        ['id'=>2,'day'=>'Mardi','time'=>'18:00','location'=>'Église Principale','type'=>'ordinary'],
        ['id'=>3,'day'=>'Samedi','time'=>'17:30','location'=>'Paroisse Saint-Michel','type'=>'vigil'],
    ];
}

// structure hebdomadaire simple
if (!isset($week) || !is_array($week)) {
    $week = [
        ['day'=>'LUN','items'=>[['time'=>'08:30','label'=>'Chapelle','type'=>'ordinary']]],
        ['day'=>'MAR','items'=>[['time'=>'18:00','label'=>'Église','type'=>'ordinary']]],
        ['day'=>'MER','items'=>[['time'=>'08:30','label'=>'Chapelle','type'=>'ordinary']]],
        ['day'=>'JEU','items'=>[['time'=>'18:00','label'=>'Église','type'=>'ordinary']]],
        ['day'=>'VEN','items'=>[]],
        ['day'=>'SAM','items'=>[['time'=>'17:30','label'=>'Vigile','type'=>'vigil']]],
        ['day'=>'DIM','items'=>[['time'=>'10:30','label'=>'Paroisse','type'=>'solemn'],['time'=>'18:30','label'=>'Jeunes','type'=>'youth']]],
    ];
}
?>

<!-- Sidebar (kept local to admin views) -->
<nav class="fixed left-0 top-0 h-full flex flex-col p-4 space-y-2 bg-surface-container-low border-r border-outline-variant w-64 z-50">
    <div class="mb-6 px-3">
        <h1 class="font-headline-md text-headline-md font-bold text-primary">La Lumière Divine</h1>
        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Portail Admin</p>
    </div>
    <div class="space-y-1 flex-1">
        <a href="?p=admin" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-md">Tableau de bord</span>
        </a>
        <a href="?p=gestion-demandes" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-full">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-body-md">Demandes</span>
        </a>
        <a href="?p=gestion-horaire" class="flex items-center gap-3 px-4 py-3 bg-primary-container text-on-primary-container rounded-full font-bold translate-x-1">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-body-md">Horaires</span>
        </a>
    </div>
    <div class="mt-auto px-3">
        <a href="?p=live" class="w-full py-3 bg-primary text-on-primary rounded-full font-bold flex items-center justify-center gap-2">
            <span class="material-symbols-outlined">live_tv</span>
            <span class="text-sm">Messe en direct</span>
        </a>
    </div>
</nav>

<!-- Main content (admin) -->
<main class="ml-64 flex-1 min-h-screen">
    <!-- Top bar -->
    <header class="flex justify-between items-center w-full px-margin-desktop h-20 border-b border-outline-variant bg-surface-bright sticky top-0 z-40">
        <div>
            <h2 class="font-headline-md text-headline-md font-bold text-primary">Gestion des horaires des messes</h2>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative hidden lg:block">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input id="admin-search" class="pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md w-64" placeholder="Rechercher..." />
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full"><span class="material-symbols-outlined">notifications</span></button>
                <div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant"><img src="/public/images/admin-avatar.jpg" alt="admin" class="w-full h-full object-cover"/></div>
            </div>
        </div>
    </header>

    <div class="p-margin-desktop space-y-8">
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-gutter">
            <!-- Form -->
            <section class="xl:col-span-4 bg-white p-6 rounded-xl border border-primary-container/20 shadow-sm">
                <h3 class="font-headline-md text-primary mb-3">Ajouter / Modifier un horaire</h3>
                <form id="horaire-form" class="space-y-4" onsubmit="return false;">
                    <div>
                        <label class="block font-label-sm mb-2">Jour</label>
                        <select id="f-day" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3">
                            <option>Lundi</option><option>Mardi</option><option>Mercredi</option><option>Jeudi</option><option>Vendredi</option><option>Samedi</option><option>Dimanche</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block font-label-sm mb-2">Début</label>
                            <input id="f-start" type="time" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                        </div>
                        <div>
                            <label class="block font-label-sm mb-2">Fin</label>
                            <input id="f-end" type="time" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-sm mb-2">Lieu</label>
                        <input id="f-location" type="text" placeholder="Chapelle des Anges" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                    </div>
                    <div>
                        <label class="block font-label-sm mb-2">Type</label>
                        <select id="f-type" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3">
                            <option value="ordinary">Messe ordinaire</option>
                            <option value="vigil">Vigile</option>
                            <option value="solemn">Messe solennelle</option>
                            <option value="youth">Messe jeunes</option>
                        </select>
                    </div>
                    <div class="flex gap-2">
                        <button id="save-btn" class="flex-1 bg-primary text-on-primary font-bold py-3 rounded-lg">Enregistrer</button>
                        <button id="reset-btn" class="flex-1 border border-outline-variant rounded-lg py-3">Réinitialiser</button>
                    </div>
                </form>
            </section>

            <!-- Weekly view -->
            <section class="xl:col-span-8 bg-white p-6 rounded-xl border border-primary-container/20 shadow-sm overflow-auto">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-headline-md text-primary">Aperçu Hebdomadaire</h3>
                    <div class="flex items-center gap-3"><span class="w-3 h-3 rounded-full bg-primary-container"></span><span class="text-label-sm text-on-surface-variant">Confirmées</span></div>
                </div>

                <div id="week-grid" class="grid grid-cols-7 gap-4 min-w-[640px]">
                    <?php foreach ($week as $d): ?>
                        <div class="space-y-3">
                            <p class="font-bold text-center text-on-surface-variant border-b border-outline-variant pb-2"><?= htmlspecialchars($d['day']) ?></p>
                            <?php if (empty($d['items'])): ?>
                                <div class="p-3 bg-surface-container-low rounded border border-outline-variant/30 text-center opacity-60"><p class="text-xs italic">Aucun</p></div>
                            <?php else: foreach ($d['items'] as $it): ?>
                                <div class="p-3 bg-white rounded border border-outline-variant/30 text-center shadow-sm">
                                    <p class="font-bold text-primary"><?= htmlspecialchars($it['time']) ?></p>
                                    <p class="text-xs text-on-surface-variant"><?= htmlspecialchars($it['label']) ?></p>
                                    <div class="mt-2 flex justify-center gap-2">
                                        <?php $t = $it['type'] ?? 'ordinary';
                                        if ($t === 'vigil') echo '<span class="px-2 py-1 bg-secondary-container/20 text-secondary rounded-full text-xs">Vigile</span>';
                                        elseif ($t==='solemn') echo '<span class="px-2 py-1 bg-primary-container/30 text-on-primary-container rounded-full text-xs">Solennelle</span>';
                                        elseif ($t==='youth') echo '<span class="px-2 py-1 bg-primary-container/10 text-primary rounded-full text-xs">Jeunes</span>';
                                        else echo '<span class="px-2 py-1 bg-surface-container rounded-full text-xs">Ordinaire</span>';?>
                                    </div>
                                </div>
                            <?php endforeach; endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

        <!-- Table list -->
        <section class="bg-white rounded-xl border border-primary-container/20 shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-outline-variant flex justify-between items-center">
                <h3 class="font-headline-md text-primary">Liste complète des horaires</h3>
                <div class="flex gap-2">
                    <button id="filter-btn" class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg">Filtrer</button>
                    <button id="export-btn" class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg">Exporter</button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left min-w-[720px]">
                    <thead class="bg-surface-container-low font-label-sm text-on-surface-variant uppercase">
                        <tr>
                            <th class="px-6 py-3">Jour</th>
                            <th class="px-6 py-3">Heure</th>
                            <th class="px-6 py-3">Lieu</th>
                            <th class="px-6 py-3">Type</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <?php foreach ($horaires as $h): ?>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4 font-bold"><?= htmlspecialchars($h['day']) ?></td>
                                <td class="px-6 py-4"><?= htmlspecialchars($h['time']) ?></td>
                                <td class="px-6 py-4"><?= htmlspecialchars($h['location']) ?></td>
                                <td class="px-6 py-4">
                                    <?php $type = $h['type'] ?? 'ordinary';
                                    $badge = '<span class="px-3 py-1 rounded-full text-xs font-bold">Ordinaire</span>';
                                    if ($type==='vigil') $badge = '<span class="px-3 py-1 bg-secondary-container/20 text-secondary rounded-full text-xs font-bold">Vigile</span>';
                                    if ($type==='solemn') $badge = '<span class="px-3 py-1 bg-primary-container/30 text-on-primary-container rounded-full text-xs font-bold">Solennelle</span>';
                                    if ($type==='youth') $badge = '<span class="px-3 py-1 bg-primary-container/10 text-primary rounded-full text-xs font-bold">Jeunes</span>';
                                    echo $badge; ?>
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <button data-id="<?= $h['id'] ?>" class="edit-btn p-2 text-primary hover:bg-primary-container/20 rounded-lg transition-colors"><span class="material-symbols-outlined">edit</span></button>
                                    <button data-id="<?= $h['id'] ?>" class="delete-btn p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"><span class="material-symbols-outlined">delete</span></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-outline-variant flex items-center justify-between">
                <div class="text-sm text-on-surface-variant">Affichage de 1 à <?= count($horaires) ?> sur <?= count($horaires) ?></div>
                <div class="flex items-center gap-2">
                    <button id="prev-page" class="px-3 py-2 border rounded">Préc</button>
                    <button id="next-page" class="px-3 py-2 border rounded">Suiv</button>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal confirm (hidden by default) -->
    <div id="confirm-modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md">
            <h4 class="font-bold mb-2">Confirmer la suppression</h4>
            <p class="text-sm text-on-surface-variant mb-4">Cette action est irréversible. Voulez-vous continuer ?</p>
            <div class="flex justify-end gap-2">
                <button id="cancel-delete" class="px-4 py-2 border rounded">Annuler</button>
                <button id="confirm-delete" class="px-4 py-2 bg-error text-white rounded">Supprimer</button>
            </div>
        </div>
    </div>

    <!-- Toast container -->
    <div id="toasts" class="fixed bottom-6 right-6 z-50 space-y-3"></div>

</main>

<!-- Alpine + small inline script to manage interactions -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
// small helper UI logic without external build
document.addEventListener('DOMContentLoaded', function(){
    const toasts = document.getElementById('toasts');
    function notify(message,type='info'){
        const el = document.createElement('div');
        el.className = 'px-4 py-2 rounded-lg shadow-md border border-outline-variant ' + (type==='success'? 'bg-primary text-white': type==='error'? 'bg-error text-white':'bg-surface-container-low');
        el.textContent = message; toasts.appendChild(el);
        setTimeout(()=> el.remove(),4500);
    }

    document.querySelectorAll('.delete-btn').forEach(b=> b.addEventListener('click', e=>{
        const id = e.currentTarget.dataset.id; document.getElementById('confirm-modal').classList.remove('hidden');
        document.getElementById('confirm-delete').dataset.id = id;
    }));
    document.getElementById('cancel-delete').addEventListener('click', ()=> document.getElementById('confirm-modal').classList.add('hidden'));
    document.getElementById('confirm-delete').addEventListener('click', (e)=>{
        const id = e.currentTarget.dataset.id; document.getElementById('confirm-modal').classList.add('hidden');
        notify('Suppression effectuée','success');
    });

    document.getElementById('save-btn').addEventListener('click', ()=>{
        // minimal validation
        const start = document.getElementById('f-start').value;
        const end = document.getElementById('f-end').value;
        if(!start||!end){ notify('Veuillez renseigner l\'horaire','error'); return; }
        notify('Horaire enregistré','success');
    });
    document.getElementById('reset-btn').addEventListener('click', ()=>{
        document.getElementById('horaire-form').reset();
    });
});
</script>
