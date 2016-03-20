<ul class="nav nav-header">
  <li>
    <a href="#ln_dashboard" data-toggle="collapse" data-parent="#leftnav_adminmain">Dashboard</a>
  </li>
</ul>
<ul id="ln_dashboard" class="nav nav-sidebar-inner collapse open">
  <li><a href="/admin/home">Home <span class="sr-only">(current)</span></a></li>
  <li {{ (Request::is('/admin/menus') ? 'class="active"' : '') }}><a href="/admin/menus">Menu's</a></li>
  <li><a href="/admin/settings">Settings</a></li>
  <li><a href="/admin/users">Users</a></li>
  <li><a href="/admin/groups">Groups</a></li>
  <li><a href="/admin/permissions">Permissions</a></li>
</ul>
            <ul class="nav nav-header">
              <li>
                <a href="#ln_lookandfeel" data-toggle="collapse" data-parent="#ln_lookandfeel">Look &amp; Feel</a>
              </li>
            </ul>
            <ul id="ln_lookandfeel" class="nav nav-sidebar-inner collapse">
                    <li class="active"><a href="/admin/templates">Templates</a></li>
                    <li><a href="/admin/layouts">Layouts</a></li>
                    <li><a href="/admin/themes">Themes</a></li>
                    <li><a href="/admin/css">CSS Frameworks</a></li>
                    <li><a href="/admin/typography">Typography</a></li>
                    <li><a href="/admin/glyphs">Glyphs</a></li>
                    <li><a href="/admin/emojii">Emojii</a></li>
            </ul>

         <ul class="nav nav-header">
            <li>
              <a href="#ln_content" data-toggle="collapse" data-parent="#ln_content">Content</a>
            </li>
          </ul>
            <ul id="ln_content" class="nav nav-sidebar-inner collapse">
              <li><a href="/admin/pages">Pages <span class="sr-only">(current)</span></a></li>
              <li><a href="/admin/plugins">Plugins</a></li>
              <li><a href="/admin/chunks">Chunks</a></li>
            </ul>

         <ul class="nav nav-header">
            <li>
              <a href="#ln_other" data-toggle="collapse" data-parent="#ln_other">Other</a>
            </li>
          </ul>
            <ul id="ln_other" class="nav nav-sidebar-inner collapse">
              <li><a href="/admin/">etc <span class="sr-only">(current)</span></a></li>
              <li><a href="/admin/">etc</a></li>
            </ul>