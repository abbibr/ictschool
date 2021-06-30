<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a
		{
			border: 1px solid black;
			width: 500px;
			height: 250px;
		}
		.umum
		{
			margin-left: 50px;
		}
		#ul
		{
			margin-left: -20px;
		}
		#p
		{
			left: 2%;
			position: relative;
		}
		.h
		{
			left: 2%;
			position: relative;
		}
		#IT
		{
			text-align: center;
		}
		.mavzu
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="umum">
		<div class="a">
			<p id="p">Student name: Abbosov Ibrohim</p>
			<h3 class="h">9-SINF uchun</h3>
			<h3 class="h">Tuzuvchi: I.S.Abbosov</h3>
			<h3 class="h">Fizikadan masalalar</h3>
			<h3 class="h">9-05-sinf</h3>
		</div><br>

		<ul type="disk" id="ul">
			<li><b>Masalalarni yechishda to`liq yechish yo`lini ko`rsating va halqaro birliklar sistemasiga rioya qiling.</b></li>
			<li><b>Husni xatingizga e`tibor qarating.</b></li>
			<li><b>Grafiklarni chizishda aniqlikka e`tibor qarating.</b></li>
			<li><b>Daftaringizni toza tuting va tizimli yozishni o`rganing.</b></li>
		</ul>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br>

		<p id="IT">9-SINF uchun, 2021, FIZIKADAN MASALALAR, 9-05-sinfi - Tuzuvchi: I.S.Abbosov 2021 IT Fizika
		</p><br>

		<h4 class="mavzu">Masalalar</h4>
		@foreach($data as $value)
			<p>{{$loop->index+1}}. &nbsp;
			{{$value->question}}</p>
		@endforeach
		<!-- @php
			$count=true;
		@endphp
		@foreach($data as $value)
			@if($count)
				<h3 class='mavzu'><b>{{$value->mavzu}}</h3></p>
				@php
					$count=true;
				@endphp
			@endif
			<p>{{$value->id}}. &nbsp;
			{{$value->question}}</p>
		@endforeach -->
	</div>
</body>
</html>