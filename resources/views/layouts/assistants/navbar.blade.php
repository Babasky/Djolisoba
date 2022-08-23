<nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow" >
    <h3 class="text-white">Tableau de bord Assistant Social</h3>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item nav-profile ">
            <a class="nav-link" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">{{Auth::user()->nom}}               
                </span>
                                    
            </a>                  
        </li>

    </ul>

</nav>