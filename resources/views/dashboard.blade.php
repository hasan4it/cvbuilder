<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Dashboard
            </x-pageTitle>
            <!-- Introduction section -->
            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title">Introduction</h2>
                    <div class="row">
                        <div class="col-md-9">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.

                        </div>
                    </div>
                </div>
            </div>

            <!-- Work section -->
            <div class="content-row">
                <h2 class="content-row-title">Work History</h2>
                <div class="row">
                    <div class="col-md-9">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Job Title</td>
                            <td>Role</td>
                            <td>Employer</td>
                            <td>Started On</td>
                            <td>Ends On</td>
                            <td>Location</td>
                            <td>Status</td>
                            <td>Actions</td>
                          </tr>
                        </thead>
                      @forelse($user->work as $item)
                          <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->role }}</td>  
                            <td>{{ $item->employer }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->status }}</td>
                            <td><a href="#{{ $item->id }}" title="edit" >Edit </a> | <a href="#{{ $item->id }}" onclick="confirm('Are you sure to delete?'); ">Delete </a></td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="8">No record found</td>
                            </tr>
                      @endforelse
                      </table>

                    </div>
                </div>
            </div>


            <!-- Acheivements section -->
            <div class="content-row">
                <h2 class="content-row-title">Achievements</h2>
                <div class="row">
                    <div class="col-md-9">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Project Title</td>
                            <td>Field of Work</td>
                            <td>Publication forum</td>
                            <td>Contribution</td>
                            <td>Description</td>
                            <td>Actions</td>
                          </tr>
                        </thead>
                      @forelse($user->achievement as $item)
                          <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->institute }}</td>  
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->award }}</td>
                            <td><a href="#{{ $item->id }}" title="edit" >Edit </a> | <a href="#{{ $item->id }}" onclick="confirm('Are you sure to delete?'); ">Delete </a></td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="7">No record found</td>
                            </tr>
                      @endforelse
                      </table>

                    </div>
                </div>
            </div>

            <!-- Education section -->
            <div class="content-row">
                <h2 class="content-row-title">Education</h2>
                <div class="row">
                    <div class="col-md-9">
                         
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <td>Title</td>
                              <td>Institute</td>
                              <td>Started On</td>
                              <td>Ends On</td>
                              <td>Status</td>
                              <td>Marks/percentage</td>
                              <td>Actions</td>
                            </tr>
                          </thead>
                        @forelse($user->education as $item)
                            <tr>
                              <td>{{ $item->title }}</td>
                              <td>{{ $item->institute }}</td>  
                              <td>{{ $item->start_date }}</td>
                              <td>{{ $item->end_date }}</td>
                              <td>{{ $item->status }}</td>
                              <td>{{ $item->award }}</td>
                              <td><a href="#{{$item->id}}" title="edit" >Edit </a> | <a href="#{{$item->id}}" onclick="confirm('Are you sure to delete?'); ">Delete </a></td>
                            </tr>
                            @empty
                            <tr>
                              <td colspan="7">No record found</td>
                              </tr>
                        @endforelse
                        </table>
                    </div>
                </div>
            </div>

            <!-- Publications section -->
            <div class="content-row">
                <h2 class="content-row-title">Publications</h2>
                <div class="row">
                    <div class="col-md-9">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Publication Title</td>
                            <td>Publication forum</td>
                            <td>Published On</td>
                            <td>Description</td>
                            <td>Actions</td>
                          </tr>
                        </thead>
                      @forelse($user->publications as $item)
                          <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->institute }}</td>  
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td><a href="#{{$item->id}}" title="edit" >Edit </a> | <a href="#{{$item->id}}" onclick="confirm('Are you sure to delete?'); ">Delete </a></td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="7">No record found</td>
                            </tr>
                      @endforelse
                      </table>

                    </div>
                </div>
            </div>

            <!-- Skills section -->
            <div class="content-row">
                <h2 class="content-row-title">Skills</h2>
                <div class="row">
                    <div class="col-md-9">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Skill</td>
                            <td>Field</td>
                            <td>Level</td>
                            <td>Last use</td>
                            <td>Actions</td>
                          </tr>
                        </thead>
                      @forelse($user->publications as $item)
                          <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->institute }}</td>  
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td><a href="#{{$item->id}}" title="edit" >Edit </a> | <a href="#{{$item->id}}" onclick="confirm('Are you sure to delete?'); ">Delete </a></td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="7">No record found</td>
                            </tr>
                      @endforelse
                      </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>




    </div><!-- panel body -->
    </div>
    </div><!-- content -->
</x-app-layout>
