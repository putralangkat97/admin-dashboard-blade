<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Placeholders') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-placeholders.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.placeholder type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Complex Placeholder" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-placeholders.complex />
        </div>
        <div x-show="showCode2">
            <x-torchlight.placeholder type="complex" />
        </div>
    </x-content-base>

    <x-content-base title="Animation Placeholder" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-placeholders.animate />
        </div>
        <div x-show="showCode3">
            <x-torchlight.placeholder type="animate" />
        </div>
    </x-content-base>

    <x-content-base title="Animation Complex Placeholder" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-placeholders.animate-complex />
        </div>
        <div x-show="showCode4">
            <x-torchlight.placeholder type="animate-complex" />
        </div>
    </x-content-base>
</x-app-layout>
