<x-app-layout>
    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Add Publications
            </x-pageTitle>

            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title"> </h2>
                    <div class="row">
                        <div class="col-md-9">
                            <form method="post" action="{{ route('publication.store') }}">
                                <div class="form-group">
                                    <x-label value="Publication title" />
                                    <x-input type="text" name="title" value=""
                                        placeholder="publication title" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Publication forum" />
                                    <x-input type="text" name="forum" placeholder="Publication forum" />
                                </div>

                                <div class="form-group">
                                    <x-label value="Contribution" />
                                    <textarea name="contribution" placeholder="your contribution" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <x-label value="Description" />
                                    <textarea name="description" placeholder="your description" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <x-label value="Publication Date" />
                                    <x-input type="date" name="date" value="" />
                                </div>

                                <input type="submit" value="Add Publications" class="btn btn-primary">
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
