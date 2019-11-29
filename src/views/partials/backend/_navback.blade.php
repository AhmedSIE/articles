Test2   <!-- BEGIN: Header-->
<header class="page-topbar" id="header">
 <div class="navbar navbar-fixed"> 
   <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
     <div class="nav-wrapper"> 
           <div class="">
             <div class="header-search-wrapper hide-on-med-and-down">
               <form method="POST" action="#">
                   @csrf
                   @method('GET')
                   <div class="input-field">
                       <input class="header-search-input z-depth-2" name="libelle" type="search" placeholder="Explorer Swicht Maker wiki" required="">
                       <button type="submit" class="red btn waves-effect waves-light"><i class="material-icons">search</i></button>
                   </div>
               </form>
             </div>
           </div>
       <ul class="navbar-list right back">
           <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
           <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
           <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
           <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
           <li><a class="dropdown-trigger waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="editionprofil"><span class="avatar-status avatar-online"><img src={{asset('../../../app-assets/images/avatar/avatar-7.png')}} alt="avatar"><i></i></span></a></li>
       </ul>
         <!-- profile-dropdown-->
       <ul class="dropdown-content" id="editionprofil">
         <li>@auth<a class="grey-text text-darken-1"
              href="#"
            >
             <i class="material-icons">person_outline</i>
             @auth
             @endauth</a> 
             @endauth
         </li>
         <li>
             
         </li>
       </ul>
     </div>
     <nav class="display-none search-sm">
       <div class="nav-wrapper">
         <form method="" action="" >
           <div class="input-field">
             <input class="typeahead search-box-sm" type="search" required="">
             <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
           </div>
         </form>
       </div>
     </nav>
   </nav>
 </div>
 <div class="grand-titre center" id="grand-titre">
     <h5>{{$sectiontitre ?? 'Wiki'}}</h5>
 </div>
</header>
<!-- END: Header-->



<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
 <div class="brand-sidebar">

   <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img src="{{asset('images/logo/logo-switch-maker.png')}}" alt="Wiki Switch-Maker logo"/><span class="logo-text hide-on-med-and-down">Switch Maker</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>

 </div>
 <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
   <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">list</i><span class="menu-title" data-i18n="">Dashbord</span></a>
   </li>
   <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Catégories</span></a>
     <div class="collapsible-body">
         <ul class="collapsible collapsible-sub" data-collapsible="accordion">
         <li><a class="collapsible-body" href="{{route('listecategories')}}" data-i18n=""><i class="material-icons">list</i><span>liste des Catégories</span></a>
             </li>
           <li><a class="collapsible-body" href="{{route('listearticles')}}" data-i18n=""><i class="material-icons">list</i><span>liste des Articles</span></a>
           </li>
         </ul>
       </div>
   </li>
  <li class="bold"><a class=" waves-effect waves-cyan " href="{{route('articlecreate')}}"><i class="material-icons">note</i><span class="menu-title" data-i18n="">Articles</span></a>
   </li>
   <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">local_grocery_store</i><span class="menu-title" data-i18n="">Boite à idées</span><span class="badge badge pill red float-right mr-10">5</span></a>
   </li>
   <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
   </li>
 </ul>
 <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->