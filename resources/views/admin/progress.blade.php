<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Progress') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-progress.basic class="space-y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.progress type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="With Label" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-progress.label class="space-y-2" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.progress type="label" />
        </div>
    </x-content-base>

    <x-content-base title="Height Progress" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-progress.height class="space-y-4" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.progress type="height" />
        </div>
    </x-content-base>

    <x-content-base title="Vertical Progress" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-progress.vertical class="flex space-x-3" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.progress type="vertical" />
        </div>
    </x-content-base>

    <x-content-base title="Multiple Colours Progress" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-progress.multiple />
        </div>
        <div x-show="showCode5">
            <x-torchlight.progress type="multiple" />
        </div>
    </x-content-base>
</x-app-layout>
