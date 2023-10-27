<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Spiners') }}
        </h2>
    </x-slot>

    <x-content-base title="Colours Spinner" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-spinners.colour class="space-x-4" />
        </div>
        <div x-show="showCode">
            <x-torchlight.spinner type="colour" />
        </div>
    </x-content-base>

    <x-content-base title="Spinner Size" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-spinners.size class="space-x-4" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.spinner type="size" />
        </div>
    </x-content-base>

    <x-content-base title="Spinner Inside Card" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-spinners.inside class="space-x-4" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.spinner type="inside" />
        </div>
    </x-content-base>

    <x-content-base title="Customize Description" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-spinners.description class="space-x-4" />
        </div>
        <div x-show="showCode4">
            <x-torchlight.spinner type="description" />
        </div>
    </x-content-base>
</x-app-layout>
