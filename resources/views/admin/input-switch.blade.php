<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Switch') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-switch.basic class="space-y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.switch type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Switch Description" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-switch.description class="space-y-2" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.switch type="description" />
        </div>
    </x-content-base>

    <x-content-base title="Switch Disabled" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-switch.disabled class="space-y-2" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.switch type="disabled" />
        </div>
    </x-content-base>
</x-app-layout>
