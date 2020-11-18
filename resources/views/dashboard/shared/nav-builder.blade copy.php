<?php
/*
    $data = $menuel['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';    
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . url($data[$i]['href']) . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>

      <!-- <div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
        <ul class="c-sidebar-nav">
        @if(isset($appMenus['sidebar menu']))
            @foreach($appMenus['sidebar menu'] as $menuel)
                @if($menuel['slug'] === 'link')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ url($menuel['href']) }}">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif 
                        {{ $menuel['name'] }}
                        </a>
                    </li>
                @elseif($menuel['slug'] === 'dropdown')
                    <?php renderDropdown($menuel) ?>
                @elseif($menuel['slug'] === 'title')
                    <li class="c-sidebar-nav-title">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif 
                        {{ $menuel['name'] }}
                    </li>
                @endif
            @endforeach
        @endif
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div> -->

    <div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
        <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/">
            <i class="cil-speedometer c-sidebar-nav-icon"></i>
            Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-calculator c-sidebar-nav-icon"></i>Settings</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/notes"><span class="c-sidebar-nav-icon"></span>Notes</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/users"><span class="c-sidebar-nav-icon"></span>Users</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/menu/menu"><span class="c-sidebar-nav-icon"></span>Edit menu</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/roles"><span class="c-sidebar-nav-icon"></span>Edit roles</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/media"><span class="c-sidebar-nav-icon"></span>Media</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/bread"><span class="c-sidebar-nav-icon"></span>BREAD</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/mail"><span class="c-sidebar-nav-icon"></span>Email</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/languages"><span class="c-sidebar-nav-icon"></span>Manage Languages</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-title">
            Theme
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/colors">
            <i class="cil-drop1 c-sidebar-nav-icon"></i>
            Colors
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/typography">
            <i class="cil-pencil c-sidebar-nav-icon"></i>
            Typography
            </a>
        </li>
        <li class="c-sidebar-nav-title">
            Components
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-puzzle c-sidebar-nav-icon"></i>Base1</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/breadcrumb"><span class="c-sidebar-nav-icon"></span>Breadcrumb</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/cards"><span class="c-sidebar-nav-icon"></span>Cards</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/carousel"><span class="c-sidebar-nav-icon"></span>Carousel</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/collapse"><span class="c-sidebar-nav-icon"></span>Collapse</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/jumbotron"><span class="c-sidebar-nav-icon"></span>Jumbotron</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/list-group"><span class="c-sidebar-nav-icon"></span>List group</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/navs"><span class="c-sidebar-nav-icon"></span>Navs</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/pagination"><span class="c-sidebar-nav-icon"></span>Pagination</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/popovers"><span class="c-sidebar-nav-icon"></span>Popovers</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/progress"><span class="c-sidebar-nav-icon"></span>Progress</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/scrollspy"><span class="c-sidebar-nav-icon"></span>Scrollspy</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/switches"><span class="c-sidebar-nav-icon"></span>Switches</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/tabs"><span class="c-sidebar-nav-icon"></span>Tabs</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/base/tooltips"><span class="c-sidebar-nav-icon"></span>Tooltips</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-cursor c-sidebar-nav-icon"></i>Buttons</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/buttons/buttons"><span class="c-sidebar-nav-icon"></span>Buttons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/buttons/brand-buttons"><span class="c-sidebar-nav-icon"></span>Brand Buttons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/buttons/button-group"><span class="c-sidebar-nav-icon"></span>Buttons Group</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/buttons/dropdowns"><span class="c-sidebar-nav-icon"></span>Dropdowns</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/buttons/loading-buttons"><span class="c-sidebar-nav-icon"></span>Loading Buttons</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/charts">
            <i class="cil-chart-pie c-sidebar-nav-icon"></i>
            Charts
            </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-code c-sidebar-nav-icon"></i>Editors</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/editors/code-editor"><span class="c-sidebar-nav-icon"></span>Code Editor</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/editors/markdown-editor"><span class="c-sidebar-nav-icon"></span>Markdown</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/editors/text-editor"><span class="c-sidebar-nav-icon"></span>Rich Text Editor</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-notes c-sidebar-nav-icon"></i>Forms</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/forms/basic-forms"><span class="c-sidebar-nav-icon"></span>Basic Forms</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/forms/advanced-forms"><span class="c-sidebar-nav-icon"></span>Advanced</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/forms/validation"><span class="c-sidebar-nav-icon"></span>Validation</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/google-maps">
            <i class="cil-map c-sidebar-nav-icon"></i>
            Google Maps
            </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-star c-sidebar-nav-icon"></i>Icons</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/icon/coreui-icons"><span class="c-sidebar-nav-icon"></span>CoreUI Icons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/icon/flags"><span class="c-sidebar-nav-icon"></span>Flags</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/icon/brands"><span class="c-sidebar-nav-icon"></span>Brands</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-bell c-sidebar-nav-icon"></i>Notifications</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/notifications/alerts"><span class="c-sidebar-nav-icon"></span>Alerts</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/notifications/badge"><span class="c-sidebar-nav-icon"></span>Badge</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/notifications/modals"><span class="c-sidebar-nav-icon"></span>Modals</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/notifications/toastr"><span class="c-sidebar-nav-icon"></span>Toastr</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-bolt c-sidebar-nav-icon"></i>Plugins</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/plugins/calendar"><span class="c-sidebar-nav-icon"></span>Calendar</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/plugins/draggable-cards"><span class="c-sidebar-nav-icon"></span>Draggable</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/plugins/spinners"><span class="c-sidebar-nav-icon"></span>Spinners</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-columns c-sidebar-nav-icon"></i>Tables</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/tables/tables"><span class="c-sidebar-nav-icon"></span>Standard Tables</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/tables/datatables"><span class="c-sidebar-nav-icon"></span>DataTables</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/widgets">
            <i class="cil-calculator c-sidebar-nav-icon"></i>
            Widgets
            </a>
        </li>
        <li class="c-sidebar-nav-title">
            Extras
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-star c-sidebar-nav-icon"></i>Pages</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/login"><span class="c-sidebar-nav-icon"></span>Login</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/register"><span class="c-sidebar-nav-icon"></span>Register</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/404"><span class="c-sidebar-nav-icon"></span>Error 404</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/500"><span class="c-sidebar-nav-icon"></span>Error 500</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-layers c-sidebar-nav-icon"></i>Apps</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-description c-sidebar-nav-icon"></i>Invoicing</a>
                    <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/apps/invoicing/invoice"><span class="c-sidebar-nav-icon"></span>Invoice</a></li>
                    </ul>
                </li>
                <li class="c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-envelope-open c-sidebar-nav-icon"></i>Email</a>
                    <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/apps/email/inbox"><span class="c-sidebar-nav-icon"></span>Inbox</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/apps/email/message"><span class="c-sidebar-nav-icon"></span>Message</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/apps/email/compose"><span class="c-sidebar-nav-icon"></span>Compose</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="https://coreui.io">
            <i class="cil-cloud-download c-sidebar-nav-icon"></i>
            Download CoreUI
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="https://coreui.io/pro/">
            <i class="cil-layers c-sidebar-nav-icon"></i>
            Try CoreUI PRO
            </a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 563px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 293px;"></div>
        </div>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>