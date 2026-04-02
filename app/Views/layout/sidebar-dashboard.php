<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="/<?= session('role'); ?>" class="logo-text"><span>YSGJ</span></a>
        </div><!-- Logo Box -->
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i
                                class="fa fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (session('role') == 'admin') : ?>
                    
                    <?php endif; ?>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown">
                            <span class="user-name"><?= $akun['user_name']; ?><i class="fa fa-angle-down"></i></span>
                            <img class="img-circle avatar"
                                src="/assets/backend/images/users/<?= $akun['user_photo']; ?>" width="40" height="40"
                                alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="/<?= session('role'); ?>/setting/profile"><i
                                        class="fa fa-user"></i>My Profile</a></li>
                            <!-- inbox and comment deleted -->
                            
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="/logout"><i class="fa fa-sign-out m-r-xs"></i>Log out</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/logout" class="log-out waves-effect waves-button waves-classic">
                            <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                        </a>
                    </li>
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>
</div>
<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);">
                    <div class="sidebar-profile-image">
                        <img src="/assets/backend/images/users/<?= $akun['user_photo']; ?>"
                            class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span><?= $akun['user_name']; ?><br>
                            <small><?= $akun['user_level'] == 1 ? 'Administrator' : 'Author'; ?></small>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="<?= ($active == 'dashboard') ? 'active' : '' ?>"><a href="/<?= session('role'); ?>"
                    class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                    <p>Dashboard</p>
                </a></li>
            <li class="droplink <?= ($title === "Profile Setting") ? 'active open' : '' ?><?= ($title === "Website Setting") ? 'active open' : '' ?><?= ($title === "Home Setting") ? 'active open' : '' ?><?= ($title === "All Slider") ? 'active open' : '' ?><?= ($title === "About Setting") ? 'active open' : '' ?>"><a
                    href="/<?= session('role'); ?>/settings" class="waves-effect waves-button"><span
                        class="menu-icon icon-settings"></span>
                    <p>Settings</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= ($title === "Profile Setting") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/setting/profile">My Profile</a></li>
                    <?php if (session('role') == 'admin') : ?>
                    <li class="<?= ($title === "Website Setting") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/setting/web">Website</a></li>
                    <li class="<?= ($title === "Home Setting") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/setting/home">Home</a></li>
                    <li class="<?= ($title === "All Slider") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/slider">Slider</a></li>
                    <li class="<?= ($title === "About Setting") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/setting/about">About</a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <li class="droplink <?= ($title === "All Post") ? 'active open' : '' ?><?= ($title === "Add New Post") ? 'active open' : '' ?><?= ($title === "All Category") ? 'active open' : '' ?><?= ($title === "All Tag") ? 'active open' : '' ?>"><a href="#"
                    class="waves-effect waves-button"><span class="menu-icon icon-pin"></span>
                    <p>Post</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= ($title === "All Post") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/post">All Post</a></li>
                    <li class="<?= ($title === "Add New Post") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/post/add_new">Add New</a></li>
                    <li class="<?= ($title === "All Category") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/category">Category</a></li>
                    <li class="<?= ($title === "All Tag") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/tag">Tag</a></li>
                </ul>
            </li>
            
            <?php if (session('role') == 'admin') : ?>
            <!-- Dokumen == hide -->

            <li class="droplink <?= ($title === "Semua Laporan") ? 'active open' : '' ?><?= ($title === "Kategori Laporan") ? 'active open' : '' ?>"><a
                    href="/<?= session('role'); ?>/laporan" class="waves-effect waves-button"><span
                        class="menu-icon icon-eye"></span>
                    <p>Laporan</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">                    
                    <li class="<?= ($title === "Semua Laporan") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/laporan">Laporan</a></li>
                    <li class="<?= ($title === "Kategori Laporan") ? 'active' : '' ?>"><a href="/<?= session('role'); ?>/lapcategory">Kategori</a></li>                    
                </ul>
            </li>
            
            <?php endif; ?>

            <?php if (session('role') == 'admin') : ?>
            <li class="<?= ($active == 'subscriber') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/subscriber" class="waves-effect waves-button"><span
                        class="menu-icon icon-users"></span>
                    <p>Subscribers</p>
                </a>
            </li>
            <!-- <li class="<?= ($active == 'slider') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/slider" class="waves-effect waves-button"><span
                        class="menu-icon icon-star"></span>
                    <p>Slider</p>
                </a>
            </li> -->
            <li class="<?= ($active == 'member') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/member" class="waves-effect waves-button"><span
                        class="menu-icon icon-key"></span>
                    <p>Member</p>
                </a>
            </li>
            <li class="<?= ($active == 'testimonial') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/testimonial" class="waves-effect waves-button"><span
                        class="menu-icon icon-like"></span>
                    <p>Testimonials</p>
                </a>
            </li>
            <li class="<?= ($active == 'team') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/team" class="waves-effect waves-button"><span
                        class="menu-icon icon-users"></span>
                    <p>Teams</p>
                </a>
            </li>
            <li class="<?= ($active == 'users') ? 'active' : '' ?>">
                <a href="/<?= session('role'); ?>/users" class="waves-effect waves-button"><span
                        class="menu-icon icon-user"></span>
                    <p>Users</p>
                </a>
            </li>
            <?php endif; ?>

            <li>
                <a href="/logout" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>
    </div>
</div>