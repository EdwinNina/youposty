<div class="w-full bg-white rounded-lg shadow-md p-3">
    <div class="flex items-center justify-center mb-2">
      <h2 class="text-lg text-gray-title font-medium">Julio 2024</h2>
    </div>
    <div class="grid grid-flow-col grid-cols-7 gap-1">
      <div class="text-black/85 text-sm text-center font-bold">L</div>
      <div class="text-black/85 text-sm text-center font-bold">M</div>
      <div class="text-black/85 text-sm text-center font-bold">M</div>
      <div class="text-black/85 text-sm text-center font-bold">J</div>
      <div class="text-black/85 text-sm text-center font-bold">V</div>
      <div class="text-black/85 text-sm text-center font-bold">S</div>
      <div class="text-black/85 text-sm text-center font-bold">D</div>
    </div>
    <div class="grid grid-cols-7 gap-1">
        @foreach (collect(range(1, 31)) as $number)
            <div
                class="text-black/85 text-sm text-center flex justify-center items-center p-1 rounded-md {{ $number == date('d') ? 'bg-orange-custom-btn' : ''}}"
            >{{ $number }}</div>
        @endforeach
    </div>
</div>
