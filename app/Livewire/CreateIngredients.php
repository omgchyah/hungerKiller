<?php

namespace App\Livewire;

use Livewire\Component;

class CreateIngredients extends Component
{

    public $ingredients = [];
    public $measurements = [];
    public $quantities = [];

    public function mount()
    {
        $this->ingredients = [''];
        $this->measurements = [''];
        $this->quantities = [''];
    }

    public function addIngredient()
    {
        $this->ingredients[] = '';
        $this->measurements[] = '';
        $this->quantities[] = '';
    }

    public function removeIngredients($index)
    {
        unset($this->ingredients[$index]);
        unset($this->measurements[$index]);
        unset($this->quantities[$index]);

        $this->ingredients = array_values($this->ingredients);
        $this->measurements = array_values($this->measurements);
        $this->quantities = array_values($this->quantities);

    }

    public function render()
    {
        return view('livewire.create-ingredients');
    }
}
