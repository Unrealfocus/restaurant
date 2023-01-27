<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orderlist') }}
        </h2>
    </x-slot>
<div class="table-container">
   <div class="search" > <input type="search" placeholder="search"></div>
   <table>
       <tr>
           <th>Order Id</th>
           <th>Order Time</th>
           <th>Customer</th>
           <th>Location</th>
           <th>Amount</th>
           <th>Order Status</th>
           <th></th>
       </tr>
       @php
           $n=1;
       @endphp
       @foreach ($data as $data)
       <tr>
        <td>{{ $n++ }}</td>
        <td>{{ $data->created_at }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->location }}</td>
        <td>$20</td>
        <td><button>on delivery</button></td>
        <td><a href="/orderdetails">...</a></td>
        <td></td>
    </tr>
       @endforeach
      
     
   </table>
</div>
</x-app-layout>