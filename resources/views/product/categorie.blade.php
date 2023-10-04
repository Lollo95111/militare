<x-layout>

    <button id="tornaIndietro">Torna Indietro</button>

    @foreach($products as $product)

    <x-card :product=$product></x-card>

    @endforeach
    <script>
        document.getElementById("tornaIndietro").addEventListener("click", function() {
            window.history.back();
        });
    </script>
    </x-layout>
