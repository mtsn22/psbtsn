<div>
    <div class="w-full h-8"></div>

    <div class="bg-tsn-header w-full border-b-4 border-tsn-accent">

        <h3 class="font-bold text-lg text-white text-center">Formulir PSB Qism Tarbiyatunnisaa</h3>
        <br>
    </div>

    <br>

    <div class="flex w-full bg-transparent justify-center">
        <div class="flex w-full bg-transparent justifi-center">
            <form wire:submit="create">
                {{ $this->form }}
                <br>
                <button class="flex btn bg-tsn-accent" type="submit">
                    Daftar
                </button>
            </form>
        </div>

        <x-filament-actions::modals />
    </div>
</div>
