<!--  Admin Panel -->

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
          <h6>Sablon.in Admin Panel</h6>
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
  
            </ul>
  
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="">Logout</a>
                      </li>
  
                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
  
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
  
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest --}}
            </ul>
        </div>
    </div>
  </nav>
  
  <hr>
  
  <!-- Halaman Awal Admin Panel-->
  <div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Portofolio Terbaru</div>
  
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col" width="60">#</th>
                            <th scope="col" width="60">Kategori</th>
                            <th scope="col" width="200">Gambar</th>
                        </tr>
                        </thead>
  
                        <tbody>
                        {{-- @foreach($categories as $category) --}}
                            <tr>
                              <td>1</td>
                              <td>Sablon</td>
                              <td><img src={{ asset('website/img/home-sablon.png') }} alt="sablon" style="width:300px;"></td>  
                              {{-- <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->user->name }}</td> --}}
                            </tr>
                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
  
            <div class="card mt-4">
                <div class="card-header">Postingan Blog Terbaru</div>
  
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col" width="60">#</th>
                            <th scope="col" width="60">Title</th>
                            <th scope="col" width="200">Created By</th>
                        </tr>
                        </thead>
  
                        <tbody>
                        {{-- @foreach($posts as $post) --}}
                            <tr>
                              <td>1</td>  
                              <td>Cara mencuci Baju</td>
                              <td>Arya Pramuja</td>
                              {{-- <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td> --}}
                            </tr>
                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
  
            {{-- <div class="card mt-4">
                <div class="card-header">Latest Page</div>
  
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col" width="60">#</th>
                            <th scope="col" width="60">Title</th>
                            <th scope="col" width="200">Created By</th>
                        </tr>
                        </thead>
  
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                              <td>id</td>
                              <td>title</td>
                              <td>name</td>  
                              <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->user->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
  </div>
  
  <!-- Portofolio Admin -->
  
  <div class="container">
    <div class="row">
        {{-- <div class="col">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('message') }}
                </div>
            @endif
  
            @if(Session::has('delete-message'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('delete-message') }}
                </div>
            @endif
        </div> --}}
    </div>
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Portofolio
                    <a href="" class="btn btn-sm btn-primary float-right">Add
                        New</a>
                    {{-- <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary float-right">Add
                        New</a> --}}
                </div>
  
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col" width="60">#</th>
                            <th scope="col">Url</th>
                            <th scope="col" width="200">Kategori</th>
                            <th scope="col" width="129">Action</th>
                        </tr>
                        </thead>
  
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td></td>
                            <td>Sablon</td>
                            <td>
                                <a href="#"
                                   class="btn btn-sm btn-primary">Edit</a>
                                {{-- {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!} --}}
                            </td>
                          </tr>
  
                        {{-- @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>{{ asset('storage/galleries/' . $gallery->image_url) }}</td>
                                <td>{{ $gallery->user->name }}</td>
                                <td>
                                    <a href="{{ route('galleries.edit', $gallery->id) }}"
                                       class="btn btn-sm btn-primary">Edit</a>
                                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Blog Admin -->
  
  <div class="container">
    <div class="row">
        <div class="col">
            {{-- @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('message') }}
                </div>
            @endif
  
            @if(Session::has('delete-message'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('delete-message') }}
                </div>
            @endif --}}
        </div>
    </div>
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Postingan Blog
                    <a href="" class="btn btn-sm btn-primary float-right">Add
                        New</a>
                    {{-- <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Add
                        New</a> --}}
                </div>
  
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col" width="60">#</th>
                            <th scope="col">Title</th>
                            <th scope="col" width="200">Created By</th>
                            <th scope="col" width="129">Action</th>
                        </tr>
                        </thead>
  
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Cara Mencuci Baju</td>
                            <td>Arya Pramuja</td>
                            <td>
                                <a href="#"
                                   class="btn btn-sm btn-primary">Edit</a>
                                
                            </td>
                        </tr>
  
                        {{-- @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                       class="btn btn-sm btn-primary">Edit</a>
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>