<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-input.basic class="space-y-2" />
        </div>
        <div x-show="showCode">
            <x-torchlight.input type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Placeholder" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-input.placeholder class="space-y-2" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.input type="placeholder" />
        </div>
    </x-content-base>

    <x-content-base title="Size Input" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-input.size class="space-y-4" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.input type="size" />
        </div>
    </x-content-base>

    <x-content-base title="Readonly Input" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-input.readonly />
        </div>
        <div x-show="showCode4">
            <x-torchlight.input type="readonly" />
        </div>
    </x-content-base>

    <x-content-base title="Disabled Input" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-input.disabled class="space-y-4" />
        </div>
        <div x-show="showCode5">
            <x-torchlight.input type="disabled" />
        </div>
    </x-content-base>

    <x-content-base title="With Label" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-input.label />
        </div>
        <div x-show="showCode6">
            <x-torchlight.input type="label" />
        </div>
    </x-content-base>

    <x-content-base title="Helper Text" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-input.helper />
        </div>
        <div x-show="showCode7">
            <x-torchlight.input type="helper" />
        </div>
    </x-content-base>

    <x-content-base title="Inline" eventName="showCode7">
        <x-tabs-preview-code eventName="showCode7" />
        <div x-show="!showCode7">
            <x-input.inline />
        </div>
        <div x-show="showCode7">
            <x-torchlight.input type="inline" />
        </div>
    </x-content-base>

    <x-content-base title="Inline" eventName="showCode8">
        <x-tabs-preview-code eventName="showCode8" />
        <div x-show="!showCode8">
            <x-input.inline />
        </div>
        <div x-show="showCode8">
            <x-torchlight.input type="inline" />
        </div>
    </x-content-base>

    <x-content-base title="Corner Hint" eventName="showCode9">
        <x-tabs-preview-code eventName="showCode9" />
        <div x-show="!showCode9">
            <x-input.corner />
        </div>
        <div x-show="showCode9">
            <x-torchlight.input type="corner" />
        </div>
    </x-content-base>

    <x-content-base title="Validation" eventName="showCode10">
        <x-tabs-preview-code eventName="showCode10" />
        <div x-show="!showCode10">
            <x-input.validation />
        </div>
        <div x-show="showCode10">
            <x-torchlight.input type="validation" />
        </div>
    </x-content-base>
</x-app-layout>
