

<nav id="sidebar">

  <div class="sidebar-header">
    <h3>Bootstrap Slider</h3>
  </div>
  <ul class="lisst-unstyled components">

    <p>Visual Programmer</p>

    <li>
      <a href="{{ route('personal.index') }}"><span><i class="fa fa-lock" style="margin-left:-5px;"></i></span> Personal</a>
    </li>


    <li>
      <a href="#repuesto" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-home" style="margin-left:-5px;"></i></span> Repuestos</a>
      <ul class="collapse list-unstyled" id="repuesto">
        <li>
          <a href="{{ route('categoria.create') }}">Categorías</a>
        </li>
        <li>
          <a href="{{ route('marca.create') }}">Marcas</a>
        </li>
        <li>
          <a href="#">Home 2</a>
        </li>

      </ul>
    </li>

    <li>
      <a href="#"><span><i class="fa fa-info-circle" style="margin-left:-5px;"></i></span> About</a>
    </li>
    <li>
      <a href="#course" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-book" style="margin-left:-5px;"></i></span> Courses</a>
      <ul class="collapse list-unstyled" id="course">
        <li>
          <a href="#">HTML 5</a>
        </li>
        <li>
          <a href="#">CSS 3</a>
        </li>
        <li>
          <a href="#">Bootstrap 4</a>
        </li>
        <li>
          <a href="#">Javascript & Jquery</a>
        </li>
        <li>
          <a href="#">Anguler.Js</a>
        </li>


      </ul>
    </li>
    <li>
      <a href="#Career" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-graduation-cap" style="margin-left:-5px;"></i></span> Career</a>
      <ul class="collapse list-unstyled" id="Career">
        <li>
          <a href="#">Front-End Developer</a>
        </li>
        <li>
          <a href="#">Back-Hand Developer</a>
        </li>

      </ul>
    </li>

    <li>
      <a href="#"><span><i class="fa fa-phone" style="margin-left:-5px;"></i></span> Contact Us</a>
    </li>

  </ul>
</nav>