<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Tabs') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-tabs.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.tab type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Tabs with Icon" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-tabs.icon />
        </div>
        <div x-show="showCode2">
            <x-torchlight.tab type="icon" />
        </div>
    </x-content-base>

    <x-content-base title="Tabs with Badge" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-tabs.badge />
        </div>
        <div x-show="showCode3">
            <x-torchlight.tab type="badge" />
        </div>
    </x-content-base>

    <x-content-base title="Card Tab" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-tabs.card />
        </div>
        <div x-show="showCode4">
            <x-torchlight.tab type="card" />
        </div>
    </x-content-base>

    <x-content-base title="Segment Tab" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-tabs.segment />
        </div>
        <div x-show="showCode5">
            <x-torchlight.tab type="segment" />
        </div>
    </x-content-base>

    <x-content-base title="Pill Tab" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-tabs.pill />
        </div>
        <div x-show="showCode6">
            <x-torchlight.tab type="pill" />
        </div>
    </x-content-base>

    <x-content-base title="Vertical Tab" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-tabs.vertical />
        </div>
        <div x-show="showCode7">
            <x-torchlight.tab type="vertical" />
        </div>
    </x-content-base>
</x-app-layout>
