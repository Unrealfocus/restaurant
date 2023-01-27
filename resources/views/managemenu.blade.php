<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Menu') }}
        </h2>
    </x-slot>
<div class="orderdetails-container">
<div class="orderlist-detail-container">
<div class="search" > <input type="search" placeholder="search"></div>
                    <table >
                        <tr>
                            <th>product</th>
                            <th>price</th>
                            <th>create date</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ( $data as $data)
                        <tr>
                            <td><p class="product"><img src="../../assets/images/offers/offer2.jpg" alt="Forest" style="float:left;">
</p><span class="product-name">{{ $data->name }}</span><br><span class="product-descript">product description contains the product description</span></td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td> <a href="/single_menu/{{ $data->id }}"><button>view details</button></td></a> 
                            <td><form action="/remove" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="submit" value="delete" class="bg-red-500 ">
                            </form></td>
                        </tr>
                        @endforeach
                       
                    </table>
</div>
</div>
</x-app-layout>