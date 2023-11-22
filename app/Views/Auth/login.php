<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" href="images/logo/logo-ki.png">
	<link href="css/my_css/login.css" rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<canvas class="orb-canvas absolute" style="z-index: -1;"></canvas>
	<!-- Overlay -->
	<div class="overlay">
		<!-- Overlay inner wrapper -->
		<div class="overlay__inner">
			<section style="z-index: 10;">
				<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
					<a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
						<img class="w-32 h-32 mr-2" src="images/logo/logo-ki.png" alt="logo">
					</a>
					<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
						<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
							<h1 class="overlay__title text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
								<span class="text-gradient">Sign In to</span> your account
							</h1>
							<form class="space-y-4 md:space-y-6" action="<?= url_to('login') ?>" method="post">
								<?= csrf_field() ?>
								<?php if ($config->validFields === ['email']) : ?>
									<div class="form-group">
										<label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username, email or phone number.</label>
										<input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
										<div class="invalid-feedback">
											<?= session('errors.login') ?>
										</div>
									</div>
								<?php else : ?><div class="form-group">
										<label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username, email or phone number.</label>
										<input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
										<div class="invalid-feedback">
											<?= session('errors.login') ?>
										</div>
									</div>
								<?php endif; ?>
								<div class="form-group">
									<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
									<input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
									<div class="invalid-feedback">
										<?= session('errors.password') ?>
									</div>
								</div>
								<div class="flex items-center justify-between">
									<?php if ($config->allowRemembering) : ?>
										<div class="flex items-start">
											<div class="flex items-center h-5">
												<input name="remember" id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" <?php if (old('remember')) : ?> checked <?php endif ?>>
											</div>
											<div class="ml-3 text-sm">
												<label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
											</div>
										</div>
									<?php endif; ?>
									<a href="#" class="text-sm font-medium text-gray-600 hover:underline dark:text-primary-500">Forgot password?</a>
								</div>
								<button type="submit" class="w-full text-white bg-gray-400 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
								<?php if (session()->has('error')) : ?>
									<?= view('/Auth/_message_block') ?>
								<?php else : ?>
									<p class="text-sm font-light text-gray-500 dark:text-gray-400">
										Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
									</p>
								<?php endif ?>
							</form>
						</div>
					</div>
					<div class="absolute right-10 bottom-0 cursor-default ">
						<div class="text-black text-xl font-bold font-['Roboto']">Powered by</div>
						<img class="w-[104px] h-[109px]" src="images/logo/imagi.png" />
					</div>
				</div>
			</section>
		</div>
	</div>
	<script type="module" src="js/my_js/pixie.js"></script>
</body>

</html>