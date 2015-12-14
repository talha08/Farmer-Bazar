<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>

                      <a href="{{ URL::route('user.show') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  <li>

                      <a href="{{ URL::route('categories.index') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Category</span>
                      </a>
                  </li>


                  <li>

                      <a href="{{ URL::route('crops.index') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Crop</span>
                      </a>
                  </li>


                  <li>

                      <a href="{{ URL::route('products.index') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Product</span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>