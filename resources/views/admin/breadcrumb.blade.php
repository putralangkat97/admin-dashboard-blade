<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Breadcrumb') }}
        </h2>
    </x-slot>

    <x-content-base title="Chevron" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-breadcrumbs.chevron class="space-x-3" />
        </div>
        <div x-show="showCode">
            <x-torchlight.breadcrumb type="chevron" />
        </div>
    </x-content-base>

    <x-content-base title="Slashes" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-breadcrumbs.slash class="space-x-3" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.breadcrumb type="slash" />
        </div>
    </x-content-base>

    <x-content-base title="With Icon" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-breadcrumbs.icon class="space-x-3" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.breadcrumb type="icon" />
        </div>
    </x-content-base>
</x-app-layout>
