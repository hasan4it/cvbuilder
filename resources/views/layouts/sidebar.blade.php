 <!--sidebar controls-->
 <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
              <li class="list-group-item"><a href="index.html">
                  <i class="glyphicon glyphicon-home"></i>{{ __('Dashboard') }} </a></li>
                <li class="list-group-item">
                  <i class="glyphicon glyphicon-align-justify"></i> <b>{{ __('CV Components') }}</b></li>
                <!-- <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li> -->
                <li class="list-group-item"><a href="{{ route('education.add') }}">
                  <i class="glyphicon glyphicon-certificate"></i>{{ __('Add Education') }} </a></li>
                <li class="list-group-item"><a href="{{ route('work.add') }}">
                  <i class="glyphicon glyphicon-th-list"></i>{{ __('Add Work History') }} </a></li>
                <li class="list-group-item"><a href="{{ route('publications.add') }}">
                  <i class="glyphicon glyphicon-list-alt"></i>{{ __('Add Publication') }}</a></li>
                <li class="list-group-item"><a href="{{ route('skills.add') }}">
                  <i class="glyphicon glyphicon-bell"></i>{{ __('Add Skills') }}</li>
                <li class="list-group-item"><a href="{{ route('achievements.add') }}" >
                  <i class="glyphicon glyphicon-indent-left"></i>{{ __('Add Achievements') }}</a></li>
                <li class="list-group-item"><a href="#" >
                  <i class="glyphicon glyphicon-indent-left"></i>{{ __('Settings') }}</a></li>
              </ul>
          </div>