<div>
    @livewire('components.banner-inter')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 ftco-animate">
                          <h2 class="mb-3">{{ $item->titulo }}</h2>
              <p>{{ $item->subtitulo }}</p>
              <p>
                <img src="{{ $item->imagem }}" alt="" class="img-fluid">
              </p>
              <p>{!! $item->descricao !!}</p>
              
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  @foreach ($item->categorias as $item)
                  <a href="#" class="tag-cloud-link">Life</a>

                  @endforeach

                </div>
              </div>
              
              <div class="about-author d-flex p-4 bg-light">
                <div class="bio align-self-md-center mr-4">
                  <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc align-self-md-center">
                  <h3>Lance Smith</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div>
  
  
              <div class="pt-5 mt-5">
                <h3 class="mb-5">0 Comentários</h3>
                <ul class="comment-list">
                  @isset($item->comentarios)
                  @foreach ($item->comentarios as $item)
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                  @endforeach
                  @endisset
                  
                  
  
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>
  
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>
  
                  </form>
                </div>
              </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon ion-ios-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box ftco-animate">
                  <h3 CLASS="heading">Categories</h3>
                <ul class="categories">
                  @foreach ($categoria as $item)
                  <li><a href="#">{{ $item->nome }} <span>({{ count($item->blogs) }})</span></a></li>
              @endforeach
                </ul>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 CLASS="heading">Recent Blog</h3>
                @foreach ($newBlog as $item)
                            @livewire('blog.core.mini-blog', ['item' => $item], key($item->id))
                        @endforeach
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 CLASS="heading">Tag Cloud</h3>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">shop</a>
                  <a href="#" class="tag-cloud-link">products</a>
                  <a href="#" class="tag-cloud-link">shirt</a>
                  <a href="#" class="tag-cloud-link">jeans</a>
                  <a href="#" class="tag-cloud-link">shoes</a>
                  <a href="#" class="tag-cloud-link">dress</a>
                  <a href="#" class="tag-cloud-link">coats</a>
                  <a href="#" class="tag-cloud-link">jumpsuits</a>
                </div>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 class="heading">Paragraph</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
  
          </div>
        </div>
      </section>
    </div>
