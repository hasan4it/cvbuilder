<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
            <x-pageTitle>
                Settings
            </x-pageTitle>
            <!-- Introduction section -->
            <div class="panel-body">
                <div class="content-row">
                    <h2 class="content-row-title">Introduction</h2>
                    <div class="row">
                        <div class="col-md-9">
                          <form method="post" action="{{ route('skill.store') }}">
                            <div class="form-group">
                                <x-label value="Introduction" />
                                <textarea name="intro" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <x-label value="CV title" />
                                <x-input name="title" placeholder="cv title" />
                            </div>

                            <div class="form-group">
                                <x-label value="Availability" />
                                <select name="availability" class="form-control">
                                    <option value="">Select level</option>
                                    <option value="open_to_work">Open to work</option>
                                    <option value="immediately">Avaialble immediately</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <x-label value="Linkedin Profile" />
                                <x-input type="text" name="linkedin" placeholder="Linkedin profile" />
                            </div>
                            
                            <div class="form-group">
                                <x-label value="Github Profile" />
                                <x-input type="text" name="github" placeholder="Github profile" />
                            </div>
                            <input type="submit" value="Save settings" class="btn btn-primary">
                            @csrf
                        </form>

                        </div>
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
