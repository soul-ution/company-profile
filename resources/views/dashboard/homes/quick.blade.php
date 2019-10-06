@extends ('dashboard.template')

{{-- APP NAME AND LOCATION --}}
@section ('app_name', $app_name)
@section ('location_name', "HOME")

@section ('main_content')

    {{-- TILE COUNT --}}
    @component ('components.tile_count')
        @component ('components.tile_item_count')
            @slot ('tile_item_size')
                col-md-3 col-sm-4 col-xs-6
            @endslot
            @slot ('tile_item_top')
                <span class="fa fa-users"></span> Total users
            @endslot
            @slot ('tile_item_count')
                300
            @endslot
            @slot ('tile_item_bottom')
            @endslot
        @endcomponent
        @component ('components.tile_item_count')
            @slot ('tile_item_size')
                col-md-3 col-sm-4 col-xs-6
            @endslot
            @slot ('tile_item_top')
                <span class="fa fa-file"></span> Total pages
            @endslot
            @slot ('tile_item_count')
                300
            @endslot
            @slot ('tile_item_bottom')
            @endslot
        @endcomponent
        @component ('components.tile_item_count')
            @slot ('tile_item_size')
                col-md-3 col-sm-4 col-xs-6
            @endslot
            @slot ('tile_item_top')
                <span class="fa fa-bookmark"></span> Total widgets
            @endslot
            @slot ('tile_item_count')
                300
            @endslot
            @slot ('tile_item_bottom')
            @endslot
        @endcomponent
        @component ('components.tile_item_count')
            @slot ('tile_item_size')
                col-md-3 col-sm-4 col-xs-6
            @endslot
            @slot ('tile_item_top')
                <span class="fa fa-envelope"></span> Total subscribes
            @endslot
            @slot ('tile_item_count')
                300
            @endslot
            @slot ('tile_item_bottom')
            @endslot
        @endcomponent
    @endcomponent

    <div class="row">
        {{-- LAST ENVELOPE --}}
        <div class="col-md-6 col-sm-12 col-sx-12">
            @component ('components.panel')
                @slot ('panel_title')
                    <span class="fa fa-envelope"></span> Last Subscribe
                @endslot
                @slot ('panel_toolbox')
                @endslot
                @slot ('panel_content')
                    <div class="dashboard-widget-content">
                        <ul class="list-unstyled timeline widget">
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                        </h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endslot
            @endcomponent
        </div>

        {{-- QUICK CREATE POST --}}
        <div class="col-md-6 col-sm-12 col-sx-12">
            @component ('components.panel')
                @slot ('panel_title')
                    <span class="fa fa-pages"></span> Create Quick Pages
                @endslot
                @slot ('panel_toolbox')
                @endslot
                @slot ('panel_content')

                    {{-- FORMS --}}
                    @component ('components.form')
                        @slot ('form_style')
                            form-horizontal form-label-left
                        @endslot
                        @slot ('form_extras')
                            action="" method="POST"
                        @endslot
                        @slot ('form_content')

                            {{-- INPUT TITLE --}}
                            @component ('components.input')
                                @slot ('input_id')
                                    quick-pages-title
                                @endslot
                                @slot ('input_name')
                                    quick-pages-title
                                @endslot
                                @slot ('input_label')
                                @endslot
                                @slot ('input_type')
                                    text
                                @endslot
                                @slot ('input_hint')
                                    Masukkan judul
                                @endslot
                            @endcomponent

                            {{-- TEXT AREA --}}
                            @component ('components.textarea')
                                @slot ('textarea_id')
                                    quick-pages-content
                                @endslot
                                @slot ('textarea_name')
                                    quick-pages-content
                                @endslot
                            @endcomponent

                            {{-- BUTTON --}}
                            @component ('components.button')
                                @slot ('button_type')
                                    submit
                                @endslot
                                @slot ('button_style')
                                    btn-primary
                                @endslot
                                @slot ('button_label')
                                    Simpan
                                @endslot
                            @endcomponent
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection

@section ('custom_js')
<script src="<?php echo asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/jquery.hotkeys/jquery.hotkeys.js'); ?>"></script>
<script src="<?php echo asset('vendors/google-code-prettify/src/prettify.js'); ?>"></script>
<script src="<?php echo asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js'); ?>"></script>
<script src="<?php echo asset('vendors/switchery/dist/switchery.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/parsleyjs/dist/parsley.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/autosize/dist/autosize.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js'); ?>"></script>
<script src="<?php echo asset('vendors/starrr/dist/starrr.js'); ?>"></script>
@endsection