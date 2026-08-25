<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16 items-center">

            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a href="{{ url('/clients') }}">
                    Клієнти
                </a>

                <a href="{{ url('/orders') }}">
                    Замовлення
                </a>
            </div>

            <div class="flex items-center gap-4">

                <span>
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit">
                        Вийти
                    </button>
                </form>

            </div>

        </div>
    </div>
</nav>
