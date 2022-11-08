<x-layout title="Temporada de {!! $series->nome !!}">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Temporada {{ $season->name }}

                <span class="badge bg-secondary">
                    {{ $season->episodes->count() }}
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>