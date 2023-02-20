<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ====== Favicon ====== -->
    <link
      rel="shortcut icon"
      href="/img/favicon-32x32.png"
      type="image/png"
    />
    <!-- ====== Boxicons ====== -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ====== Swiper CSS ====== -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- ====== Custom CSS ====== -->
    <link rel="stylesheet" href="/css/styles.css" />
    <title>{{$title}}</title>
  </head>
  <body>
    <!-- ====== Header ====== -->
    <header class="header">
      <!-- ====== Navigation ====== -->
      <nav class="navbar">
        <div class="row container d-flex">
          <div class="logo">
            <img src="/img/logo.svg" alt="" />
          </div>

          <div class="nav-list d-flex">
            <a href="">Home</a>
            <a href="">Shop</a>
            <a href="">Pages</a>
            <a href="">About Us</a>
            <a href="">Lookups</a>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link">Login</a>
          </div>

          <div class="icons d-flex">
            <div class="icon d-flex"><i class="bx bx-search"></i></div>
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"></i>
            </div>
            <div class="icon d-flex">
              <i class="bx bx-bell"></i>
              <span></span>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div>
        </div>
      </nav>

      <!-- ====== Hero Area ====== -->
      <div class="hero">
        <div class="row container d-flex">
          <div class="col">
            <span class="subtitle">Limited Time Only For Winter</span>
            <h1>fash<span class="i">i</span>on</h1>
            <p>LOOK YOUR BEST ON YOUR BEST DAY</p>

            <button class="btn">Explore Now!</button>
          </div>
          <img src="/img/woman-in-cart.png" alt="" />
        </div>
      </div>
    </header>
    <!-- ====== Collection ====== -->
    <section class="section collection blog">
      <div class="title">
        <span>COLLECTION</span>
        <h2>Our Top Collection</h2>
      </div>
      {{-- <div class="filters d-flex">
        <div data-filter="Jewellery">Jewellery</div>
        <div data-filter="Accessories">Accessories</div>
        <div data-filter="Dresses">Dresses</div>
        <div data-filter="Footwear">Footwear</div>
      </div>

      <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
              <!-- <div class="product">
                <div class="top d-flex">
                  <img src="/img/product-1.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Nike Air Men’s Hoodie - Imported Hoodie Red</h4>
                  <div class="d-flex">
                    <div class="price">$150</div>
                    <div class="rating">
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="pagination">
          <div class="custom-pagination"></div>
        </div>
      </div> --}}
        <div class="row container">
          <div class="col">
            @forelse ($clothings as $cloth)
            <div class="top">
                {{-- @forelse ($clothings as $cloth)
                                <tr>
                                    <td>{{ $cloth->nama }}</td>
                                    <td>{{ $cloth->kelas }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/cloth/').$cloth->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $cloth->title }}</td>
                                    <td>{{ $cloth->updated_at }}</td>
                                    <td>{!! $cloth->content !!}</td>
                                    <td style="width: 100px;">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('clothing.destroy', $cloth->slug) }}" method="POST">
                                            <a href="{{ route('clothing.edit', $cloth->slug) }}" class="btn btn-sm btn-primary"><i class='bx bxs-pencil'></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash-alt'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Clothing belum Tersedia.
                                </div>
                @endforelse --}}
              <img src="{{ Storage::url('public/cloth/').$cloth->image }}"/>
            </div>
            <div class="bottom">
              <h3>{{$cloth->title}}</h3>
              <h4>
                {!! $cloth->content !!}
              </h4>
              <span>{{$cloth->harga}}</span>
            </div>
          </div>
          <div class="col">
            <div class="top">
              <img src="/img/blog-2.png" alt="" />
            </div>
            <div class="bottom">
              <h3>Trendy</h3>
              <h4>
                Lorem Ispum is a placeholder text commomly used as a free text.
              </h4>
              <span>10 January 2021</span>
            </div>
          </div>
          <div class="col">
            <div class="top">
              <img src="/img/blog-3.png" alt="" />
            </div>
            <div class="bottom">
              <h3>Trendy</h3>
              <h4>
                Lorem Ispum is a placeholder text commomly used as a free text.
              </h4>
              <span>10 January 2021</span>
            </div>
          </div>
        </div>
    </section>

    <!-- ====== New Arrival ====== -->
    <section class="section new-arrival">
      <div class="title">
        <span>NEW ARRIVAL</span>
        <h2>Latest Collection</h2>
      </div>

      <div class="row container">
        <div class="col col-1">
          <img src="/img/poster-1.png" alt="" />
          <h3>
            2021 Trends <br />
            Women’s Smart Skirt
          </h3>
        </div>
        <div class="col col-2">
          <img src="/img/poster-2.png" alt="" />
          <h3>
            2021 Trends <br />
            Women’s Smart Skirt
          </h3>
        </div>
        <div class="col col-3">
          <img src="/img/poster-3.png" alt="" />
          <h3>
            2021 Trends <br />
            Women’s Smart Shirt <br />
            <span>Discover More:</span>
          </h3>
        </div>
      </div>
    </section>

    <!-- ====== Categories ====== -->
    <section class="section categories">
      <div class="title">
        <span>CATEGORIES</span>
        <h2>2021 Latest Collection</h2>
      </div>

      <div class="products container">
        <!-- <div class="product">
          <div class="top d-flex">
            <img src="/img/product-1.png" alt="" />
            <div class="icon d-flex">
              <i class="bx bxs-heart"></i>
            </div>
          </div>
          <div class="bottom">
            <div class="d-flex">
              <h4>Nike Air Men’s Hoodie - Imported Hoodie Red</h4>
              <a href="" class="btn cart-btn">Add to Cart</a>
            </div>
            <div class="d-flex">
              <div class="price">$150</div>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="button d-flex">
        <a class="btn loadmore">Load More</a>
      </div>
    </section>

    <!-- ====== Statistics ====== -->
    <section class="section statistics">
      <div class="title">
        <span>STATS</span>
        <h2>Our Statistics</h2>
      </div>

      <div class="row container">
        <div class="col">
          <div class="icon">
            <i class="bx bxs-check-square"></i>
          </div>
          <h3>Easy Order System</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>On Time Delievery</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-dollar-circle"></i>
          </div>
          <h3>Money Back Gaurantee</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>24/7 Customer Support</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
      </div>
    </section>

    <!-- ====== Blogs ====== -->
    <section class="section blog">
      <div class="title">
        <span>BLOGS</span>
        <h2>Latest News</h2>
      </div>

      <div class="row container">
        <div class="col">
          <div class="top">
            <img src="/img/blog-1.png" alt="" />
          </div>
          <div class="bottom">
            <h3>Trendy</h3>
            <h4>
              Lorem Ispum is a placeholder text commomly used as a free text.
            </h4>
            <span>10 January 2021</span>
          </div>
        </div>
        <div class="col">
          <div class="top">
            <img src="/img/blog-2.png" alt="" />
          </div>
          <div class="bottom">
            <h3>Trendy</h3>
            <h4>
              Lorem Ispum is a placeholder text commomly used as a free text.
            </h4>
            <span>10 January 2021</span>
          </div>
        </div>
        <div class="col">
          <div class="top">
            <img src="/img/blog-3.png" alt="" />
          </div>
          <div class="bottom">
            <h3>Trendy</h3>
            <h4>
              Lorem Ispum is a placeholder text commomly used as a free text.
            </h4>
            <span>10 January 2021</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ====== Footer ====== -->
    <footer class="footer">
      <div class="row container">
        <div class="col">
          <div class="logo d-flex">
            <img src="/img/logo.svg" alt="logo" />
          </div>
          <p>
            Lorem ispum is a placeholder text <br />
            commonly used as a free text.
          </p>
          <div class="icons d-flex">
            <div class="icon d-flex">
              <i class="bx bxl-facebook"></i>
            </div>
            <div class="icon d-flex"><i class="bx bxl-twitter"></i></div>
            <div class="icon d-flex"><i class="bx bxl-instagram"></i></div>
            <div class="icon d-flex"><i class="bx bxl-youtube"></i></div>
          </div>
          <p class="color">
            Copyrights 2021 <br />
            @Iamabdulqadeer01
          </p>
        </div>
        <div class="col">
          <div>
            <h4>Product</h4>
            <a href="">Download</a>
            <a href="">Pricing</a>
            <a href="">Locations</a>
            <a href="">Server</a>
            <a href="">Countries</a>
            <a href="">Blog</a>
          </div>
          <div>
            <h4>Category</h4>
            <a href="">Men</a>
            <a href="">Women</a>
            <a href="">Kids</a>
            <a href="">Best Seller</a>
            <a href="">New Arrivals</a>
          </div>
          <div>
            <h4>My Account</h4>
            <a href="">My Account</a>
            <a href="">Discount</a>
            <a href="">Returns</a>
            <a href="">Order History</a>
            <a href="">Order Tracking</a>
          </div>
          <div>
            <h4>Contact Us</h4>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-map"></i></div>
              <span>123 Street Trafford, London, UK</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-envelope"></i></div>
              <span>info@sitename.com</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-phone"></i></div>
              <span>+456 789 789 001</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ====== Login and Signup Form ====== -->
    <div class="user-form">
      <div class="close-form d-flex"><i class="bx bx-x"></i></div>
      <div class="form-wrapper container">
        <div class="user login">
          <div class="img-box">
            <img src="/img/login.svg" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                Not a member?
                <span data-id="#ff0066">Register now</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Hello Again!</h2>
                <p>Welcome back you've been missed.</p>
                <input type="text" placeholder="Enter Username" />
                <div>
                  <input type="password" placeholder="Password" />
                  <div class="icon form-icon">
                    <!-- <img src="/img/eye.svg" alt="" /> -->
                  </div>
                </div>
                <span>Recovery Password</span>
                <input type="Submit" value="Login" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                    <img src="/img/search.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/apple.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/facebook.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/github.svg" alt="" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Register -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                Already a member?
                <span data-id="#1a1aff">Login now</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Welcome Codevo!</h2>
                <p>It's good to have you.</p>
                <input type="email" placeholder="Enter Email" />
                <div>
                  <input type="password" placeholder="Password" />
                  <div class="icon form-icon">
                    <img src="/img/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Confirm Password" />
                  <div class="icon form-icon">
                    <img src="/img/eye.svg" alt="" />
                  </div>
                </div>
                <input type="Submit" value="Register" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                    <img src="/img/search.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/apple.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/facebook.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="/img/github.svg" alt="" />
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="img-box">
            <img src="/img/trial.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ====== Custom Script ====== -->
    <script src="/js/product.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
