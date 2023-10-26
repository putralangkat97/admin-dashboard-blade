<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Avatars') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-avatars.basic class="space-x-4" />
        </div>
        <div x-show="showCode">
            <x-torchlight.avatar type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded with Indicator Top" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-avatars.basic-indicator indicator="top" type="basic" class="space-x-4" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.avatar type="indicator-top" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded with Indicator Bottom" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-avatars.basic-indicator indicator="bottom" type="basic" class="space-x-4" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.avatar type="indicator-bottom" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded Full" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-avatars.basic type="circle" class="space-x-4" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.avatar type="circle" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded Full with Indicator Top" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-avatars.basic-indicator indicator="top" type="circle" class="space-x-4" />
        </div>
        <div x-show="showCode5">
            <x-torchlight.avatar type="circle-indicator-top" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded Full with Indicator Bottom" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-avatars.basic-indicator indicator="bottom" type="circle" class="space-x-4" />
        </div>
        <div x-show="showCode6">
            <x-torchlight.avatar type="circle-indicator-bottom" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded Full Placeholder" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-avatars.basic-placeholder class="space-x-4 flex items-center" />
        </div>
        <div x-show="showCode7">
            <x-torchlight.avatar type="circle-placeholder" />
        </div>
    </x-content-base>

    <x-content-base title="Rounded Full Stacked" eventName="showCode8">
        <x-tabs-preview-code eventName="showCode8" />
        <div x-show="!showCode8">
            <x-avatars.basic-stacked class="flex -space-x-2" />
        </div>
        <div x-show="showCode8">
            <x-torchlight.avatar type="stacked" />
        </div>
    </x-content-base>
</x-app-layout>
