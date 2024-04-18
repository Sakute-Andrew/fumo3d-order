<x-welcome>
    @foreach($materials as $material)
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container">
                <h1>{{ $material->material_name }}</h1>
                <p>{{ $material->material_description }}</p>
                <p>Price: ${{ $material->material_strength }}</p>
                <p>Color: {{ $material->hdt }}</p>
                <p>Weight: {{ $material->tensile_elongation }} grams</p>
                <img src="/uploads/{{$material->material_photo}}">
            </div>
        </div>
    @endforeach
</x-welcome>
