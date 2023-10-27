<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Toasts') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-toasts.basic class="space-y-3" />
        </div>
        <div x-show="showCode">
            <x-torchlight.toast type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Solid with Close Button" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-toasts.dismiss class="space-y-3" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.toast type="dismiss" />
        </div>
    </x-content-base>

    <x-content-base title="Soft with Close Button" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-toasts.soft-dismiss class="space-y-3" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.toast type="soft-dismiss" />
        </div>
    </x-content-base>

    <x-content-base title="With Loading Progress" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-toasts.loading />
        </div>
        <div x-show="showCode4">
            <x-torchlight.toast type="loading" />
        </div>
    </x-content-base>

    <x-content-base title="Prompt" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-toasts.prompt />
        </div>
        <div x-show="showCode5">
            <x-torchlight.toast type="prompt" />
        </div>
    </x-content-base>

    <x-content-base title="Stack" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-toasts.stack class="space-y-3" />
        </div>
        <div x-show="showCode6">
            <x-torchlight.toast type="stack" />
        </div>
    </x-content-base>

    <x-content-base title="Placement" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-toasts.placement class="space-y-3" />
        </div>
        <div x-show="showCode7">
            <x-torchlight.toast type="placement" />
        </div>
    </x-content-base>
</x-app-layout>
