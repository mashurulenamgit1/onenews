<!-- ########## START: LEFT PANEL ########## -->
<div>
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Notun_news</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{ url('admin/home') }}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Banner</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('banners') }}" class="nav-link">Banner</a></li>
        </ul>

         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Post_category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('post_category') }}" class="nav-link">Category</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">বাংলাদেশ</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.blogpost') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.blogpost') }}" class="nav-link">All Post</a></li>
        </ul>

         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">রাজনীতি</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.rajniti') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.rajniti') }}" class="nav-link">All Post</a></li>
        </ul>
         
         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">বিশ্ব</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a> 
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.world') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.world') }}" class="nav-link">All Post</a></li>
        </ul>
        
         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">বাণিজ্য</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.business') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.business') }}" class="nav-link">All Post</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">খেলা</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.sport') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.sport') }}" class="nav-link">All Post</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">মতামত</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.opinion') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.opinion') }}" class="nav-link">All Post</a></li>
        </ul>

         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">বিনোদন</span>
            <i class="menu-item-arrow fa fa-angle-down"></i> 
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.entertainment') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.entertainment') }}" class="nav-link">All Post</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">চাকরি</span>
            <i class="menu-item-arrow fa fa-angle-down"></i> 
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.job') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ route('all.job') }}" class="nav-link">All Post</a></li>
        </ul>
        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Site-Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="{{ route('admin.sitesettings') }}" class="nav-link">Site-Setting</a></li>
        </ul>

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
</div>
  <!-- ########## END: LEFT PANEL ########## -->
