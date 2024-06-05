<!-- <style>
    .activo {
        color: red;
    }
</style>
 -->
 <nav class="navbar">
    <!--  {{dump(request()->routeIs('home'))}} -->
    <table class="'table">
        <thead>

            <th scope="col" class="{{setActivo('inicio') }}"><a class="nav-item" href="/">Inicio</a></th>
            <th scope="col" class="{{setActivo('programas') }}"><a class="nav-item" href="programas">Programas</a> </th>
            <th scope="col" class="{{setActivo('talleres') }}"><a class="nav-item" href="talleres">Talleres</a></th>
            <th scope="col" class="{{setActivo('asesoramiento') }}"><a class="nav-item"
                    href="asesoramiento">Asesoramiento</a>
            </th>
            <th scope="col" class="{{setActivo('contacto')}}"><a class="nav-item" href="contacto">Contacto</a></th>

        </thead>
    </table>
</nav>