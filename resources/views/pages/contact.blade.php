@extends('layout')
@section('content')
<div class="heading">
    <h1>our shop</h1>
    <p> <a href="home.html">home >></a> contact </p>
</div>
<section class="contact">

<div class="icons-container">

	<div class="icons">
		<i class="fas fa-phone"></i>
		<h3>our number</h3>
		<p>+123-456-7890</p>
		<p>+111-222-3333</p>
	</div>

	<div class="icons">
		<i class="fas fa-envelope"></i>
		<h3>our email</h3>
		<p>shaikhanas#gmail.com</p>
		<p>anasbhai@gmail.com</p>
	</div>

	<div class="icons">
		<i class="fas fa-map-marker-alt"></i>
		<h3>our address</h3>
		<p>mumbai, india - 400104</p>
	</div>

</div>

<div class="row">

	<form action="">
		<h3>get in touch</h3>
		<div class="inputBox">
			<input type="text" placeholder="enter your name" class="box">
			<input type="email" placeholder="enter your email" class="box">
		</div>
		<div class="inputBox">
			<input type="number" placeholder="enter your number" class="box">
			<input type="text" placeholder="enter your subject" class="box">
		</div>
		<textarea placeholder="your message" cols="30" rows="10"></textarea>
		<input type="submit" value="send message" class="btn">
	</form>
</div>
@endsection