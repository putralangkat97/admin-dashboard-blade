<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Badges') }}
        </h2>
    </x-slot>

    <x-content-base title="Solid Colour" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-badges.badge-solid class="space-x-3" />
        </div>
        <div x-show="showCode">
            <x-torchlight.badge type="solid" />
        </div>
    </x-content-base>

    <x-content-base title="Soft Colour" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-badges.badge-soft class="space-x-3" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.badge type="soft" />
        </div>
    </x-content-base>

    <x-content-base title="With Close Button" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-badges.badge-close class="space-x-3" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.badge type="dismiss" />
        </div>
    </x-content-base>

    <x-content-base title="With Status" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-badges.badge-status class="space-x-3" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.badge type="status" />
        </div>
    </x-content-base>
</x-app-layout>
