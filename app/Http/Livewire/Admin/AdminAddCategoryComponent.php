<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddCategoryComponent extends Component
{

    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $is_popular;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required',
            'image'=>'required'
        ]);
    }

    public function storeCategory(){

        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'image'=>'required'
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->saveAs('categories',$imageName);
        $category->image = $imageName;
        $category->is_popular = $this->is_popular;
        $category->save();
        session()->flash('message','Category has been created successfully!');

    }

    public function render()
    {


        return view('livewire.admin.admin-add-category-component');
    }
}
