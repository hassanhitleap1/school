<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
       <!-- Sidebar user panel -->
       <div class="user-panel">
          <div class="pull-left image">
             <img src="{{asset('AdminTheme/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
             <p>{{ \Auth::user()->name}}</p>
             <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
       </div>
       <!-- search form -->
       <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
             <input type="text" name="q" class="form-control" placeholder="Search...">
             <span class="input-group-btn">
             <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
             </button>
             </span>
          </div>
       </form>
       
       <!-- /.search form -->
       <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
          <li><a href="{{asset('/admin/categories')}}"><i class="fa fa-book"></i> <span>categories</span></a></li>
            <li><a href="{{asset('/admin/levels')}}"><i class="fa fa-book"></i> <span>levels</span></a></li>
          <li><a href="{{asset('/admin/materials')}}"><i class="fa fa-book"></i> <span>materials</span></a></li>
          <li><a href="{{asset('/admin/courses_helpers')}}"><i class="fa fa-book"></i> <span>courses helpers</span></a></li>
          <li><a href="{{asset('/admin/cover_helpers')}}"><i class="fa fa-book"></i> <span>cover helpers</span></a></li>
          <li><a href="{{asset('/admin/admins')}}"><i class="fa fa-book"></i> <span>admins</span></a></li>
          <li><a href="{{asset('/admin/teachers')}}"><i class="fa fa-book"></i> <span>teachers</span></a></li>
          <li><a href="{{asset('/admin/students')}}"><i class="fa fa-book"></i> <span>students</span></a></li>

       </ul>
    </section>
    <!-- /.sidebar -->
 </aside>