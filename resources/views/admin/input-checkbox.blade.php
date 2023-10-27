<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Checkbox') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-checkbox.basic class="space=y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.checkbox type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Disabled Checkbox" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-checkbox.disabled class="space-y-2" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.checkbox type="disabled" />
        </div>
    </x-content-base>

    <x-content-base title="Group Checkbox" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-checkbox.group />
        </div>
        <div x-show="showCode3">
            <x-torchlight.checkbox type="group" />
        </div>
    </x-content-base>

    <x-content-base title="Checkbox with Description" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-checkbox.description class="grid space-y-3" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.checkbox type="description" />
        </div>
    </x-content-base>
</x-app-layout>
