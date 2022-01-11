<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class CreateIdea extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => 'required|min:3',
        'category' => 'required|integer',
        'description' => 'required|min:5',
    ];

    public function createIdea()
    {
            if (auth()->check()) {
                $this->validate();

                Idea::create([
                    'user_id' => auth()->id(),
                    'category_id' => $this->category,
                    'status_id' => 1,
                    'title' => $this->title,
                    'description' => $this->description,

            ]);

            session()->flash('success_message', 'Gratulacje! Twój pomysł został dodany pomyślnie. Inni użytkownicy mogą już na niego głosować!');

            $this->reset();

            return redirect()->route('idea.index');
        }

        abort(Response::HTTP_FORBIDDEN); 
    }

    public function render()
    {
        return view('livewire.create-idea', [
            'categories' => Category::all(),
        ]);
    }
}
