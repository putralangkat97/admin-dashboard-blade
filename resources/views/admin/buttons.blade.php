<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Buttons') }}
        </h2>
    </x-slot>

    <x-content-base title="Solid Colour" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-buttons.solid-colour class="space-x-3" />
        </div>
        <div x-show="showCode">
            <x-torchlight.button type="solid" />
        </div>
    </x-content-base>

    <x-content-base title="Outline" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-buttons.outline class="space-x-3" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.button type="outline" />
        </div>
    </x-content-base>

    <x-content-base title="Ghost" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-buttons.ghost class="space-x-3" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.button type="ghost" />
        </div>
    </x-content-base>

    <x-content-base title="With Icon" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-buttons.icon class="space-x-3" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.button type="icon" />
        </div>
    </x-content-base>

    <x-content-base title="With Icon Animation" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-buttons.animate class="space-x-3" />
        </div>
        <div x-show="showCode5">
            <x-torchlight.button type="animate" />
        </div>
    </x-content-base>

    <x-content-base title="Disabled" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-buttons.disabled class="space-x-3" />
        </div>
        <div x-show="showCode6">
            <x-torchlight.button type="disabled" />
        </div>
    </x-content-base>
</x-app-layout>
