<div class="navbar-fixed">
    <nav class="white z-depth-1">
        <div class="nav-wrapper container">
            <a href="{{ url('/') }}"><img src="{{url('imagenes/logos/vertical.svg')}}" class="brand-logo left" alt=""></a>
            
            <a href="#" data-activates="mobile-demo" class="button-collapse right hide-on-large-only"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="{{ url('/home')}}" class="GilsansLight black-text"><small>HOME</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/proyectos')}}" class="GilsansLight black-text"><small>NUESTROS PROYECTOS</small></a>   
                </li>
                <li>
                    <a href="{{ url('/home/nosotros')}}" class="GilsansLight black-text"><small>ACERCA DE NOSOTROS</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/blog')}}" class="GilsansLight black-text"><small>BLOG</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/contacto')}}" class="GilsansLight black-text"><small>CONTACTO</small></a>
                </li>
            </ul> 

            <ul class="side-nav" id="mobile-demo">
                <li>
                    <a href="{{ url('/home')}}" class="GilsansLight black-text"><small>HOME</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/proyectos')}}" class="GilsansLight black-text"><small>NUESTROS PROYECTOS</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/nosotros')}}" class="GilsansLight black-text"><small>ACERCA DE NOSOTROS</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/blog')}}" class="GilsansLight black-text"><small>BLOG</small></a>
                </li>
                <li>
                    <a href="{{ url('/home/contacto')}}" class="GilsansLight black-text"><small>CONTACTO</small></a>
                </li>
            </ul>           
        </div>
    </nav>
</div>
