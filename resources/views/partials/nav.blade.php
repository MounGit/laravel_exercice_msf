<ul class="nav nav-pills bg-dark fs-2">
    <li class="nav-item">
        <a class="nav-link" href="/">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('indexForm')}}">Formations</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('indexType')}}">Types de formation</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('indexEle')}}">Elèves</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('indexBat')}}">Bâtiments</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Back Office</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('indexBackForm')}}">Formations</a></li>
            <li><a class="dropdown-item" href="{{route('indexBackType')}}">Types de formation</a></li>
            <li><a class="dropdown-item" href="{{route('indexBackEle')}}">Elèves</a></li>
            <li><a class="dropdown-item" href="{{route('indexBackBat')}}">Bâtiments</a></li>
        </ul>
    </li>
</ul>