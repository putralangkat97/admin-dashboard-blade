<div {{ $attributes->merge(['class' => 'w-80 flex flex-col bg-white border shadow']) }}>
    <img class="w-full h-auto rounded-t-xl" src="{{ asset('img/img1.jpg') }}" alt="Image Description">
    <div class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-zinc-800">
            Card title
        </h3>
        <p class="mt-1 text-zinc-800">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas doloremque, nam neque
            esse totam quam nobis? Consectetur, iure ipsa.
        </p>
        <p class="mt-5 text-xs text-gray-500">
            Last updated 5 mins ago
        </p>
    </div>
</div>
