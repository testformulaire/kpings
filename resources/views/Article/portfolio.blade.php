@extends("FaceWeb")

@section('titre',"MonSite - Blog" )

@section("contenue")

    @include("PageWeb.PartieWeb.Navbar")
    <main>
        <div class="container portfolio">
            <form action="" method="post">
                @csrf
                <div class="input">
                    <input type="email" name="" id="">
                </div>
                <div class="input">
                    <input type="password" name="" id="">
                </div>
                <button type="submit" type="btn btn-primary">Authentification</button>
            </form>     
        </div>    
    </main> 
    {{-- @include("PageWeb.PartieWeb.Footer") --}}
    

@endsection