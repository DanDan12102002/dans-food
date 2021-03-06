<?php defined('_JEXEC') or die; ?>
<?php
	global $app;
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="reservation">

		<?php include 'blocks/scripts.php'; ?>
		<?php include 'blocks/header-black.php'; ?>
		<div class="reserv-section-1">
			<div class="container">
				<div class="t1">
					<div class="p1">
						БРОНЮВАННЯ
					</div>
				</div>
				<div class="decor">
					<img src="./assets/images/main/decor.png" alt="">
				</div>
				<div class="t2">
					<div class="p1">
						Просто в кілька кліків забронюйте місце онлайн, щоб заощадити ваш час і гроші.
					</div>
				</div>

			</div>
		</div>
		<div class="reserv-section-2">
			<div class="container">
				<div class="t1">
					<div class="p1">
						Бланк бронювання
					</div>
				</div>
				<div class="line"><img src="./assets/images/main/un-line.png" alt=""></div>

				<div class="box">
					<div class="t2">
						<div class="p1">
							Ми готові допомогти вам забронювати місце онлайн, щоб заощадити ваш час і гроші, або ви можете зателефонувати нам безпосередньо через гарячу лінію служби підтримки клієнтів: <span class="orange"><a href="tel::888888888">88-888-8888</a></span>
						</div>
					</div>
					<form method="post">
						<div class="row r1">
							<div class="col-md-6 col-sm-12">
								<div class="input-group  in-1">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Ім'я користувача" aria-label="Username" aria-describedby="basic-addon1" name="name" required />
								</div>
								<div class="input-group  in-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2"><i class="fas fa-mobile-alt"></i></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Номер телефону" aria-label="Phone" aria-describedby="basic-addon2" name="phone" required />
								</div>
								<div class="input-group date" id="datetimepicker1" data-target-input="nearest">
									<div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
									<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" required placeholder="Дата" />
								</div>
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-group  in-4">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon4"><i class="fas fa-envelope"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon4" name="email" required />
								</div>
								<div class="input-group in-5">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-male"></i></label>
									</div>
									<select class="custom-select" name="people" id="inputGroupSelect01" required>
										<option value="" selected>Скільки людей</option>
										<option value="1">1 людина</option>
										<option value="2">2 людини</option>
										<option value="3">3 людини</option>
										<option value="4">4 людини</option>
										<option value="5">5 людей</option>
										<option value="6">6 людей</option>
										<option value="7">7 людей</option>
										<option value="8">8 людей</option>
										<option value="9">9 людей</option>
										<option value="10">10 людей</option>
									</select>
								</div>
								<div class="input-group in-6">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect"><i class="fas fa-clock"></i></label>
									</div>
									<select class="custom-select" name="hours" id="inputGroupSelect" required />
									<option value="" selected>На яку годину</option>
									<option value="7">7:00</option>
									<option value="8">8:00</option>
									<option value="9">9:00</option>
									<option value="10">10:00</option>
									<option value="11">11:00</option>
									<option value="12">12:00</option>
									<option value="13">13:00</option>
									<option value="14">14:00</option>
									<option value="15">15:00</option>
									<option value="16">16:00</option>
									<option value="17">17:00</option>
									<option value="18">18:00</option>
									<option value="19">19:00</option>
									<option value="20">20:00</option>
									<option value="21">21:00</option>
									<option value="22">22:00</option>
									<option value="23">23:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row r2">
							<div class="textblock">
								<textarea name="coment" id="" cols="30" rows="10" required></textarea>
							</div>
						</div>
						<div class="bat"><button class="btn1" type="submit">Забронювати столик</button></div>
					</form>
				</div>
			</div>
		</div>
		<div class="reserv-section-3">
			<div class="container">
				<div class="t1">
					<div class="p1">
						Найкращий сервіс Dan's Food пропонує
					</div>.
				</div>
				<div class="line"><img src="./assets/images/main/un-line.png" alt=""></div>
				<div class="row r1">
					<div class="col-md-3 col-sm-12">
						<div class="med">
							<div class="circle">
								<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
									<g>
										<g>
											<path d="M339.904,161.776l-5.136-16.904c-6.524-19.202-27.379-29.479-46.581-22.955c-10.802,3.67-19.285,12.153-22.955,22.955    l-5.136,16.904c-4.322,14.256-5.229,29.329-2.648,44c2.354,12.352,10.196,22.964,21.312,28.84L273.008,363.2    c-0.77,7.177,1.558,14.342,6.4,19.696c10.413,11.39,28.089,12.182,39.479,1.769c0.616-0.563,1.206-1.153,1.769-1.769    c4.734-5.202,7.058-12.157,6.4-19.16L321.272,234.6c11.101-5.879,18.93-16.484,21.28-28.824    C345.133,191.105,344.226,176.032,339.904,161.776z M326.792,202.992c-1.732,8.874-8.056,16.155-16.6,19.112    c-3.243,1.219-5.332,4.387-5.176,7.848L311.096,365c0.28,2.649-0.594,5.29-2.4,7.248c-4.817,4.769-12.575,4.769-17.392,0    c-1.896-2.116-2.757-4.964-2.352-7.776l6.032-134.52c0.156-3.461-1.933-6.629-5.176-7.848c-8.544-2.957-14.868-10.238-16.6-19.112    c-2.14-12.18-1.386-24.693,2.2-36.528l5.136-16.912c3.974-10.745,15.906-16.234,26.652-12.26c5.681,2.101,10.159,6.58,12.26,12.26    l5.136,16.912C328.174,178.3,328.928,190.812,326.792,202.992z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M216,120c-4.418,0-8,3.582-8,8v68.688l-21.656,21.656c-1.602,1.596-2.454,3.797-2.344,6.056l7,140    c0.167,3.019-0.929,5.972-3.024,8.152c-4.379,4.418-11.511,4.45-15.93,0.07c-0.024-0.023-0.047-0.047-0.07-0.07    c-2.096-2.18-3.191-5.133-3.024-8.152l7.048-140c0.112-2.258-0.737-4.458-2.336-6.056L152,196.688V128c0-4.418-3.582-8-8-8    s-8,3.582-8,8v72c0,2.122,0.844,4.156,2.344,5.656l21.488,21.496l-6.824,136.472c-0.726,14.907,10.77,27.581,25.677,28.307    c14.907,0.726,27.581-10.77,28.307-25.677c0.043-0.876,0.043-1.753,0-2.629l-6.824-136.472l21.488-21.496    c1.5-1.5,2.344-3.534,2.344-5.656v-72C224,123.582,220.418,120,216,120z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M168,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C176,123.582,172.418,120,168,120z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M192,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C200,123.582,196.418,120,192,120z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464    C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M265.969,390.172c-0.429-4.397-4.342-7.614-8.74-7.185c-0.103,0.01-0.206,0.022-0.309,0.036l0.032-0.008    c-11.263,1.308-22.641,1.308-33.904,0c-4.39-0.515-8.365,2.626-8.88,7.016c-0.515,4.39,2.626,8.365,7.016,8.88    c12.491,1.459,25.109,1.459,37.6,0C263.181,398.483,266.398,394.57,265.969,390.172z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M362.4,136.912c-2.839-3.385-7.885-3.828-11.27-0.988c-0.011,0.009-0.022,0.019-0.034,0.028    c-3.377,2.848-3.807,7.894-0.96,11.272c48.235,57.26,44.545,141.929-8.488,194.776c-3.13,3.119-3.139,8.186-0.02,11.316    c3.119,3.13,8.186,3.139,11.316,0.02C411.881,294.623,415.991,200.541,362.4,136.912z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<g>
												<path d="M186.392,105.744c-0.005,0-0.01-0.001-0.015-0.001c-0.008,0-0.016,0.001-0.025,0.001H186.392z" fill="#f15f2a"/>
												<path d="M277.736,84.472c-31.265-7.493-64.055-5.479-94.168,5.784c-4.136,1.555-6.227,6.169-4.672,10.304     c1.172,3.117,4.152,5.18,7.481,5.183c0.957-0.005,1.905-0.18,2.799-0.519c27.118-10.141,56.646-11.952,84.8-5.2     c4.295,1.038,8.618-1.601,9.656-5.896C284.67,89.833,282.031,85.51,277.736,84.472z" fill="#f15f2a"/>
											</g>
										</g>
									</g>
									<g>
										<g>
											<path d="M137.992,341.6C111.023,314.677,95.908,278.108,96,240c-0.079-30.446,9.565-60.122,27.528-84.704    c2.655-3.532,1.944-8.547-1.588-11.202s-8.547-1.944-11.202,1.588c-0.047,0.063-0.093,0.126-0.138,0.19    c-46.253,63.588-39.447,151.359,16.056,207.056c3.128,3.13,8.202,3.132,11.332,0.004C141.118,349.804,141.12,344.73,137.992,341.6    z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									</svg>
								</div>
							</div>

							<div class="t2">
								<div class="p1">
									Бронювання
								</div>
							</div>
							<div class="t3">
								<div class="p1">
									Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-12">
						<div class="med">
							<div class="circle">
								<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
									<g>
										<g>
											<polygon points="292.921,320.679 277.156,360.489 277.156,406.5 305.892,406.5 316.392,379.989   " fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<circle cx="138.528" cy="103.937" r="40.149" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M253.166,197.788c-1.875-5.77-6.367-9.943-11.73-11.675c0-16.822,0-8.062,0-18.525    c7.805-2.635,12.552-10.247,11.772-18.201l-3.695-37.69H222.22l-3.695,37.69c-0.781,7.96,3.973,15.567,11.772,18.201    c0,6.624,0,12.737,0,18.509c-0.018,0.006-0.036,0.009-0.053,0.015l-63.559,20.662l-42.12-38.779l34.522,21.557l0.009-0.587    c0.266-16.921-13.326-30.822-30.241-30.942l-13.02-0.094c-25.199-0.18-45.712,20.253-45.643,45.441l0.242,88.317    c0.039,14.092,9.761,26.415,23.654,29.602h-38.29L29.836,189.216c-1.604-8.161-9.522-13.473-17.68-11.871    c-8.16,1.604-13.475,9.519-11.871,17.68l28.351,144.227c1.388,7.062,7.579,12.154,14.775,12.154h2.592v0.09l-32.037,83.068    c-1.995,5.174,0.582,10.983,5.754,12.978c5.176,1.995,10.985-0.584,12.978-5.754l34.823-90.293l0.035-0.09h57.149l19.668,50.999    l-6.31,15.945c-4.436,11.21,1.056,23.895,12.265,28.331c11.209,4.435,23.895-1.055,28.331-12.265    c1.147-2.9,45.763-115.644,48.289-122.029h-36.41v0c-15.971,0-28.965-12.994-28.965-28.965c0-1.344,0.099-2.664,0.277-3.959    l-4.185,0.012l0.311-19.729c-7-0.459-13.501-4.143-17.447-10.032l-30.617-45.747l39.95,36.781c0.061,0.057,0.128,0.104,0.19,0.159    c4.948,4.436,11.727,5.683,17.691,3.776c0.021-0.007,0.043-0.011,0.066-0.018l73.678-23.951    C251.045,217.607,256.273,207.343,253.166,197.788z M148.818,351.405c8.316,0,15.058-6.742,15.058-15.058    c0-5.696-3.164-10.651-7.829-13.209l19.717-0.058l-20.491,51.784l-9.047-23.459H148.818z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M480.363,145.981c-3.194,0.243-6.239,0.179-8.939-5.323c-1.638-3.35-2.751-8.235-3.379-13.669    c-2.214-18.644,0.428-32.369-4.211-41.789c-4.191-8.509-12.945-12.48-20.999-12.808c-6.724-0.363-13.596,1.606-19.461,4.698    c-8.743-9.701-22.036-14.961-35.912-12.842c-21.921,3.348-36.977,23.833-33.629,45.754c3.35,21.922,23.834,36.978,45.755,33.629    c20.45-3.124,34.919-21.162,34.051-41.366c0.033-5.522,8.249-8.725,12.184-6.102c7.316,4.876,6.73,25.518,9.516,33.856    c1.42,4.251,4.497,11.489,8.122,15.984c5.581,6.892,11.58,8.035,18.056,6.018c1.347-0.419,2.277-1.723,2.166-3.189    C483.555,147.127,482.068,145.851,480.363,145.981z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M316.982,266.055H190.541c-9.229,0-16.71,7.482-16.71,16.71c0,9.229,7.482,16.71,16.71,16.71h52.081V418.1h-34.703    c-8.316,0-15.058,6.742-15.058,15.058c0,8.316,6.742,15.058,15.058,15.058h91.687c8.316,0,15.058-6.742,15.058-15.058    c0-8.316-6.742-15.058-15.058-15.058h-34.704V299.476h52.081c9.229,0,16.71-7.482,16.71-16.71    C333.692,273.537,326.211,266.055,316.982,266.055z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M499.842,177.344c-8.154-1.603-16.075,3.711-17.68,11.871l-20.68,105.202c0.192-2.062,0.116,4.449,0.374-89.889    c0.071-25.837-20.974-46.774-46.796-46.589l-11.863,0.085c-16.923,0.121-30.508,14.028-30.241,30.942l0.29,18.427l22.884-21.828    l-24.238,35.147l-59.616-6.682c0-16.42,0-7.781,0-18.035c7.818-2.64,12.549-10.261,11.772-18.201l-3.695-37.69h-27.294    l-3.695,37.69c-0.781,7.961,3.973,15.567,11.772,18.201c0,4.808,0,15.011,0,17.144c-8.47,0.723-15.526,7.33-16.51,16.096    c-1.118,9.984,6.068,18.985,16.052,20.105c84.359,9.455,78.529,8.853,80.011,8.853c5.935,0,11.555-2.908,14.972-7.864l24.8-35.964    l-15.04,41.75c-3.389,9.407-12.748,14.942-22.268,13.874c-6.912-0.781-4.946-0.559-8.94-1.007l0.165,10.491l-28.723-0.084    c0.185,1.318,0.286,2.663,0.286,4.031c0,15.971-12.994,28.965-28.965,28.965h-11.882l48.289,122.029    c4.436,11.209,17.117,16.701,28.331,12.265c11.21-4.436,16.701-17.12,12.265-28.331l-8.002-20.222    c9.235-23.947,7.307-18.947,18.019-46.721h23.729l0.035,0.09l34.823,90.293c1.537,3.986,5.338,6.429,9.369,6.429    c1.201,0,2.423-0.217,3.611-0.675c5.174-1.995,7.749-7.806,5.754-12.978l-32.035-83.068v-0.09h19.303    c7.197,0,13.387-5.092,14.775-12.154l28.351-144.228C513.317,186.864,508.002,178.948,499.842,177.344z M375.085,370.586    l-7.591-19.182h14.988L375.085,370.586z M456.2,321.289c-6.763,0-11.181,0-18.235,0c9.891-2.269,17.947-9.259,21.599-18.709    C459.488,305.04,459.712,303.425,456.2,321.289z" fill="#f15f2a"/>
										</g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									</svg>
								</div>
							</div>

							<div class="t2">
								<div class="p1">
									Приватні зустрічі
								</div>
							</div>
							<div class="t3">
								<div class="p1">
									Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-12">
						<div class="med">
							<div class="circle">


								<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g>
										<g>
											<path d="M404.742,41.897h-58.355V30c0-16.542-13.458-30-30-30H195.614c-16.542,0-30,13.458-30,30v11.897h-58.355    c-24.813,0-45,20.187-45,45V467c0,24.813,20.187,45,45,45h297.483c24.813,0,45-20.187,45-45V86.897    C449.742,62.084,429.555,41.897,404.742,41.897z M195.614,30h120.773l0.02,46.826c0,0-0.006,0.001-0.019,0.001H195.614V30z     M419.741,467c0.001,8.271-6.728,15-14.999,15H107.258c-8.271,0-15-6.729-15-15V173.747h327.483V467z M419.741,143.747H92.258    v-56.85c0-8.271,6.729-15,15-15h58.355v4.93c0,16.542,13.458,30,30,30h120.773c16.542,0,30-13.458,30-30v-4.93h58.355    c8.271,0,15,6.729,15,15V143.747z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M289.898,231.871H153.656c-8.284,0-15,6.716-15,15s6.716,15,15,15h136.242c8.284,0,15-6.716,15-15    S298.182,231.871,289.898,231.871z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M289.898,308.229H153.656c-8.284,0-15,6.716-15,15s6.716,15,15,15h136.242c8.284,0,15-6.716,15-15    S298.182,308.229,289.898,308.229z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M289.898,384.587H153.656c-8.284,0-15,6.716-15,15s6.716,15,15,15h136.242c8.284,0,15-6.716,15-15    S298.182,384.587,289.898,384.587z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M357.671,231.871h-18.222c-8.284,0-15,6.716-15,15s6.716,15,15,15h18.222c8.284,0,15-6.716,15-15    S365.956,231.871,357.671,231.871z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M357.671,308.229h-18.222c-8.284,0-15,6.716-15,15s6.716,15,15,15h18.222c8.284,0,15-6.716,15-15    S365.956,308.229,357.671,308.229z" fill="#f1552a"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M357.671,384.587h-18.222c-8.284,0-15,6.716-15,15s6.716,15,15,15h18.222c8.284,0,15-6.716,15-15    S365.956,384.587,357.671,384.587z" fill="#f1552a"/>
										</g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									</svg>
								</div>
							</div>
							<div class="t2">
								<div class="p1">
									Онлайн замовлення
								</div>
							</div>
							<div class="t3">
								<div class="p1">
									Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-12">
						<div class="med">
							<div class="circle">
								<div class="icon">
									<!--img src="../assets/images/main/delivery.svg" alt=""-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 462.999 462.999" style="enable-background:new 0 0 462.999 462.999;" xml:space="preserve">
											<g>
												<g>
													<g>
														<path d="M383.5,313c-7.995,0-14.5,6.505-14.5,14.5s6.505,14.5,14.5,14.5s14.5-6.505,14.5-14.5S391.495,313,383.5,313z" fill="#f15f2a"/>
														<path d="M95.5,313c-7.995,0-14.5,6.505-14.5,14.5S87.505,342,95.5,342s14.5-6.505,14.5-14.5S103.495,313,95.5,313z" fill="#f15f2a"/>
														<path d="M444.293,218.312l-55.167-24.519l-40.382-87.494C343.614,95.182,332.387,88,320.144,88H23.5C10.542,88,0,98.542,0,111.5     v200C0,324.458,10.542,335,23.5,335h25.098c3.607,22.64,23.263,40,46.902,40s43.295-17.36,46.902-40h194.195     c3.607,22.64,23.263,40,46.902,40c23.639,0,43.295-17.36,46.902-40h9.098c12.958,0,23.5-10.542,23.5-23.5v-64.403     C463,234.661,455.657,223.362,444.293,218.312z M349.163,143l22.615,49H303v-49H349.163z M95.5,360C77.58,360,63,345.42,63,327.5     c0-17.921,14.58-32.5,32.5-32.5s32.5,14.579,32.5,32.5C128,345.42,113.42,360,95.5,360z M383.5,360     c-17.92,0-32.5-14.579-32.5-32.5c0-17.921,14.58-32.5,32.5-32.5c17.92,0,32.5,14.579,32.5,32.5C416,345.42,401.42,360,383.5,360z      M448,288h-8.5c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h8.5v8.5c0,4.687-3.813,8.5-8.5,8.5h-9.098     c-3.607-22.64-23.263-40-46.902-40c-23.639,0-43.295,17.36-46.902,40H142.402c-3.607-22.64-23.263-40-46.902-40     s-43.295,17.36-46.902,40H23.5c-4.687,0-8.5-3.813-8.5-8.5V303h24.5c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H15V111.5     c0-4.687,3.813-8.5,8.5-8.5h296.644c6.413,0,12.294,3.763,14.981,9.585L342.24,128H271.5c-8.547,0-15.5,6.953-15.5,15.5v32     c0,17.369,14.131,31.5,31.5,31.5h94.409l46.575,20.7l-1.18,0.716C420.332,232.649,416,240.346,416,248.503V263.5     c0,4.143,3.358,7.5,7.5,7.5H448V288z M288,143v49h-0.5c-9.098,0-16.5-7.402-16.5-16.5v-32c0-0.275,0.224-0.5,0.5-0.5H288z      M448,256h-17v-7.496c0-2.95,1.567-5.734,4.088-7.266l8.616-5.231c2.707,2.982,4.296,6.911,4.296,11.089V256z" fill="#f15f2a"/>
														<path d="M327.5,288h-176c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h176c4.142,0,7.5-3.357,7.5-7.5S331.642,288,327.5,288z" fill="#f15f2a"/>
														<path d="M119.5,120c-4.142,0-7.5,3.357-7.5,7.5V160h-9v-32.5c0-4.143-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.357-7.5,7.5V160h-9v-32.5     c0-4.143-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.357-7.5,7.5v48c0,12.958,10.542,23.5,23.5,23.5H88v64.5c0,4.143,3.358,7.5,7.5,7.5     c4.142,0,7.5-3.357,7.5-7.5V199h0.5c12.958,0,23.5-10.542,23.5-23.5v-48C127,123.357,123.642,120,119.5,120z M112,175.5     c0,4.687-3.813,8.5-8.5,8.5h-16c-4.687,0-8.5-3.813-8.5-8.5V175h33V175.5z" fill="#f15f2a"/>
														<path d="M151.5,271c4.142,0,7.5-3.357,7.5-7.5V231h15.056c4.565,0,8.876-1.998,11.827-5.481     c2.951-3.483,4.212-8.063,3.462-12.567l-13.244-79.465C174.799,125.672,168.103,120,160.14,120c-8.9,0-16.14,7.24-16.14,16.14     V263.5C144,267.643,147.358,271,151.5,271z M159,136.14c0-0.628,0.511-1.14,1.181-1.14c0.56,0,1.033,0.4,1.125,0.953     l13.244,79.465c0.01,0.063,0.038,0.229-0.111,0.405C174.288,216,174.12,216,174.056,216H159V136.14z" fill="#f15f2a"/>
													</g>
												</g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											</svg>
								</div>
							</div>
							<div class="t2">
								<div class="p1">
									Швидка доставка
								</div>
							</div>
							<div class="t3">
								<div class="p1">
									Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="up go-to-block" data-target=".reservation"><i class="fas fa-angle-double-up"></i></div>
		<?php include 'blocks/footer.php'; ?>
		<?php include 'blocks/modals.php'; ?>

	</body>

	</html>