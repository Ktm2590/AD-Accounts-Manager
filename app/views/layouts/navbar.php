<?php

use App\App\App;
use App\Models\Database\AppDatabase;

?>

<nav class="shadow navbar fixed-top navbar-expand-md bg-primary navbar-dark text-center py-1 w-100"
     style="z-index:100;left:0;min-height:68px">
    <div>


        <div class="collapse navbar-collapse" id="navbarBrandText">
            <!-- Brand -->
            <a class="navbar-brand p-0" href="/">

                <img style="max-height:50px"
                     src="/img/logo/512x512.png"/>
                <?= AppDatabase::getAppName(); ?>
            </a>
        </div>

        <div data-toggle="collapse" data-target="#collapseAbbreviation">

        </div>
        <div class="">

            <!-- Brand -->
            <a class="navbar-brand d-md-none" href="/">
                <img style="max-height:50px"
                     src="/img/logo/512x512.png"/>
                <?php echo AppDatabase::getAppAbbreviation(); ?>
            </a>
        </div>
    </div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">


        <ul class="navbar-nav">

            <?php
            //var_dump($this);
            if (isset($this->items) and $this->items != null) {
                foreach ($this->items as $topItem) {
                    if ($topItem->targetURL == null) {
                        ?>

                        <li class="nav-item text-left dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo $topItem->targetURL; ?>"
                               id="navbardrop" data-toggle="dropdown">
                                <?php echo $topItem->displayText; ?>
                            </a>
                            <div class="shadow text-center dropdown-menu">


                                <?php
                                foreach ($topItem->subItems as $subItem) {
                                    ?>
                                    <a class="dropdown-item"
                                       href="<?php echo $subItem->targetURL; ?>"><?php echo $subItem->displayText; ?></a>

                                    <?php
                                }
                                ?>

                            </div>
                        </li>


                        <?php
                    } else {
                        ?>

                        <li class="nav-item text-left">
                            <a class="nav-link" href="<?php echo $topItem->targetURL; ?>">
                                <?php echo $topItem->displayText; ?>
                            </a>

                        </li>


                        <?php
                    }
                }
            }
            ?>
        </ul>
        <?php
        //var_dump($this->user);
        if ($this->user->authenticated) {
            ?>
            <div class="d-md-flex text-center flex-md-row-reverse w-100">
                <?php if ($this->user->superAdmin) {
                    ?>
                    <ul class="order-md-1 navbar-nav">
                        <!-- Settings Dropdown -->
                        <li class="nav-item text-left dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-tools d-none d-md-inline"></i>
                                <p class="d-inline d-md-none">Settings</p>
                            </a>
                            <div class="shadow dropdown-menu text-center dropdown-menu-right">


                                <a class="dropdown-item" href="/settings/application">Settings</a>
                                <a class="dropdown-item" href="/settings/domain/edit">Setup</a>
                                <a class="dropdown-item" href="/settings/audit">Audit</a>


                            </div>
                        </li>
                    </ul>
                    <?php
                }
                ?>
                <ul class="order-md-0 navbar-nav">
                    <!-- User Dropdown -->
                    <li class="nav-item  text-left dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-user-circle d-none d-md-inline"></i>
                            <p class="d-inline d-md-none">User</p>

                        </a>
                        <div class="shadow dropdown-menu text-center dropdown-menu-right pt-0">
                            <div class="dropdown-header"><strong> <?php echo $this->user->username; ?></strong></div>

                            <a class="dropdown-item" href="/settings/profile">Profile</a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                               data-target="#aboutAppModal">About</a>
                            <a class="dropdown-item" href="/docs/index.html">Help</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
        }
        ?>

    </div>
</nav>
<?php
$debugMode = App::inDebugMode();
if ($this->user->superAdmin && $debugMode) {
    echo $this->view('modals/debugConfigModal');


}
echo $this->view('modals/aboutAppModal');

?>







