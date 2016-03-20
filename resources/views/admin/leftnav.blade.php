<ul class="nav nav-header">
  <li>
    <a href="#ln_dashboard" data-toggle="collapse" data-parent="#leftnav_adminmain">Dashboard</a>
  </li>
</ul>
<ul id="ln_dashboard" class="nav nav-sidebar-inner collapse open {!! (Request::is('admin','admin/home','admin/dashboard*','admin/menu*','admin/settings*','admin/groups*','admin/users*','admin/permissions*') ? 'in' : '' ) !!}">
  <li {!! (Request::is('admin','admin/home', 'admin/dashboard*') ? 'class="active"' : '') !!} ><a href="/admin/home">Home <span class="sr-only">(current)</span></a></li>
  <li {!! (Request::is('admin/menu*') ? 'class="active"' : '') !!}><a href="/admin/menus">Menu's</a></li>
  <li {!! (Request::is('admin/settings*') ? 'class="active"' : '') !!}><a href="/admin/settings">Settings</a></li>
  <li {!! (Request::is('admin/user*') ? 'class="active"' : '') !!}><a href="/admin/users">Users</a></li>
  <li {!! (Request::is('admin/group*') ? 'class="active"' : '') !!}><a href="/admin/groups">Groups</a></li>
  <li {!! (Request::is('admin/permission*') ? 'class="active"' : '') !!}><a href="/admin/permissions">Permissions</a></li>
</ul>
            <ul class="nav nav-header">
              <li>
                <a href="#ln_lookandfeel" data-toggle="collapse" data-parent="#ln_lookandfeel">Look &amp; Feel</a>
              </li>
            </ul>
            <ul id="ln_lookandfeel" class="nav nav-sidebar-inner collapse {!! (Request::is('admin/templates*','admin/layouts*','admin/themes*','admin/css*','admin/typography*','admin/glyphs*','admin/emojii') ? 'in' : '' ) !!}">
                    <li {!! (Request::is('admin/templates*') ? 'class="active"' : '') !!}><a href="/admin/templates">Templates</a></li>
                    <li {!! (Request::is('admin/layouts*') ? 'class="active"' : '') !!}><a href="/admin/layouts">Layouts</a></li>
                    <li {!! (Request::is('admin/themes*') ? 'class="active"' : '') !!}><a href="/admin/themes">Themes</a></li>
                    <li {!! (Request::is('admin/css*') ? 'class="active"' : '') !!}><a href="/admin/css">CSS Frameworks</a></li>
                    <li {!! (Request::is('admin/typography*') ? 'class="active"' : '') !!}><a href="/admin/typography">Typography</a></li>
                    <li {!! (Request::is('admin/glyphs*') ? 'class="active"' : '') !!}><a href="/admin/glyphs">Glyphs</a></li>
                    <li {!! (Request::is('admin/emojii*') ? 'class="active"' : '') !!}><a href="/admin/emojii">Emojii</a></li>
            </ul>

         <ul class="nav nav-header">
            <li>
              <a href="#ln_content" data-toggle="collapse" data-parent="#ln_content">Content</a>
            </li>
          </ul>
            <ul id="ln_content" class="nav nav-sidebar-inner collapse {!! (Request::is('admin/pages*','admin/plugins*','admin/settings*','admin/chunks*') ? 'in' : '' ) !!}">
              <li {!! (Request::is('admin/page*') ? 'class="active"' : '') !!}><a href="/admin/pages">Pages <span class="sr-only">(current)</span></a></li>
              <li {!! (Request::is('admin/plugin*') ? 'class="active"' : '') !!}><a href="/admin/plugins">Plugins</a></li>
              <li {!! (Request::is('admin/chunk*') ? 'class="active"' : '') !!}><a href="/admin/chunks">Chunks</a></li>
            </ul>
