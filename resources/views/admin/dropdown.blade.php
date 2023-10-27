<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Dropdown') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-dropdowns.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.dropdown type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Dropdown with Divider" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-dropdowns.divider />
        </div>
        <div x-show="showCode2">
            <x-torchlight.dropdown type="divider" />
        </div>
    </x-content-base>

    <x-content-base title="Dropdown with Title" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-dropdowns.title />
        </div>
        <div x-show="showCode3">
            <x-torchlight.dropdown type="title" />
        </div>
    </x-content-base>
</x-app-layout>
