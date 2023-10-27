<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Cards') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Card" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-cards.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.card type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Simple Card" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-cards.simple />
        </div>
        <div x-show="showCode2">
            <x-torchlight.card type="simple" />
        </div>
    </x-content-base>

    <x-content-base title="Header and Footer" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-cards.header-footer class="flex space-x-8" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.card type="header-footer" />
        </div>
    </x-content-base>

    <x-content-base title="Placeholder Card" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-cards.placeholder class="flex space-x-8" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.card type="placeholder" />
        </div>
    </x-content-base>

    <x-content-base title="With Image Overlay" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-cards.overlay />
        </div>
        <div x-show="showCode5">
            <x-torchlight.card type="overlay" />
        </div>
    </x-content-base>

    <x-content-base title="Horizontal Card" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-cards.horizontal />
        </div>
        <div x-show="showCode6">
            <x-torchlight.card type="horizontal" />
        </div>
    </x-content-base>
</x-app-layout>
