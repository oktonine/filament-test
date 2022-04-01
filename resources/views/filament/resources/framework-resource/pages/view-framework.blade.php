<x-filament::page :widget-record="$record">
<ul>
    @foreach($record->competencies as $competency)
        <li>
             {{ $competency->name }}
             <ul>
                @foreach($competency->children as $competency)
                    <li>
                        {{ $competency->name }}
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
</x-filament::page>
