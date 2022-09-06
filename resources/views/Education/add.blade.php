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

                            <form method="post" action="{{ route('education.save') }}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="" placeholder="Degree title"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Institute</label>
                                    <input type="text" name="institute" placeholder="Name of your institute"
                                        value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Start date</label>
                                    <input type="date" name="start_date" value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>End date</label>
                                    <input type="date" name="end_date" value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Major Subject</label>
                                    <textarea name="description" placeholder="major subjects covered" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Degree Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">Select one</option>
                                        <option value="completed">Completed</option>
                                        <option value="incomplete">Incompolete</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Obtained marks</label>
                                    <input type="text" name="obtained_marks" value=""
                                        placeholder="percentage cgpa etc" class="form-control">
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
