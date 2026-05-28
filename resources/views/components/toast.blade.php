<div x-data="{toasts: []}" x-init="window.notify=(t)=>{ toasts.push(t); setTimeout(()=>toasts.shift(), 4500) }" class="fixed bottom-6 right-6 z-50 space-y-3">
    <template x-for="(t,i) in toasts" :key="i">
        <div x-text="t.message" x-bind:class="{'bg-success text-white': t.type==='success','bg-error text-white': t.type==='error','bg-surface-container-low': t.type==='info'}" class="px-4 py-2 rounded-lg shadow-md border border-outline-variant"></div>
    </template>
</div>
