<x-app-layout>
    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Add Work
            </x-pageTitle>

            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title"> </h2>
                    <div class="row">
                        <div class="col-md-9">
                            <form method="post" action="{{ route('work.store') }}">
                                <div class="form-group">
                                    <x-label value="Job title" />
                                    <x-input type="text" name="title" value="" placeholder="Job title" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Role" />
                                    <x-input type="text" name="role" placeholder="your role" value="" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Employer"/>
                                    <x-input type="text" name="employer" value=""  />
                                </div>

                                <div class="form-group">
                                  <x-label value="Location" />
                                  <x-input type="text" name="location" value=""  />
                                </div>

                                <div class="form-group">
                                  <x-label value="Status"/>
                                  <select name="status" class="form-control">
                                    <option value="">Select one</option>
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <x-label value="Start Date"/>
                                  <x-input type="date" name="start_date" value="" placeholder="Start Date" />
                                </div>

                                <div class="form-group">
                                    <x-label value="End date" />
                                    <x-input type="date" name="end_date" value="" placeholder="End Date" />
                                </div>

                                <input type="submit" value="Add work" class="btn btn-primary">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- panel body -->
    </div>
    </div><!-- content -->
</x-app-layout>
