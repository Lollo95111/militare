





<nav  id="navbar" class="navbar navbar-expand-lg bg-primary-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}"> <img id="logo" src="/militare.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link home" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">Store</a>
          </li>
          @auth

          @if (Auth::user()->is_admin)

          <li>

              <a class="position-relative" href="{{route('admin.dashboard')}}">Admin

                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Product::toBeRevisionedCount()}}

                  <span class="visually-hidden">Messaggi non letti</span>

                  </span>

              </a>

            @endif


          <li class="nav-item">

            <a class="nav-link mx-2" href="{{route('product.create')}}">Aggiungi Prodotti</a>

          </li>

          @endauth
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach($productCategories as $category)
                <a class="dropdown-item" href="{{route('product.bycategory',compact('category'))}}">{{$category->name}}</a>
              @endforeach
            </ul>
          </li>

          </li>
        </ul>

  @guest
  <div class="navitem1">

      <label class="hamburger" for="toggleMenu">
          <input type="checkbox" id="toggleMenu">
          <svg viewBox="0 0 32 32">
              <path class="line line-top-bottom"
                  d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
              <path class="line" d="M7 16 27 16"></path>
          </svg>
      </label>
      @if(Auth::user() == null)
        <ul class="dropdown-menu " id="loginRegisterDropdown">

            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li class="separator"></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
        </ul>
      @endif
  </div>
  @endguest

          @if(Auth::user() !== null)
            <p class="me-2 pt-2">{{ Auth::user()->name }}<p>

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="hamburger nav-item" for="toggleMenu">
              <i class="fa-solid fa-x close"></i>

            </button>
            </form>

          @endif

          <div class="ms-5">
            <form action="{{ route('products.search') }}" method='GET' class="d-flex ricerca">
              <div class="InputContainer">
                  <input placeholder="Search.." id="input" class="input" name="searched" type="search">
              </div>
            </form>
          </div>

      </div>
    </div>
  </nav>
  <br>
  <br>














<style>

#navbar {
  top: 0;
  left: 0;
  width: 100%;
  z-index: 100;
  display: flex;


}



.home{
font-weight:600;
font-size: 17px;
}

.nav-link{
  color: rgba(0, 0, 0, 0.829);
  font-weight: bold;
}

.navbar {
  background-color: rgba(59, 54, 7, 0.767);
  padding: 10px;
  display: flex;
  transition: 0.6s;
  padding-bottom: 0px;
height: 100px;
}

#logo {
  width: 60px;
  height: 70px;
 transition: max-width 0.3s ease;
 /* position: fixed; */

}
/* css button navbar */
.btn-login {

  background-color: gray;
  color: white;
  margin-left: 10px;
  text-align: center;
  position: absolute;
  right: 330px;
}

.btn-register {

  background-color: gray;
  color: white;
  margin-left: 10px;
  text-align: center;

  position: absolute;
  right: 240px;
}

.InputContainer {
  width: 210px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(to bottom,rgb(227, 213, 255),rgb(255, 231, 231));
  border-radius: 30px;
  overflow: hidden;
  cursor: pointer;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.075);
}

.input {
  width: 200px;
  height: 40px;
  border: none;
  outline: none;
  caret-color: rgb(255, 81, 0);
  background-color: rgb(255, 255, 255);
  border-radius: 30px;
  padding-left: 15px;
  letter-spacing: 0.8px;
  color: rgb(19, 19, 19);
  font-size: 13.4px;
  right: 80px;
}


.navbar-toggler{
  border-color: var(---ColorBackground);
  background-color: var(---ColorSecondary);
}

.nav-item1 {
padding: 5px;
}

/* button login */
.hamburger {
  cursor: pointer;
  background-color: transparent;
  border: none;
}

.hamburger input {
  display: none;
}

.hamburger svg {
  /* The size of the SVG defines the overall size */
  height: 3em;
  /* Define the transition for transforming the SVG */
  transition: transform 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line {
  fill: none;
  stroke: rgb(0, 109, 145);
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 3;

  transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
              stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line-top-bottom {
  stroke-dasharray: 12 63;
}

.hamburger input:checked + svg {
  transform: rotate(-45deg);
}

.hamburger input:checked + svg .line-top-bottom {
  stroke-dasharray: 20 300;
  stroke-dashoffset: -32.42;
}
/* finestra button */

.dropdown-menu {
  display: none;
  position: absolute;
  background-color:rgba(255, 255, 255, 0.457);
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.849);
  padding: 10px;
}

.dropdown-item.separator {
  border-top: 3px solid #000000;
}


#toggleMenu:checked + .dropdown-menu {
  display: block;
}

.close{
  color: rgba(9, 61, 78, 0.829);
  font-size: 30px;

}


.dropdown-item:hover{
    background-color: rgba(0, 125, 167, 0.187);
    color: white;
}


.white-color {
    color:white ;
    font-size: 20px;

}
.white-color:hover{
    color: rgba(0, 126, 167, 0.829);
    text-decoration: underline;
}
.button-custom{
    background-color: rgba(7, 21, 23, 0.9);
    border-radius: 21px;
    color: #fffff2;
    display: inline-block;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: .1em;
    line-height: 18px;
    padding: 12px 30px;
    margin: 0 10px 10px 0;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color .2s;
    cursor: pointer;
    position: relative;
  }

  .button-customAccept{
    background-color: rgba(23, 162, 42, 0.9);
    border-radius: 21px;
    color: #fffff2;
    display: inline-block;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: .1em;
    line-height: 18px;
    padding: 12px 30px;
    margin: 0 10px 10px 0;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    position: relative;
  }

  .button-customReject{
    background-color: rgba(158, 15, 15, 0.9);
    border-radius: 21px;
    color: #fffff2;
    display: inline-block;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: .1em;
    line-height: 18px;
    padding: 12px 30px;
    margin: 0 10px 10px 0;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    position: relative;
  }
</style>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const toggleMenu = document.getElementById("toggleMenu");
    const loginRegisterDropdown = document.getElementById("loginRegisterDropdown");

    toggleMenu.addEventListener("change", function () {
      if (toggleMenu.checked) {
        loginRegisterDropdown.style.display = "block";
      } else {
        loginRegisterDropdown.style.display = "none";
      }
    });
  });
</script>
