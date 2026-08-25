<x-app-layout>
    <div style="padding:20px; color:white;">
        <h1>Список клієнтів</h1>

        @forelse($clients as $client)
            <p>{{ $client->name }}</p>
        @empty
            <p>Клієнтів поки немає</p>
        @endforelse
    </div>
</x-app-layout>
