<div>
    @livewire('components.banner-inter')
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
		    			@foreach ($prod as $item)
                            @livewire('shop.core.card', ['item' => $item])
                        @endforeach
		    		</div>
		    		<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
                        {{ $prod->links() }}
		              {{-- <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul> --}}
		            </div>
		          </div>
		        </div>
		    	</div>

		    	<div class="col-md-4 col-lg-2 sidebar">
					@foreach ($categorias as $cat)

					<div class="sidebar-box-2">
		    			<h2 class="heading mb-4"><a href="#">{{ $cat->categoria }}</a></h2>
		    			<ul>
							@foreach ($cat->subcategorias as $item)
							<li><a href="#">{{ $item->nome }}</a></li>

							@endforeach
		    			</ul>
		    		</div>
					@endforeach
		    		
    			</div>
    		</div>
    	</div>
    </section></div>
