<div>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <form wire:submit='save'>
        <button type="submit">-</button>

    </form>
</div>