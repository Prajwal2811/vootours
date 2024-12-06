
@if(Auth::user()->role === "superadmin")
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
        VT
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Voo - Tours
      </a></div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="photo">
          <img src="{{ Auth::user()->profile_pic }}" />
        </div>
        <div class="user-info">
          <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
              {{ Auth::user()->name }}
              <b class="caret"></b>
            </span>
          </a>
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> My Profile </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">home</i>
                <p> Dashboard </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.role') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.role') }}">
                <i class="material-icons">security</i>
                <p> Admin Role </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.admins') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.admins') }}">
                <i class="material-icons">person</i>
                <p> Admin </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples" 
               aria-expanded="{{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'true' : 'false' }}">
                <i class="material-icons">group</i>
                <p> Agents
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse {{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'show' : '' }}" id="formsExamples">
                <ul class="nav">
                    <li class="nav-item {{ Request::routeIs('admin.agents') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.agents') }}">
                            <span class="sidebar-mini"> A </span>
                            <span class="sidebar-normal"> Agents </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('admin.sub-agents') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.sub-agents') }}">
                            <span class="sidebar-mini"> SA </span>
                            <span class="sidebar-normal"> Sub-Agents </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.agencies') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.agencies') }}">
                <i class="material-icons">business</i>
                <p> Agencies </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.packages') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.packages') }}">
                <i class="material-icons">local_offer</i>
                <p> Packages/Product </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.transportation') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.transportation') }}">
                <i class="material-icons">directions_car</i>
                <p> Transportation </p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="material-icons">account_balance_wallet</i> <!-- Updated Wallet Icon -->
                <p> Wallet </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="material-icons">bar_chart</i> <!-- Updated Report Icon -->
                <p> Report </p>
            </a>
        </li>
      
    
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.adminSignOut') }}">
                <i class="material-icons">exit_to_app</i>
                <p> Sign Out </p>
            </a>
        </li>
    </ul>
    
    
    </div>
    <div class="sidebar-background"></div>
  </div>

@elseif(Auth::user()->role === "admin")
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
        VT
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Voo - Tours
      </a></div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="photo">
          <img src="{{ Auth::user()->profile_pic }}" />
        </div>
        <div class="user-info">
          <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
              {{ Auth::user()->name }}
              <b class="caret"></b>
            </span>
          </a>
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> My Profile </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">home</i>
                <p> Dashboard </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples" 
              aria-expanded="{{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'true' : 'false' }}">
                <i class="material-icons">group</i>
                <p> Agents
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse {{ Request::routeIs('admin.agents', 'admin.sub-agents') ? 'show' : '' }}" id="formsExamples">
                <ul class="nav">
                    <li class="nav-item {{ Request::routeIs('admin.agents') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.agents') }}">
                            <span class="sidebar-mini"> A </span>
                            <span class="sidebar-normal"> Agents </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('admin.sub-agents') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.sub-agents') }}">
                            <span class="sidebar-mini"> SA </span>
                            <span class="sidebar-normal"> Sub-Agents </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.agencies') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.agencies') }}">
                <i class="material-icons">business</i>
                <p> Agencies </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.packages') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.packages') }}">
                <i class="material-icons">local_offer</i>
                <p> Packages/Product </p>
            </a>
        </li>
    
        <li class="nav-item {{ Request::routeIs('admin.transportation') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.transportation') }}">
                <i class="material-icons">directions_car</i>
                <p> Transportation </p>
            </a>
        </li>


        <li class="nav-item {{ Request::routeIs('admin.pricingslabs') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.pricingslabs') }}">
                <i class="material-icons">attach_money</i>
                <p> Pricing Slabs </p>
            </a>
        </li>


        <li class="nav-item {{ Request::routeIs('admin.bookings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.bookings') }}">
                <i class="material-icons">calendar_today</i>
                <p> My Bookings </p>
            </a>
        </li>

        
      
      
    
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.adminSignOut') }}">
                <i class="material-icons">exit_to_app</i>
                <p> Sign Out </p>
            </a>
        </li>
    </ul>
    
    
    </div>
    <div class="sidebar-background"></div>
  </div>

@endif