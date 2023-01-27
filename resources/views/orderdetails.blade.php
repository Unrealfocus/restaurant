<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('OrderDetails') }}
        </h2>
    </x-slot>
<div class="orderdetails-container">
<div class="orderlist-top">
<a class="orderid">ORDER ID: <span>0001</span></a>
<a class="orderbutton"><button class="orderlist-button">ON DELIVERY</button></a>
</div>
<div class="orderlist-detail-container">
    <div class="order-row">
    <div class="personnel-details">
     <div class="location">
          <h3>Location</h3>
          <p>{{ $data->location }}</p>
     </div>
     <div class="order-note">
        <h3>Email</h3>
        <p>{{ $data->email }}</p>
        <h3>Phone number</h3>
        <p>{{ $data->phone_number }}</p>
         <h3>
             order note
         </h3>
         <p>
            {{ $data->order_note }}
         </p>
     </div>
    </div>
    </div>
    <div class="order-row">
                    <table class="orderdetails">
                        <tr>
                            <th>product</th>
                            <th>qty</th>
                            <th>price</th>
                            <th>total price</th>
                        </tr>
                        <tr>
                            @foreach ($data->order as $product )
                            <td><p class="product"><img src="../../assets/images/offers/offer2.jpg" alt="Forest" style="float:left;">
                            </p><span class="product-name">{{ $product->id }}</span><br><span class="product-descript">product description contains the product description</span></td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>40,000</td>
                                                    </tr>    
                            @endforeach
                    </table>
</div>
</div>
</x-app-layout>