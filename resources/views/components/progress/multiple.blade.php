<div {{ $attributes->merge(['class' => 'flex w-full h-2 bg-gray-200 overflow-hidden']) }}>
    <div class="flex flex-col justify-center overflow-hidden bg-red-500" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="flex flex-col justify-center overflow-hidden bg-orange-500" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="flex flex-col justify-center overflow-hidden bg-yellow-500" role="progressbar" style="width: 30%"
        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar" style="width: 5%"
        aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
</div>
