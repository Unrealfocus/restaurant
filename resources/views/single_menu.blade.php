<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Menu') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="add-menu">
  <form action="/storemenu" enctype="multipart/form-data" method="post">
    @csrf
    @if ($errors->any())
    <div>
        something wne wrong
    </div>
      <ul>
          @foreach ($errors->all() as $error )
              <li>
                  {{ $error }}
              </li>
          @endforeach
      </ul>
    @endif
    <label for="Food-name">Food Name</label>
    <input type="text" id="Food-name" name="name" value="<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Menu') }}
            </h2>
        </x-slot>
    <div class="container">
        <div class="add-menu">
      <form action="/storemenu" enctype="multipart/form-data" method="post">
        @csrf
        @if ($errors->any())
        <div>
            something wne wrong
        </div>
          <ul>
              @foreach ($errors->all() as $error )
                  <li>
                      {{ $error }}
                  </li>
              @endforeach
          </ul>
        @endif
        <label for="Food-name">Food Name</label>
        <input type="text" id="Food-name" name="name" value="<x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Manage Menu') }}
                </h2>
            </x-slot>
        <div class="container">
            <div class="add-menu">
          <form action="/storemenu" enctype="multipart/form-data" method="post">
            @csrf
            @if ($errors->any())
            <div>
                something wne wrong
            </div>
              <ul>
                  @foreach ($errors->all() as $error )
                      <li>
                          {{ $error }}
                      </li>
                  @endforeach
              </ul>
            @endif
            <label for="Food-name">Food Name</label>
            <input type="text" id="Food-name" name="name" placeholder="Your name..">
        
            <label for="country">Category</label>
            <select id="category" name="category">
               
                <option value="{{ $data->id }}">{{ $data->name }}</option>
             
             
            </select>
        
            <label for="price">Price</label>
            <input type="number" id="Price" name="price" placeholder="Your last name..">
        
          
        
            <label for="food-descript">Food Description</label>
            <textarea id="food-descript" name="descript" placeholder="Write something.." style="height:50px"></textarea>
            <label for="image">upload food image</label>
            <input type="file" id="food-image" name="image">
             <input type="hidden" name="add_menu" value="add_menu">
            <input type="submit" value="Submit">
          </form>
        </div>
        </div>
        </x-app-layout>">
    
        <label for="country">Category</label>
        <select id="category" name="category">
           
            <option value="{{ $data->id }}">{{ $data->name }}</option>
         
         
        </select>
    
        <label for="price">Price</label>
        <input type="number" id="Price" name="price" placeholder="Your last name..">
    
      
    
        <label for="food-descript">Food Description</label>
        <textarea id="food-descript" name="descript" placeholder="Write something.." style="height:50px"></textarea>
        <label for="image">upload food image</label>
        <input type="file" id="food-image" name="image">
         <input type="hidden" name="add_menu" value="add_menu">
        <input type="submit" value="Submit">
      </form>
    </div>
    </div>
    </x-app-layout>">

    <label for="country">Category</label>
    <select id="category" name="category">
       
        <option value="{{ $data->id }}">{{ $data->name }}</option>
     
     
    </select>

    <label for="price">Price</label>
    <input type="number" id="Price" name="price" value="{{ $data->price }}">

  

    <label for="food-descript">Food Description</label>
    <textarea id="food-descript" name="descript" value="{{ $data->description }}" style="height:50px"></textarea>
    <label for="image">upload food image</label>
    <img src="{{ $data->image_dir }}" alt="menu image">
    <input type="file" id="food-image" name="image">
     <input type="hidden" name="add_menu" value="add_menu">
    <input type="submit" value="Save">
  </form>
</div>
</div>
</x-app-layout>