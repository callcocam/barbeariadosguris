<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item">
                <a class="nav-item-hold" href="{{ route('admin.admin.index') }}"><i class="nav-icon i-Dashboard"></i><span class="nav-text">{{ __('Painel') }}</span></a>
                <div class="triangle"></div>
            </li>
            @can('admin.settings.index')
                <li class="nav-item">
                    <a class="nav-item-hold" href="{{ route('admin.settings.setting') }}"><i class="nav-icon i-Gear-2"></i><span class="nav-text">{{ __('Configuração') }}</span></a>
                    <div class="triangle"></div>
                </li>
            @endcan
            @canany(['admin.roles.index','admin.permissions.index','admin.users.index','admin.clients.index','admin.user.index','admin.auth.profile.index'])
                <li class="nav-item" data-item="operacional"><a class="nav-item-hold" href="#"><i class="nav-icon i-Gears-2"></i><span class="nav-text">{{ __('Operacional') }}</span></a>
                    <div class="triangle"></div>
                </li>
            @endcan
            @canany(['admin.wallets.index','admin.invoices.index','admin.incomes.index','admin.expenses.index'])
                <li class="nav-item" data-item="control"><a class="nav-item-hold" href="#"><i class="nav-icon i-Money"></i><span class="nav-text">{{ __('Controle') }}</span></a>
                    <div class="triangle"></div>
                </li>
            @endcan
            @canany(['admin.posts.index','admin.categories.index'])
                <li class="nav-item" data-item="blog"><a class="nav-item-hold" href="#"><i class="nav-icon i-Blogger"></i><span class="nav-text">{{ __('Blog') }}</span></a>
                    <div class="triangle"></div>
                </li>
            @endcan
            <li class="nav-item"><a class="nav-item-hold" href="#" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i class="nav-icon i-Arrow-Inside"></i><span class="nav-text">{{ __("Sair") }}</span></a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- Submenu Dashboards-->
        <ul class="childNav" data-parent="operacional">
            @if (Route::has('admin.auth.profile.index'))
                @can('admin.auth.profile.index')
                    <li class="nav-item"><a href="{{ route('admin.auth.profile.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Profile') }}</span></a></li>
                @endcan
            @endif
            @if (Route::has('admin.users.index'))
                @can('admin.users.index')
                    <li class="nav-item"><a href="{{ route('admin.users.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Usuários') }}</span></a></li>
                @endcan
            @endif
            @if (Route::has('admin.clients.index'))
                @can('admin.users.index')
                    <li class="nav-item"><a href="{{ route('admin.clients.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Clientes') }}</span></a></li>
                @endcan
            @endif
            @if (Route::has('admin.permissions.index'))
                @can('admin.permissions.index')
                    <li class="nav-item"><a href="{{ route('admin.permissions.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Permissões') }}</span></a></li>
                @endcan
            @endif
            @if (Route::has('admin.roles.index'))
                @can('admin.roles.index')
                    <li class="nav-item"><a href="{{ route('admin.roles.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Papéis') }}</span></a></li>
                @endcan
            @endif
        </ul>
        <!-- Submenu Dashboards-->
        <ul class="childNav" data-parent="blog">
            @if (Route::has('admin.categories.index'))
                @can('admin.categories.index')
                    <li class="nav-item"><a href="{{ route('admin.categories.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Categorias') }}</span></a></li>
                @endcan
            @endif
            @if (Route::has('admin.posts.index'))
                @can('admin.posts.index')
                    <li class="nav-item"><a href="{{ route('admin.posts.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Posts') }}</span></a></li>
                @endcan
            @endif
        </ul>
        <ul class="childNav" data-parent="control">
            @if (Route::has('admin.wallets.index'))
                @can('admin.wallets.index')
                    <li class="nav-item"><a href="{{ route('admin.wallets.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Carteiras') }}</span></a></li>
                @endcan
            @endif
                @if (Route::has('admin.invoices.index'))
                    @can('admin.invoices.index')
                        <li class="nav-item"><a href="{{ route('admin.invoices.index') }}"><i class="nav-icon i-Arrow-Forward-2"></i><span class="item-name">{{ __('Movimentos') }}</span></a></li>
                    @endcan
                @endif
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
