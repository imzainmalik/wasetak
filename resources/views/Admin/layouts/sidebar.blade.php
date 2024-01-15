<div class="vertical-menu">

    <div data-simplebar="init" class="h-100">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <!--- Sidemenu -->
                            <div id="sidebar-menu" class="mm-active">
                                <!-- Left Menu Start -->
                                <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                    <li class="menu-title" key="t-menu">Menu</li>

                                    <li class="mm-active">
                                        <a href="{{ route('dashboard') }}" class="waves-effect mm-active">
                                            <i class="bx bx-home-circle"></i>
                                            <span key="t-dashboards">Dashboards</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()" class="waves-effect has-arrow">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-layout"></i>
                                            <span key="t-layouts">Post</span>
                                        </a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="{{ route('admin.post.index') }}" key="t-job-list">Post</a></li>

                                            <li><a href="{{ route('admin.post.view_post_likes') }}" key="t-job-grid">Post Likes</a></li>
                                            <li><a href="{{ route('admin.post.comments') }}" key="t-job-grid">Post Comments</a></li> 
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('admin.users.index') }}" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-user"></i>
                                            <span key="t-layouts">Users</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void()" class="waves-effect has-arrow">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-layout"></i>
                                            <span key="t-layouts">Category</span>
                                        </a>

                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="{{ route('admin.category.index') }}"
                                                    key="t-job-list">Category</a></li>
                                            <li><a href="{{ route('admin.subcategory.index') }}" key="t-job-grid">Sub
                                                    Category</a></li>
                                            {{-- <li><a href="{{ route('admin.subsubcategory.index') }}" key="t-job-grid">Child Category</a></li>  --}}
                                        </ul>

                                    </li>
                                    
                                    <li>
                                        <a href="javascript:void()" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-tag"></i>
                                            <span key="t-layouts">Tags</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.flagged.post.index') }}" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-flag"></i>
                                            <span key="t-layouts">Flagged Post</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.setting.index') }}" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-cog"></i>
                                            <span key="t-layouts">Setting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.faqs.index') }}" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-cog"></i>
                                            <span key="t-layouts">FAQs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.notifications.create') }}" class="waves-effect">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-cog"></i>
                                            <span key="t-layouts">Send Notification</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()" class="waves-effect has-arrow">
                                            {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                            <i class="bx bx-layout"></i>
                                            <span key="t-layouts">Pages</span>
                                        </a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a  href="{{ route('admin.pages.index') }}" key="t-job-list">Page</a></li>

                                            <li><a href="{{ route('admin.pages.view_page_likes') }}" key="t-job-grid">Page Likes</a></li>
                                            <li><a href="{{ route('admin.page.page_comments') }}" key="t-job-grid">Page Comments</a></li> 
                                            <li><a href="{{ route('admin.page.flag_pages') }}" key="t-job-grid">Page Flagged</a></li> 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 0px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
            </div>
        </div>
    </div>
</div>
