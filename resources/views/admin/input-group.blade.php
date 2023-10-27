<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Group') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-group.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.group type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Multiple Input" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-group.multiple />
        </div>
        <div x-show="showCode2">
            <x-torchlight.group type="multiple" />
        </div>
    </x-content-base>

    <x-content-base title="Leading Icon" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-group.leading-icon />
        </div>
        <div x-show="showCode3">
            <x-torchlight.group type="leading-icon" />
        </div>
    </x-content-base>

    <x-content-base title="Trailing Icon" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-group.trailing-icon />
        </div>
        <div x-show="showCode4">
            <x-torchlight.group type="trailing-icon" />
        </div>
    </x-content-base>

    <x-content-base title="Trailing Icon" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-group.leading-trailing />
        </div>
        <div x-show="showCode5">
            <x-torchlight.group type="leading-trailing" />
        </div>
    </x-content-base>

    <x-content-base title="Add On" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-group.add-on />
        </div>
        <div x-show="showCode6">
            <x-torchlight.group type="add-on" />
        </div>
    </x-content-base>

    <x-content-base title="Inline Add On" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-group.inline-add-on />
        </div>
        <div x-show="showCode7">
            <x-torchlight.group type="inline-add-on" />
        </div>
    </x-content-base>

    <x-content-base title="Inline Leading Select" eventName="showCode8">
        <x-tabs-preview-code eventName="showCode8" />
        <div x-show="!showCode8">
            <x-group.inline-leading-select />
        </div>
        <div x-show="showCode8">
            <x-torchlight.group type="inline-leading-select" />
        </div>
    </x-content-base>

    <x-content-base title="Inline Trailing Select" eventName="showCode9">
        <x-tabs-preview-code eventName="showCode9" />
        <div x-show="!showCode9">
            <x-group.inline-trailing-select />
        </div>
        <div x-show="showCode9">
            <x-torchlight.group type="inline-trailing-select" />
        </div>
    </x-content-base>

    <x-content-base title="With Loading Icon" eventName="showCode10">
        <x-tabs-preview-code eventName="showCode10" />
        <div x-show="!showCode10">
            <x-group.loading-icon />
        </div>
        <div x-show="showCode10">
            <x-torchlight.group type="loading-icon" />
        </div>
    </x-content-base>
</x-app-layout>
