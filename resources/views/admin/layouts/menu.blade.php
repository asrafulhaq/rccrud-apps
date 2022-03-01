<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Synadmin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>All Posts</a>
                </li>
                <li> <a href="index4.html"><i class="bx bx-right-arrow-alt"></i>Add new Post</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Category</a>
                </li>
                <li> <a href="index3.html"><i class="bx bx-right-arrow-alt"></i>Tags</a>
                </li>
                
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-spa' ></i>
                </div>
                <div class="menu-title">Staff</div>
            </a>
            <ul>
                
                <li> <a href="{{ route('staff.index') }}"><i class="bx bx-right-arrow-alt"></i>All Staff</a>
                </li>
                <li> <a href="{{ route('staff.create') }}"><i class="bx bx-right-arrow-alt"></i>Add new Staff</a>
                </li>
                
            </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
                </div>
                <div class="menu-title">Widgets</div>
            </a>
        </li>



    </ul>
    <!--end navigation-->
</div>