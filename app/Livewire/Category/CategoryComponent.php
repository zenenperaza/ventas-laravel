<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Categorias')]

class CategoryComponent extends Component
{
    // Propiedades clase
    public $totalRegistros = 0;

    //Propiedades modelo
    public $name;

    public function render()
    {
        return view('livewire.category.category-component');
    }

     public function mount(){
        $this->totalRegistros = Category::count();
     }

     //Crear la categoria
     public function store(){
        // dump('Crear category');
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories'
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener un minimo de 5 caractes',
            'name.max' => 'El nombre no debe superar los 255 caracteres',            
            'name.unique' => 'El nombre de la categoria esta en uso',
        ];

        $this->validate($rules, $messages);

        $category = new Category();
        $category->name = $this->name;
        $category->save();

        $this->dispatch('close-modal', 'modalCategory');
     }
}
