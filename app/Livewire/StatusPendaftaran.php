<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class StatusPendaftaran extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    // public function table(Table $table): Table
    // {
    //     // return $table
    //     //     ->query(Product::query())
    //     //     ->columns([
    //     //         TextColumn::make('name'),
    //     //     ])
    //     //     ->filters([
    //     //         // ...
    //     //     ])
    //     //     ->actions([
    //     //         // ...
    //     //     ])
    //     //     ->bulkActions([
    //     //         // ...
    //     //     ]);
    // }

    public function render(): View
    {
        return view('livewire.statuspendaftaran');
    }
}
