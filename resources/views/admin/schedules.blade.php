@extends('layouts.admin')

@section('title','Gestion des horaires — La Lumière Divine')

@section('page-title','Gestion des horaires des messes')

@section('content')
<div x-data="schedulesPage()" x-init="load()" class="space-y-8">

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-gutter">
        <!-- Form: add/edit -->
        <section class="xl:col-span-4 bg-white p-6 rounded-xl border border-primary-container/20 shadow-sm">
            <h3 class="font-headline-md text-headline-md text-primary mb-4">Ajouter un horaire récurrent</h3>
            <form x-on:submit.prevent="save()" class="space-y-4">
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-2">Jour</label>
                    <select x-model="form.day" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3 focus:ring-primary focus:border-primary">
                        <option value="Lundi">Lundi</option>
                        <option value="Mardi">Mardi</option>
                        <option value="Mercredi">Mercredi</option>
                        <option value="Jeudi">Jeudi</option>
                        <option value="Vendredi">Vendredi</option>
                        <option value="Samedi">Samedi</option>
                        <option value="Dimanche">Dimanche</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-2">Heure début</label>
                        <input x-model="form.start" type="time" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                    </div>
                    <div>
                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-2">Heure fin</label>
                        <input x-model="form.end" type="time" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                    </div>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-2">Lieu</label>
                    <input x-model="form.location" type="text" placeholder="Ex: Chapelle des Anges" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3" />
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-2">Type</label>
                    <select x-model="form.type" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3">
                        <option value="ordinary">Messe ordinaire</option>
                        <option value="vigil">Vigile</option>
                        <option value="solemn">Messe solennelle</option>
                        <option value="youth">Messe jeunes</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-primary text-on-primary font-bold py-3 rounded-lg hover:opacity-95 transition">Ajouter</button>
                    <button type="button" x-show="form.id" x-on:click="resetForm()" class="flex-1 border border-outline-variant rounded-lg py-3">Annuler</button>
                </div>
            </form>
        </section>

        <!-- Weekly visualization -->
        <section class="xl:col-span-8 bg-white p-6 rounded-xl border border-primary-container/20 shadow-sm overflow-auto">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-headline-md text-headline-md text-primary">Aperçu Hebdomadaire</h3>
                <div class="flex items-center gap-3">
                    <span class="w-3 h-3 rounded-full bg-primary-container"></span>
                    <span class="text-label-sm text-on-surface-variant">Messe confirmée</span>
                </div>
            </div>

            <template x-if="loading">
                <div class="animate-pulse space-y-3">
                    <div class="h-40 bg-surface-container-low rounded-lg"></div>
                    <div class="h-6 bg-surface-container-low rounded w-1/3"></div>
                </div>
            </template>

            <div x-show="!loading">
                @include('components.weekly-view', ['week' => $week ?? null])
            </div>
        </section>
    </div>

    <!-- List / Table -->
    <section class="bg-white rounded-xl border border-primary-container/20 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-outline-variant flex justify-between items-center">
            <h3 class="font-headline-md text-headline-md text-primary">Liste complète des horaires</h3>
            <div class="flex gap-2">
                <button x-on:click="toggleFilters" class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg text-sm">Filtrer</button>
                <button x-on:click="export()" class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg text-sm">Exporter</button>
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
                    <template x-if="loading">
                        <tr>
                            <td colspan="5" class="p-6">
                                <div class="animate-pulse space-y-2">
                                    <div class="h-4 bg-surface-container-low rounded w-1/4"></div>
                                    <div class="h-4 bg-surface-container-low rounded w-1/2"></div>
                                </div>
                            </td>
                        </tr>
                    </template>

                    <template x-for="item in items" :key="item.id">
                        <tr class="hover:bg-surface-container-lowest transition-colors">
                            <td class="px-6 py-4 font-bold" x-text="item.day"></td>
                            <td class="px-6 py-4" x-text="item.time"></td>
                            <td class="px-6 py-4" x-text="item.location"></td>
                            <td class="px-6 py-4">
                                <span x-text="item.type_label" class="px-3 py-1 rounded-full text-xs font-bold" :class="item.type_class"></span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button x-on:click="edit(item)" class="p-2 text-primary hover:bg-primary-container/20 rounded-lg transition-colors"><span class="material-symbols-outlined">edit</span></button>
                                <button x-on:click="$dispatch('confirm-delete',{id:item.id})" class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"><span class="material-symbols-outlined">delete</span></button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-outline-variant flex items-center justify-between">
            <div class="text-sm text-on-surface-variant">Affichage de <span x-text="pagination.from"></span> à <span x-text="pagination.to"></span> sur <span x-text="pagination.total"></span></div>
            <div class="flex items-center gap-2">
                <button x-on:click="prevPage" class="px-3 py-2 border rounded">Préc</button>
                <button x-on:click="nextPage" class="px-3 py-2 border rounded">Suiv</button>
            </div>
        </div>
    </section>

    <!-- Modal: confirm delete -->
    <div x-data="{}" x-on:confirm-delete.window="(e)=>{ $refs.confirmModal.show(e.detail.id) }"></div>
    <div x-ref="confirmModal" x-data="confirmModal()" x-show="visible" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md">
            <h4 class="font-bold mb-2">Confirmer la suppression</h4>
            <p class="text-sm text-on-surface-variant mb-4">Cette action est irréversible. Voulez-vous continuer ?</p>
            <div class="flex justify-end gap-2">
                <button x-on:click="hide()" class="px-4 py-2 border rounded">Annuler</button>
                <button x-on:click="confirm()" class="px-4 py-2 bg-error text-white rounded">Supprimer</button>
            </div>
        </div>
    </div>

</div>

<script>
function schedulesPage(){
    return {
        loading:true,
        items:[],
        pagination:{from:1,to:0,total:0,page:1},
        form:{},
        load(){
            // simulate fetch
            setTimeout(()=>{
                this.items = [
                    {id:1,day:'Lundi',time:'08:30',location:'Chapelle des Anges',type:'ordinary',type_label:'Ordinaire',type_class:'bg-surface-container'},
                    {id:2,day:'Mardi',time:'18:00',location:'Église Principale',type:'ordinary',type_label:'Ordinaire',type_class:'bg-surface-container'},
                ];
                this.pagination = {from:1,to:this.items.length,total:this.items.length,page:1};
                this.loading=false;
            },700);
        },
        save(){
            // validate minimal
            if(!this.form.start || !this.form.end) return window.notify({message:'Veuillez renseigner l\'horaire',type:'error'});
            // simulate save
            window.notify({message:'Horaire ajouté',type:'success'});
            this.resetForm();
        },
        resetForm(){ this.form = {} },
        edit(i){ this.form = Object.assign({},i) },
        prevPage(){ if(this.pagination.page>1){ this.pagination.page--; this.load() } },
        nextPage(){ this.pagination.page++; this.load() },
        toggleFilters(){ window.notify({message:'Filtres non implémentés (exemple)',type:'info'}) },
        export(){ window.notify({message:'Export démarré',type:'info'}) }
    }
}

function confirmModal(){
    return {
        visible:false,
        id:null,
        show(id){ this.id=id; this.visible=true },
        hide(){ this.visible=false; this.id=null },
        confirm(){
            // simulate delete
            window.notify({message:'Suppression effectuée',type:'success'});
            this.hide();
        }
    }
}
</script>

@endsection
