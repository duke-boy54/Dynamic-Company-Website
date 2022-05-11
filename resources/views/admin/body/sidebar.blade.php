<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Admin Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Home</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                      <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('home.slider')}}">
                          <span class="nav-text">Slider</span>
                          
                        </a>
                      </li>
                   
                      <li class="active" >
                      <a class="sidenav-item-link" href=" {{ route('home.about')}}">
                          <span class="nav-text">About</span>
                         
                        </a>
                      </li>

                      <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('multi.image')}}">
                          <span class="nav-text">Portfolio</span>
                          
                        </a>
                      </li>

                      <li  class="active" >
                      <a class="sidenav-item-link" href=" {{ route('all.brand')}}">
                          <span class="nav-text">Brand</span>
                          
                        </a>
                      </li>

                      <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('all.category')}}">
                          <span class="nav-text">Category</span>
                          
                        </a>
                      </li>


                    
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Contact Page</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  <li  class="active" >
                    <a class="sidenav-item-link" href=" {{ route('contact.messages')}}">
                        <span class="nav-text">Profile</span>
                        
                      </a>
                    </li>

                  <li  class="active" >
                    <a class="sidenav-item-link" href=" {{ route('contact.messages')}}">
                        <span class="nav-text">Messages</span>
                        
                      </a>
                    </li>

                  

                </div>
              </ul>
            </li>
        
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Pages</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="user-profile.html">
                          <span class="nav-text">User Profile</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sign-in.html">Sign In</a>
                        </li>
                        
                        <li >
                          <a href="sign-up.html">Sign Up</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                      aria-expanded="false" aria-controls="others">
                      <span class="nav-text">Others</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="others">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="invoice.html">invoice</a>
                        </li>
                        
                        <li >
                          <a href="error.html">Error</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                </div>
              </ul>
            </li>
        
        </ul>

      </div>

      <hr class="separator" />

      
    </div>
  </aside>