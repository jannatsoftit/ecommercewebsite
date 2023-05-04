<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }

    </style>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Add New Product
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Add New Product
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.products')}}" class="btn btn-success float-end">All Products</a>
                                    </div>
                                </div>
                            </div>

                        <div class="card-body">
                                  @if (Session::has('message'))
                                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                  @endif
                            <form wire:submit.prevent="addProduct">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" name="name" class="form-controll" placeholder="Enter Produts Name" wire:model="name" wire:keyup="generateSlug"/>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="slug" class="form-label">Slug:</label>
                                    <input type="text" name="slug" class="form-controll" placeholder="Enter Produts Slug" wire:model="slug" />
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control" name="short_description" placeholder="Enter Short Description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Enter  Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="regular_price" class="form-label">Regular Price:</label>
                                    <input type="text" name="regular_price" class="form-controll" placeholder="Enter Regular Price" wire:model="regular_price" />
                                    @error('regular_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="sale_price" class="form-label">Sale Price:</label>
                                    <input type="text" name="sale_price" class="form-controll" placeholder="Enter Sale Price" wire:model="sale_price" />
                                    @error('sale_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="sku" class="form-label">SKU</label>
                                    <input type="text" name="sku" class="form-controll" placeholder="Enter SKU" wire:model="sku" />
                                    @error('sku')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="stock_status" class="form-label" wire:model="stock_status">Stock Status</label>
                                    <select class="form-control">
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                    @error('stock_status')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="featured" class="form-label">Featured</label>
                                    <select class="form-control" name="featured" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    @error('featured')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" name="quantity" class="form-controll" placeholder="Enter Products Quantity" wire:model="quantity" />
                                    @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-controll" wire:model="image" />
                                    @if ($image)
                                     <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="mb-3 mt-3">
                                    <label for="category_id" class="form-label" >Category</label>
                                    <select class="form-control" name="category_id" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end mt-5">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>


