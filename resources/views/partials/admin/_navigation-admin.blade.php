
<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow">
        <section class="sidebar">
            <div class="w-80px mt-3 mb-3 ml-3">
{{--                <img src="{{ asset('images/escalier/logo-escalier-header.png') }}" alt="">--}}
            </div>
            <div class="relative">
                <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                   aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                </a>
                <div class="user-panel p-3 light mb-2">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="{{ asset('img/dummy/u2.png') }}" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">Administrator</h6>
                            <a href="#"><i class="fa fa-user-circle"></i> Online</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
{{--                    <div class="collapse multi-collapse" id="userSettingsCollapse">--}}
{{--                        <div class="list-group mt-3 shadow">--}}
{{--                            <a href="#" class="list-group-item list-group-item-action ">--}}
{{--                                <i class="mr-2 icon-umbrella text-blue"></i>Profile--}}
{{--                            </a>--}}
{{--                            <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                <i class="mr-2 icon-cogs text-yellow"></i>Settings--}}
{{--                            </a>--}}
{{--                            <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                <i class="mr-2 icon-security text-purple"></i>Change Password--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{ route('admin.portofolio.index') }}">
                        <i class="fa fa-file-text"></i>&nbsp;&nbsp;&nbsp;Portofolio
                    </a>
                </li>
            </ul>
        </section>
    </aside>
</div>
