<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Radio') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-radio.basic class="space-y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.radio type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Radio Disabled" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-radio.disabled class="space-y-2" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.radio type="disabled" />
        </div>
    </x-content-base>

    <x-content-base title="Radio Group" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-radio.group />
        </div>
        <div x-show="showCode3">
            <x-torchlight.radio type="group" />
        </div>
    </x-content-base>

    <x-content-base title="Radio with Description" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-radio.description />
        </div>
        <div x-show="showCode4">
            <x-torchlight.radio type="description" />
        </div>
    </x-content-base>
</x-app-layout>
