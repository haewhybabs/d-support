
@include('layouts.header')
@include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"><br>
        <div class="container">


            {{-- error message --}}
            @if (count($errors)> 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{$error}}

                    </div>
                @endforeach
            @endif

            @if(session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('message')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('error')}}
                </div>
            @endif

            {{-- pages --}}

            @yield('content')
        </div>
    </div>
@include('layouts.footer')
        <!-- /.content-wrapper -->
