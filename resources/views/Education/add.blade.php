<x-app-layout>
    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Add Education
            </x-pageTitle>

            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title"> </h2>
                    <div class="row">
                        <div class="col-md-9">

                            <form method="post" action="{{ route('education.store') }}">
                                <div class="form-group">
                                    <x-label value="Title" />
                                    <x-input type="text" name="title" value="" placeholder="Degree title" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Institute" />
                                    <x-input type="text" name="institute" placeholder="Name of your institute"
                                        value="" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Start date" />
                                    <x-input type="date" name="start_date" value="" />
                                </div>

                                <div class="form-group">
                                    <x-label value="End date" />
                                    <x-input type="date" name="end_date" value="" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Major Subject" />
                                    <textarea name="description" placeholder="major subjects covered" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <x-label value="Degree Status" />
                                    <select name="status" class="form-control">
                                        <option value="">Select one</option>
                                        <option value="completed">Completed</option>
                                        <option value="incomplete">Incompolete</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <x-label value="Obtained marks" />
                                    <x-input type="text" name="obtained_marks" value=""
                                        placeholder="percentage cgpa etc" />
                                </div>

                                <input type="submit" value="Add education" class="btn btn-primary">
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
