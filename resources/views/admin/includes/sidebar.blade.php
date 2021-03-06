<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">

    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{Request::is('admin')? 'active' : ''}}">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{Request::is('admin/user')? 'active'  : ''}}">
          <a class="nav-link" href="{{route('user.index')}}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>

        <li class="{{Request::is('admin/prod')? 'active'  : ''}}">
          <a class="nav-link" href="{{route('prod.index')}}">
            <i class="material-icons">person</i>
            <p>Prodect</p>
          </a>
        </li>

        <li class="{{Request::is('admin/cate')? 'active'  : ''}}">
          <a class="nav-link" href="{{route('cate.index')}}">
            <i class="material-icons">person</i>
            <p>Category</p>
          </a>
        </li>
          
        <li class="{{Request::is('home')? 'active'  : ''}}">
          <a class="nav-link" href="{{route('frontend')}}">
            <i class="material-icons">person</i>
            <p>Home</p>
          </a>
        </li>
        <li class="{{Request::is('admin/order') ? 'active' : ''}}">
          <a class="nav-link" href="{{route('order.index')}}">
            <i class="material-icons">content_paste</i>
            <p>Table List Order</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
        <!-- <li class="nav-item active-pro ">
              <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
              </a>
          </li> -->
      </ul>
    </div>
  </div>