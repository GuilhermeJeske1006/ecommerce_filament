<div>
    @livewire('components.banner-inter')
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($item as $cart)
                            <tr wire:key="{{ $cart->id }}" class="text-center">
                                <td class="product-remove">
                                    <a wire:click='remove({{ $cart->id }})' ><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url({{ $cart->attributes->foto }});"></div></td>
                                
                                <td class="product-name">
                                    <h3>{{ $cart->name }}</h3>
                                </td>
                                
                                <td class="price">R$ {{ $cart->price }}</td>
                                
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number"
                                        value="{{ $cart->quantity }}"
                                        min="1" max="100"
                                        wire:change="updateQuantity({{ $cart->id }}, $event.target.value)">
                                                                   </div>
                              </td>
                                
                                <td class="total">R$ {{ $cart->price * $cart->quantity }}</td>
                              </tr><!-- END TR-->
                              @php $total += $cart->price * $cart->quantity ; @endphp
                              @php $subtotal += $cart->price * $cart->quantity ; @endphp

                            @endforeach
                         
                        </tr><!-- END TR-->
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>R$ {{ $subtotal }}</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>R$ 0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>R$ 0.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>R$ {{ $total }}</span>
                    </p>
                </div>
                <p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">ir para o Checkout</a></p>
            </div>
        </div>
        </div>
    </section>
</div>


