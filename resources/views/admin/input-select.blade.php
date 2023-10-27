<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Select') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-select.basic class="space-y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.select type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Disabled Select" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-select.disabled />
        </div>
        <div x-show="showCode2">
            <x-torchlight.select type="disabled" />
        </div>
    </x-content-base>

    <x-content-base title="With Label" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-select.label />
        </div>
        <div x-show="showCode3">
            <x-torchlight.select type="label" />
        </div>
    </x-content-base>

    <x-content-base title="Hide Label" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-select.hide />
        </div>
        <div x-show="showCode4">
            <x-torchlight.select type="hide" />
        </div>
    </x-content-base>

    <x-content-base title="Validation" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-select.validation />
        </div>
        <div x-show="showCode5">
            <x-torchlight.select type="validation" />
        </div>
    </x-content-base>
</x-app-layout>
