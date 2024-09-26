<?php
use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

middleware(['auth', 'verified']);
name('playground');

new class extends Component {
    // start here
};
?>

<x-layouts.app>
    @volt('pages.playground')
        <div>
            <flux:button>Hi everyone</flux:button>
        </div>
    @endvolt
</x-layouts.app>
