<ul class="nav nav-pills bg-dark fs-2">

  <li class="nav-item">
    <a class="nav-link" href="#">Formations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Types de formation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Elèves</a>
  </li>  
  <li class="nav-item">
    <a class="nav-link" href="{{route('indexBat')}}">Bâtiments</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Back Office</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Formations</a></li>
      <li><a class="dropdown-item" href="#">Types de formation</a></li>
      <li><a class="dropdown-item" href="#">Elèves</a></li>
      <li><a class="dropdown-item" href="{{route('indexBackBat')}}">Bâtiments</a></li>
    </ul>
  </li>
</ul>