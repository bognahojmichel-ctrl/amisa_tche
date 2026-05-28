@props(['slotItem'])
<div class="bg-white p-4 rounded-xl border border-primary-container/20 shadow-sm flex flex-col justify-between">
    <div>
        <div class="flex items-start justify-between">
            <div>
                <p class="text-xs text-on-surface-variant uppercase">{{ $slotItem['day'] ?? '' }}</p>
                <h4 class="font-bold text-on-surface">{{ $slotItem['time'] ?? '' }}</h4>
                <p class="text-sm text-on-surface-variant">{{ $slotItem['location'] ?? '' }}</p>
            </div>
            <div class="text-right">
                @if(($slotItem['type'] ?? '') === 'solemn')
                    <span class="px-2 py-1 rounded-full bg-primary-container/30 text-on-primary-container text-xs font-bold">Solennelle</span>
                @elseif(($slotItem['type'] ?? '') === 'vigil')
                    <span class="px-2 py-1 rounded-full bg-secondary-container/20 text-secondary text-xs font-bold">Vigile</span>
                @elseif(($slotItem['type'] ?? '') === 'youth')
                    <span class="px-2 py-1 rounded-full bg-primary-container/10 text-primary text-xs font-bold">Jeunes</span>
                @else
                    <span class="px-2 py-1 rounded-full bg-surface-container text-xs">Ordinaire</span>
                @endif
+            </div>
         </div>
     </div>
     <div class="mt-4 flex items-center justify-between">
         <div class="flex items-center gap-2 text-on-surface-variant">
             <span class="material-symbols-outlined">schedule</span>
             <span class="text-sm">{{ $slotItem['start'] ?? '' }} — {{ $slotItem['end'] ?? '' }}</span>
         </div>
         <div class="flex items-center gap-2">
             <button class="p-2 text-primary hover:bg-primary-container/20 rounded-lg transition-colors" aria-label="Editer">
                 <span class="material-symbols-outlined">edit</span>
             </button>
             <button x-on:click="$dispatch('confirm-delete',{id: {{ $slotItem['id'] ?? 0 }}})" class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors" aria-label="Supprimer">
                 <span class="material-symbols-outlined">delete</span>
             </button>
         </div>
     </div>
 </div>
