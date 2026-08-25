<x-app-layout>
    <div style="padding:20px; color:white;">
        <h1>Список замовлень</h1>

        @forelse($orders as $order)
            <p>{{ $order->address }}</p>
        @empty
            <p>Замовлень поки немає</p>
        @endforelse
    </div>
</x-app-layout>
