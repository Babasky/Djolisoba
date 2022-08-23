<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="assets/img/logo.png" width="50px" height="50px" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Djoli Soba</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <button type="button" class="btn btn-primary ml-2" data-bs-toggle="modal" data-bs-target="#infirmierModal">
         Ajouter infirmier
        </button>
    </li>
    <!-- Divider -->
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
            <button type="button" class="btn btn-primary mt-2 ml-2" data-bs-toggle="modal" data-bs-target="#technicienModal">
                    Ajouter technicien
            </button>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <button type="button" class="btn btn-primary mt-2 ml-2" data-bs-toggle="modal" data-bs-target="#donneurModal">
        Ajouter donneur
        </button>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>

            <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Listes</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <a class="btn btn-light text-dark" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Deconnexion') }}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </a>
    </div>

</ul>

<!--DEBUT MODAL AJOUTER INFIRMIER-->
<div class="modal fade" id="infirmierModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter infirmier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('infirmier.create')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" required autocomplete="nom" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" required autocomplete="prenom" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="email" placeholder="Adresse email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="fonction" placeholder="fonction" id="fonction" class="form-control @error('fonction') is-invalid @enderror" value="{{old('fonction')}}" required autocomplete="fonction" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" placeholder="contact" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" value="{{old('contact')}}" required autocomplete="contact" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="password" placeholder="Mot de passe" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" required autocomplete="new-password" >
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="password" placeholder=" confirmer mot de passe" name="password_confirmation" id="password-confirm" class="form-control" required autocomplete="new-password" >
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success">{{('Enregistrer')}}</button>
                            </div>

                        </form>
                    
                    </div>
                    
            </div>
    </div>
</div>
<!--FIN MODAL AJOUTER INFIRMIER-->

<!--DEBUT MODAL AJOUTER TECHNICIEN-->
<div class="modal fade" id="technicienModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter infirmier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('technicien.create')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" required autocomplete="nom" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" required autocomplete="prenom" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="email" placeholder="Adresse email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="fonction" placeholder="fonction" id="fonction" class="form-control @error('fonction') is-invalid @enderror" value="{{old('fonction')}}" required autocomplete="fonction" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="text" placeholder="contact" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" value="{{old('contact')}}" required autocomplete="contact" autofocus>
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="password" placeholder="Mot de passe" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" required autocomplete="new-password" >
                                
                                @error('name')
                                <span class="invalid-feeback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input type="password" placeholder=" confirmer mot de passe" name="password_confirmation" id="password-confirm" class="form-control" required autocomplete="new-password" >
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success">{{('Enregistrer')}}</button>
                            </div>

                        </form>
                    
                    </div>
                    
            </div>
    </div>
</div>
<!--FIN MODAL AJOUTER TECHNICIEN-->


<!--DEBUT MODAL AJOUTER DONNEUR-->
<div class="modal fade" id="donneurModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter donneur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <input type="text" name="code" id="code" placeholder="Code du donneur" class="form-control">
                            
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control">
                                
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control">
                                
                            </div>
                            <div class="row mb-3">
                                <input type="number" placeholder="Age" name="age" id="age" class="form-control">
                                
                            </div>
                            <div class="row mb-3">
                                <label class="form-label" for="sexe">Sexe</label>
                                <select name="sexe" id="sexe" placeholder="Sexe">
                                    <option value="masculin">M</option>
                                    <option value="feminin">F</option>
                                </select>
                                
                            </div>
                            <div class="row mb-3">
                                <input type="text" placeholder="contact" name="contact" id="contact" class="form-control">
                                
                            </div>
                            <div class="row mb-3">
                                <label class="form-label" for="type">Type</label>
                                <select name="type" id="type" placeholder="Type">
                                    <option value="volontaire">Volontaire</option>
                                    <option value="compensateur">Compensateur</option>
                                </select>
                                
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success">{{('Enregistrer')}}</button>
                            </div>

                        </form>
                    
                    </div>
                    
            </div>
    </div>
</div>
<!--FIN MODAL AJOUTER DONNEUR-->
