<div class="sidebar">
    <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="assets_Admin1/images/profile/male/image_1.png" alt="profile image">
        </div>
        <div class="info-wrapper">
            <p class="user-name">Allen Clerk</p>
            <h6 class="display-income">$3,400,00</h6>
        </div>
    </div>
    <ul class="navigation-menu">
        <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">RRHH</span>
                <i class="mdi mdi-account-switch"></i>

            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
                <li>
                    <a href="{{ route('Personal.index') }}">Personal</a>
                </li>
                <li>
                    <a href="{{ route('Departamento.index') }}">Departamento</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">UI Elements</span>
                <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
                <li>
                    <a href="pages/ui-components/buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="pages/ui-components/tables.html">Tables</a>
                </li>
                <li>
                    <a href="pages/ui-components/typography.html">Typography</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
