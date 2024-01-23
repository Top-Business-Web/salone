 		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">Navigation</div>
					<div class="menu-item {{ request()->is('admin/index') ? 'active' : ''}}">
						<a href="{{route('cityadmin-index')}}" class="menu-link">
							<span class="menu-icon"><em class="fab fa-dashcube"></em></span>
							<span class="menu-text">Dashboard</span>
						</a>
					</div>

					<div class="menu-item {{ request()->is('admin/adminbanner') ? 'active' : ''}}">
						<a href="{{route('adminbanner')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-images"></em></span>
							<span class="menu-text">Banner Management</span>
						</a>
					</div>
				
					<div class="menu-divider"></div>
					<div class="menu-header">Notifications</div>
			  		<div class="menu-item {{ request()->is('admin/UserNotification') ? 'active' : ''}}">
						<a href="{{route('cityadminNotification')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-bell"></em></span>
							<span class="menu-text">Notification to Users</span>
						</a>
					</div>
				
					<div class="menu-item {{ request()->is('admin/CNotification_to_store') ? 'active' : ''}}">
						<a href="{{route('CNotification_to_store')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-bell"></em></span>
							<span class="menu-text">Notification to Salons</span>
						</a>
					</div>
					<div class="menu-divider"></div>
					<div class="menu-header">Coupon </div>
				
					<div class="menu-item {{ request()->is('admin/couponlist') ? 'active' : ''}}">
						<a href="{{route('couponlist')}}" class="menu-link">
							<span class="menu-icon"><em class="fas fa-percentage"></em></span>
							<span class="menu-text">Coupon</span>
						</a>
						</div>

					<div class="menu-divider"></div>
					<div class="menu-header">Orders </div>
			
						<div class="menu-item {{ request()->is('admin/orders/0') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/orders/0')}}">
						    <span class="menu-icon"><em class="far fa-hand-scissors"></em></span>
							<span class="menu-text">Pending Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/orders/1') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/orders/1')}}">
						    <span class="menu-icon"><em class="far fa-hand-scissors"></em></span>
							<span class="menu-text">Completed Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/orders/2') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/orders/2')}}">
						    <span class="menu-icon"><em class="far fa-hand-scissors"></em></span>
							<span class="menu-text">Rejected Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/orders/3') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/orders/3')}}">
						    <span class="menu-icon"><em class="far fa-hand-scissors"></em></span>
							<span class="menu-text">Missing Orders</span>
						</a>
					</div>


					<div class="menu-divider"></div>
					<div class="menu-header">Product Orders </div>
			
						<div class="menu-item {{ request()->is('admin/product_orders/0') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/product_orders/0')}}">
						    <span class="menu-icon"><em class="fas fa-layer-group"></em></span>
							<span class="menu-text">Pending Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/product_orders/1') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/product_orders/1')}}">
						    <span class="menu-icon"><em class="fas fa-layer-group"></em></span>
							<span class="menu-text">Completed Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/product_orders/2') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/product_orders/2')}}">
						    <span class="menu-icon"><em class="fas fa-layer-group"></em></span>
							<span class="menu-text">Rejected Orders</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/product_orders/3') ? 'active' : ''}}">
						<a class="menu-link" href="{{url('admin/product_orders/3')}}">
						    <span class="menu-icon"><em class="fas fa-layer-group"></em></span>
							<span class="menu-text">Missing Orders</span>
						</a>
					</div>



                	<div class="menu-divider"></div>
					<div class="menu-header">Users</div>

					<div class="menu-item {{ request()->is('admin/allusers') ? 'active' : ''}}">
						<a href="{{route('allusers')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-user"></em></span>
							<span class="menu-text">Users</span>
						</a>
					</div>
					<div class="menu-divider"></div>
					<div class="menu-header">Vendors</div>

					<div class="menu-item {{ request()->is('admin/vendor', 'admin/vendor/*') ? 'active' : ''}}">
						<a href="{{route('vendor')}}" class="menu-link">
							<span class="menu-icon"><em class="fas fa-user-astronaut"></em></span>
							<span class="menu-text">Vendors</span>
						</a>
					</div>
			
			
					<div class="menu-divider"></div>
					<div class="menu-header">Settings</div>

					<div class="menu-item {{ request()->is('admin/termcondition') ? 'active' : ''}}">
						<a href="{{route('termcondition')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-file-code"></em></span>
							<span class="menu-text">Terms & Conditions</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/cookies-policy') ? 'active' : ''}}">
						<a href="{{route('cookies_policy')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-file-code"></em></span>
							<span class="menu-text">Cookies Policy</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/privacy-policy') ? 'active' : ''}}">
						<a href="{{route('privacy_policy')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-file-code"></em></span>
							<span class="menu-text">Privacy Policy</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/faq_*') ? 'active' : ''}}">
						<a href="{{route('faq_list')}}" class="menu-link">
							<span class="menu-icon"><em class="far fa-question-circle"></em></span>
							<span class="menu-text">Faqs</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/scratch-earn') ? 'active' : ''}}">
						<a href="{{route('adminScratchEarn')}}" class="menu-link">
							<span class="menu-icon"><em class="fas fa-tags"></em></span>
							<span class="menu-text">Scratch Cards</span>
						</a>
					</div>
					<div class="menu-item {{ request()->is('admin/global_settings') ? 'active' : ''}}">
						<a href="{{route('edit-admin')}}" class="menu-link">
							<span class="menu-icon"><em class="fas fa-cogs"></em></span>
							<span class="menu-text">Settings</span>
						</a>
					</div>
						<div class="menu-item {{ request()->is('admin/lang_*') ? 'active' : ''}}">
						<a class="menu-link" href="{{route('lang_list')}}">
						<span class="menu-icon"><em class="fas fa-language"></em></span>
							<span class="menu-text">Language Setting</span>
							</a>
					</div>

				<br/>
				<br/>
				<br/>
				<br/>
				
					
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
			
			<!-- BEGIN mobile-sidebar-backdrop -->
			<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
			<!-- END mobile-sidebar-backdrop -->
		</div>
		<!-- END #sidebar -->
 
