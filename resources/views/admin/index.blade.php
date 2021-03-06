@extends('admin.layout')

@section('content')
<main class="main">
	<div class="container-fluid">
		<div class="row">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Dashboard</h2>

					<a href="add-item.html" class="main__title-link">add item</a>
				</div>
			</div>
			<!-- end main title -->
		</div>

		<div class="row row--grid">
			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>Unique views this month</span>
					<p>5 678</p>
					<img src="{{asset('assets/admin/img/graph-bar.svg')}}" alt="">
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>Items added this month</span>
					<p>172</p>
					<img src="{{asset('assets/admin/img/film.svg')}}" alt="">
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>New comments</span>
					<p>2 573</p>
					<img src="{{asset('assets/admin/img/comments.svg')}}" alt="">
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>New reviews</span>
					<p>1 021</p>
					<img src="{{asset('assets/admin/img/star-half-alt.svg')}}" alt="">
				</div>
			</div>
			<!-- end stats -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="{{asset('assets/admin/img/award.svg')}}" alt=""> Top items</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
							<a class="dashbox__more" href="catalog.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>CATEGORY</th>
									<th>RATING</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="main__table-text">321</div>
									</td>
									<td>
										<div class="main__table-text">I Dream in Another Language</div>
									</td>
									<td>
										<div class="main__table-text">Movie</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">9.2</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">54</div>
									</td>
									<td>
										<div class="main__table-text">Benched</div>
									</td>
									<td>
										<div class="main__table-text">Movie</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">9.1</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">670</div>
									</td>
									<td>
										<div class="main__table-text">Whitney</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">9.0</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">241</div>
									</td>
									<td>
										<div class="main__table-text">Blindspotting 2</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">8.9</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">22</div>
									</td>
									<td>
										<div class="main__table-text">Blindspotting</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">8.9</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="{{asset('assets/admin/img/film.svg')}}" alt=""> Latest items</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
							<a class="dashbox__more" href="catalog.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>CATEGORY</th>
									<th>STATUS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="main__table-text">26</div>
									</td>
									<td>
										<div class="main__table-text">I Dream in Another Language</div>
									</td>
									<td>
										<div class="main__table-text">Movie</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">25</div>
									</td>
									<td>
										<div class="main__table-text">Benched</div>
									</td>
									<td>
										<div class="main__table-text">Movie</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">24</div>
									</td>
									<td>
										<div class="main__table-text">Whitney</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">Blindspotting 2</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">22</div>
									</td>
									<td>
										<div class="main__table-text">Blindspotting</div>
									</td>
									<td>
										<div class="main__table-text">TV Series</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="{{asset('assets/admin/img/user-circle.svg')}}" alt=""> Latest users</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
							<a class="dashbox__more" href="users.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>FULL NAME</th>
									<th>EMAIL</th>
									<th>USERNAME</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--grey">email@email.com</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--grey">email@email.com</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--grey">email@email.com</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--grey">email@email.com</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--grey">email@email.com</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="{{asset('assets/admin/img/star-half-alt.svg')}}" alt=""> Latest reviews</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg> </a>
							<a class="dashbox__more" href="reviews.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>ITEM</th>
									<th>AUTHOR</th>
									<th>RATING</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">I Dream in Another Language</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">7.2</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">24</div>
									</td>
									<td>
										<div class="main__table-text">Benched</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">6.3</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">25</div>
									</td>
									<td>
										<div class="main__table-text">Whitney</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">8.4</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">26</div>
									</td>
									<td>
										<div class="main__table-text">Blindspotting</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">9.0</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">27</div>
									</td>
									<td>
										<div class="main__table-text">I Dream in Another Language</div>
									</td>
									<td>
										<div class="main__table-text">John Doe</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate">7.7</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->
		</div>
	</div>
</main>
@endsection
