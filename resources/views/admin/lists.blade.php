<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Lists') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-lists.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.list type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Horizontal List" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-lists.horizontal />
        </div>
        <div x-show="showCode2">
            <x-torchlight.list type="horizontal" />
        </div>
    </x-content-base>

    <x-content-base title="Icon List" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-lists.icon />
        </div>
        <div x-show="showCode3">
            <x-torchlight.list type="icon" />
        </div>
    </x-content-base>
</x-app-layout>
