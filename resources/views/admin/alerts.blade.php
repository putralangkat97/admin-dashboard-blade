<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Alerts') }}
        </h2>
    </x-slot>

    <x-content-base title="Solid Colour" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-alerts.alert-solid class="space-y-1" />
        </div>
        <div x-show="showCode">
            <x-torchlight.alert type="solid" />
        </div>
    </x-content-base>

    <x-content-base title="Soft Colour" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-alerts.alert-soft class="space-y-1" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.alert type="soft" />
        </div>
    </x-content-base>

    <x-content-base title="With Close Button" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-alerts.alert-close-button class="space-y-1" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.alert type="dismiss" />
        </div>
    </x-content-base>
</x-app-layout>
