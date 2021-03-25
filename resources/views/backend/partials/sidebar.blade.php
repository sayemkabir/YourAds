<nav id="sidebar">
    <!-- Sidebar Header-->

    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li ><a href=""> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{route('category.name')}}"> <i class="icon-check"></i>Categories </a></li>
        <li><a href="#users" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Users </a>
           <ul id="users" class="collapse list-unstyled ">
        <li><a href="{{route('advertisers.name')}}">Advertisers</a></li>
        <li><a href="#">Earners</a></li>
    </ul>
        </li>
        <li><a href="#Ads" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Ads </a>
            <ul id="Ads" class="collapse list-unstyled ">
                <li><a href="#">Surf Ads</a></li>
                <li><a href="#">Window Ads</a></li>
                <li><a href="#">Video Ads</a></li>
            </ul>
        </li>
        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>

</nav>
