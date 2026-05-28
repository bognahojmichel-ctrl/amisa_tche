@php
if (!isset($week)) {
    // sample week structure: [ ['day' => 'LUN', 'items' => [ ['time'=>'08:30','label'=>'Chapelle','type'=>'ordinary'] ] ], ... ]
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
@endphp

<div class="grid grid-cols-7 gap-4 min-w-[640px]">
    @foreach($week as $d)
        <div class="space-y-3">
            <p class="font-bold text-center text-on-surface-variant border-b border-outline-variant pb-2">{{ $d['day'] }}</p>
            @if(empty($d['items']))
                <div class="p-3 bg-surface-container-low rounded border border-outline-variant/30 text-center opacity-60">
                    <p class="text-xs italic">Aucun</p>
                </div>
            @else
                @foreach($d['items'] as $it)
                    <div class="p-3 bg-white rounded border border-outline-variant/30 text-center shadow-sm">
                        <p class="font-bold text-primary">{{ $it['time'] }}</p>
                        <p class="text-xs text-on-surface-variant">{{ $it['label'] }}</p>
                        <div class="mt-2 flex justify-center gap-2">
                            @if(($it['type'] ?? '') === 'vigil')
                                <span class="px-2 py-1 bg-secondary-container/20 text-secondary rounded-full text-xs">Vigile</span>
                            @elseif(($it['type'] ?? '') === 'solemn')
                                <span class="px-2 py-1 bg-primary-container/30 text-on-primary-container rounded-full text-xs">Solennelle</span>
                            @elseif(($it['type'] ?? '') === 'youth')
                                <span class="px-2 py-1 bg-primary-container/10 text-primary rounded-full text-xs">Jeunes</span>
                            @else
                                <span class="px-2 py-1 bg-surface-container rounded-full text-xs">Ordinaire</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    @endforeach
</div>
