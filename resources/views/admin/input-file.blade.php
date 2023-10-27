<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input File') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-file.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.file type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="File with Button" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-file.button />
        </div>
        <div x-show="showCode2">
            <x-torchlight.file type="button" />
        </div>
    </x-content-base>
</x-app-layout>
