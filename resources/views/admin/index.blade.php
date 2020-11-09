@extends('layouts.admin')
@section('title','Admin')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Trang chủ</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<a href="{{ route('products.index')}}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag">
								<use xlink:href="#stroked-bag"></use>
							</svg>
						</div>
					</a>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">
							{{\DB::table('products')->count()}}
						</div>
						<div class="text-muted">Sản phẩm</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-orange panel-widget">
				<div class="row no-padding">
					<a href="{{ route('customers.index')}}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message">
								<use xlink:href="#stroked-empty-message"></use>
							</svg>
						</div>
					</a>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">
							{{\DB::table('customers')->count()}}
						</div>
						<div class="text-muted">Khách hàng</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-red panel-widget">
				<div class="row no-padding">
					<a href="{{ route('bills.index')}}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content">
								<use xlink:href="#stroked-app-window-with-content"></use>
							</svg>
						</div>
					</a>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{\DB::table('bills')->where('tinh_trang','Đã giao hàng')->sum('tong_tien')}}</div>
						<div class="text-muted">Doanh thu</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-teal panel-widget">
				<div class="row no-padding">
					<a href="{{ route('bills.index')}}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked basket ">
								<use xlink:href="#stroked-basket" />
							</svg>
						</div>
					</a>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{\DB::table('bills')->count()}}</div>
						<div class="text-muted">Hóa đơn</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Site Traffic Overview
					<ul class="pull-right panel-settings panel-button-tab-right">
						<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<ul class="dropdown-settings">
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body">
					<div class="canvas-wrapper">
						<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default chat">
				<div class="panel-heading">
					Chat
					<ul class="pull-right panel-settings panel-button-tab-right">
						<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<ul class="dropdown-settings">
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body">
					<ul>
						<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
							</div>
						</li>
						<li class="right clearfix"><span class="chat-img pull-right">
								<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header"><strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
							</div>
						</li>
						<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="panel-footer">
					<div class="input-group">
						<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
							<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					To-do List
					<ul class="pull-right panel-settings panel-button-tab-right">
						<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<ul class="dropdown-settings">
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body">
					<ul class="todo-list">
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-1" />
								<label for="checkbox-1">Make coffee</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-2" />
								<label for="checkbox-2">Check emails</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-3" />
								<label for="checkbox-3">Reply to Jane</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-4" />
								<label for="checkbox-4">Make more coffee</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-5" />
								<label for="checkbox-5">Work on the new design</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
						<li class="todo-list-item">
							<div class="checkbox">
								<input type="checkbox" id="checkbox-6" />
								<label for="checkbox-6">Get feedback on design</label>
							</div>
							<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
						</li>
					</ul>
				</div>
				<div class="panel-footer">
					<div class="input-group">
						<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
							<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
						</span></div>
				</div>
			</div>
		</div>
		<!--/.col-->


		<div class="col-md-6">
			<div class="panel panel-default ">
				<div class="panel-heading">
					Timeline
					<ul class="pull-right panel-settings panel-button-tab-right">
						<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<ul class="dropdown-settings">
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
										<li class="divider"></li>
										<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body timeline-container">
					<ul class="timeline">
						<li>
							<div class="timeline-badge"><em class="glyphicon glyphicon-pushpin"></em></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge"><em class="glyphicon glyphicon-camera"></em></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge"><em class="glyphicon glyphicon-paperclip"></em></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--/.col-->
		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
<script>
	$(window).on('resize', function() {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function() {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>
@endsection