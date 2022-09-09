<x-app-layout>
    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Add Skills
            </x-pageTitle>

            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title"> </h2>
                    <div class="row">
                        <div class="col-md-9">
                            <form method="post" action="{{ route('skill.store') }}">
                                <div class="form-group">
                                    <x-label value="Skill" />
                                    <x-input type="text" name="skill" placeholder="Name of skill" value="" />
                                </div>
                                <div class="form-group">
                                    <x-label value="Field" />
                                    <x-input name="field" placeholder="Field of skill" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Level" />
                                    <select name="level" class="form-control">
                                        <option value="">Select level</option>
                                        <option value="expert">Expert</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="entry">Entry level</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <x-label value="Last use" />
                                    <x-input type="date" name="last_use" value="" />
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
