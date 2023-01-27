<x-guest-layout>
<nav class="nav-body">
        <div class="body-container">
            <div class="company-info-container" >
            <div class="row">
  <div class="column">
    <img src="../assets/images/offers/offer1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="../assets/images/offers/offer2.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="../assets/images/offers/offer3.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
<div class="category-container-wrapper">
  <h1 style="background-color:black;color:white;padding:2px;">CATEGORIES</h2><hr>
    <x-flash/>

                <div class="category-item-container">
                  @foreach ($categories as $categories )
                  <div class="category-item"  id="category1">
                    <p class="category-name">{{ $categories->name }}</p>
                    <div class="category-row">
                      @foreach ($categories->category_menu as $menu )
                          <div class="category-column">
                            <div class="card">
                                <img src="{{ asset('/image/'.$menu->image_dir) }}"style="width:100%"/>
                              <div class="container">
                                <h2>{{ $menu->name }}</h2>
                                <p class="title">{{ $menu->description }}</p>
                                <p><a href="/cart/{{ $menu->id }}"><button class="button">order</button></a></p>
                              </div>
                            </div>
                          </div>
                      @endforeach

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div id="footer-container">
        <p>restuarant,all right reserved</p>
      </div>
    </nav>
  
<script src="{{ asset('js/jquery.js') }}"></script> 
</x-guest-layout>