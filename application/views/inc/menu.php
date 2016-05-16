<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">

            <?php if($this->ion_auth->logged_in()):?>
                <?php if($this->ion_auth->is_admin()):?>
                    <li><a href="<?=base_url('auth/index')?>">Users</a></li>
                    <li><a href="<?=base_url('auth/groups')?>">Groups</a></li>
                <?php else:?>

                <?php endif;?>
                <li><a href="<?=base_url('auth/logout')?>">Log Out</a></li>
            <?php else:?>
            <li><a href="<?=base_url('auth/login')?>">Log In</a></li>
            <li><a href="<?=base_url('auth/signup')?>">Sign Up</a></li>
            <?php endif;?>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="<?=base_url('auth/login')?>">Log In</a></li>
            <li><a href="<?=base_url('auth/signup')?>">Sign Up</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>