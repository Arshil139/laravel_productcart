@include('header')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product Name</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Info</th>

         
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
      
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
           
                <tr data-id="{{ $id }}">
                     <td data-th="Product">
                        <div class="row">
                          
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Info">{{ $details['info'] }}</td>
                
                 
                   
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/listproduct') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <a href="{{ url('/checkout') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Checkout</a>
            </td>
        </tr>
    </tfoot>
</table>
  

