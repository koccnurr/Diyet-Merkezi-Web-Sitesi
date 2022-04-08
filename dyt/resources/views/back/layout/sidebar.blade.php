<ul class="menu">

  <li class="menu-category">Anasayfa</li>

  <li class="menu-item active">
    <a class="menu-link" href="{{route('getDashboard')}}">
      <span class="icon fa fa-home"></span>
      <span class="title">Anasayfa</span>
    </a>
  </li>

  <li class="menu-item">
    <a class="menu-link" href="#">
      <span class="icon fa fa-user"></span>
      <span class="title">İletişim</span>
      <span class="arrow"></span>
    </a>
    <ul class="menu-submenu">
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAllMessage')}}">
          <span class="dot"></span>
          <span class="title">Talep Mesajları</span>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAllOnlineDiet')}}">
          <span class="dot"></span>
          <span class="title">Online Diyet Mesajları</span>
        </a>
      </li>
    </ul>
  </li>



  <li class="menu-category">Blog</li>
  <li class="menu-item">
    <a class="menu-link" href="#">
      <span class="icon fa fa-user"></span>
      <span class="title">Blog</span>
      <span class="arrow"></span>
    </a>

    <ul class="menu-submenu">
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAllBlog')}}">
          <span class="dot"></span>
          <span class="title">Tüm Bloglar</span>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAddBlog')}}">
          <span class="dot"></span>
          <span class="title">Blog Ekle</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-item">
    <a class="menu-link" href="#">
      <span class="icon fa fa-user"></span>
      <span class="title">SSS</span>
      <span class="arrow"></span>
    </a>

    <ul class="menu-submenu">
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAllFAQ')}}">
          <span class="dot"></span>
          <span class="title">Tüm SSS</span>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="{{route('getCreateFAQ')}}">
          <span class="dot"></span>
          <span class="title">SSS Ekle</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="menu-category">Hizmetler</li>
  <li class="menu-item">
    <a class="menu-link" href="#">
      <span class="icon fa fa-user"></span>
      <span class="title">Hizmetler</span>
      <span class="arrow"></span>
    </a>

    <ul class="menu-submenu">
      <li class="menu-item">
        <a class="menu-link" href="{{route('getAllHizmetler')}}">
          <span class="dot"></span>
          <span class="title">Tüm Hizmetler</span>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="{{route('getCreateHizmetler')}}">
          <span class="dot"></span>
          <span class="title">Hizmet Ekle</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-category">Ayarlar</li>
  <li class="menu-item">
    <a class="menu-link" href="{{route('getFooterSetting')}}">
      <span class="dot"></span>
      <span class="title">Footer Ayarları</span>
    </a>
  </li>
</ul>
