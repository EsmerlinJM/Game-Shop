<div class="table-responsive">
        <table class="table">
            <tbody>
                @if(Session::has('cart'))
                
                <tr>
                    <td>Subtotal de la Orden</td>
                    <th>${{ $totalPrice }}</th>
                </tr>
                <tr>
                    <td>Envio</td>
                    <th>$10.00</th>
                </tr>
                <tr>
                    <td>Impuesto</td>
                    <th>$0.00</th>
                </tr>
                <tr class="total">
                    <td>Total</td>
                    <th>${{ $totalPrice +=10  }}</th>
                </tr>
                @else
                <p class="text-muted">No hay productos en el carrito</p>
                @endif
            </tbody>
        </table>
    </div>