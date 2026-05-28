<header class="flex justify-between items-center w-full px-margin-desktop h-20 bg-surface-bright border-b border-outline-variant sticky top-0 z-40">
    <div class="flex items-center gap-4">
        <button class="lg:hidden p-2 rounded-md" aria-label="Open menu" x-on:click="$dispatch('toggle-sidebar')">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <h2 class="font-headline-md text-headline-md font-bold text-primary">@yield('page-title','Administration')</h2>
    </div>

    <div class="flex items-center gap-6">
        <div class="relative hidden lg:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input x-data="{}" x-model.debounce.300ms="search" class="pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:ring-2 focus:ring-primary-container w-64" placeholder="Rechercher un lieu, type..." type="text"/>
        </div>

        <div class="flex items-center gap-3">
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors" aria-label="Notifications">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors" aria-label="Aide">
                <span class="material-symbols-outlined">help_outline</span>
            </button>
            <div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant">
                <img alt="Admin Avatar" class="w-full h-full object-cover" src="/public/images/admin-avatar.jpg"/>
            </div>
        </div>
    </div>
</header>
