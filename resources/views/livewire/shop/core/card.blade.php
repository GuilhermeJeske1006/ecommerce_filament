    <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
        <form wire:submit="save" class="product">
            <a href="produto/{{ $item->id }}" class="img-prod"><img class="img-fluid" src="{{ $item->foto }}" alt="Colorlib Template">
                @isset($item->porcentagem_promocao)
                <span class="status">30%</span>

                @endisset
                <div class="overlay"></div>
            </a>
            <div class="text py-3 px-3">
                <h3><a href="produto/{{ $item->id }}">{{ $item->nome }}</a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price">
                            @isset($item->promocao)
                            <span class="mr-2 price-dc">R$ {{ $item->valor }}</span>
 
                            @endisset
                            <span class="price-sale">R$ {{ $item->valor }}</span></p>
                    </div>
                    <div class="rating">
                        <p class="text-right">
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                    </div>
                </div>
                <input type="hidden" wire:model="valor">
                <input type="hidden" wire:model="nome">
                <input type="hidden" wire:model="id">
                <input type="hidden" wire:model="foto">


                <p class="bottom-area d-flex px-3">
                    <input type="submit" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></input>
                    <a type="submit" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
            </div>
        </form>
    </div>
