<nav class="navbar navbar-dark navbar-expand-lg bg-mid-gray-10 fixed-top">
    <a class="navbar-brand my-1 mr-0" href="#">
        <img src="storage/images/header-logo.png" width="30%" height="30%" class="" alt="">
        <span class="gray">dairy</span>
    </a>
    <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item gray mr-2 mt-2">
            <a href="#" title="addlog" data-toggle="modal" data-target="#modal-1">
                <ion-icon name="ios-add"></ion-icon>
            </a>
        </li>
        <li class="nav-item gray mr-2 mt-2">
            <a href="/notification" title="notification">
                <ion-icon name="ios-notifications"></ion-icon>
            </a>
        </li>
        <li class="nav-item gray mr-2">
            <a href="/profile">
                <img class='br-100' src='http://placehold.it/40x40.png' title="profile">
            </a>
        </li>
    </ul>
</nav>
@include('layouts.log-modal')
