<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Авторизация</title>	
		<link rel="stylesheet" href="globalsLog.css">
		<link rel="stylesheet" href="styleguideLog.css">
		<link rel="stylesheet" href="styles/loginstyle.css">
	</head>
	<body class="logged-out env-production page-responsive session-authentication intent-mouse">
	<div class="header-wrapper">
		<div class="header-logged pt-5 pb-4">
			<div class="cointainer-center">
			<a class="header-logo" href="index.html">
			<img class="logotype" src="img/logo.svg">
			</a>
			</div>
		</div>
	</div>
<div class="application-main">
    <main>
			<div class="auth-form px-3">
							<div class="auth-form-header p-0">
								<h1>Войти в МоюАкадемию</h1>
							</div>
							<div class="auth-form-body mt-3">
								<form action="login.php" method="post" name="l_form" >
										  
										   <tr>
										    <label class="login-label" for="login-field">Логин</label>
										    <td > <input type="text" name="l_login" class="form-control input-block"> </td>
										   </tr>
											<tr>
										    <label for="password">Пароль</label>
										    <td> <input type="text" name="l_password" class="form-control form-control input-block js-password-field" required=" " /> </td>
										   </tr>

										   <tr>
										    <td colspan="2"> <input type="submit" name="l_send" value="Войти" class="btn btn-primary btn-block js-sign-in-button"> </td>
										   </tr>


											<div class="login-callout mt-3">
													<webauthn-subtle class="js-webauthn-subtle" hidden="" data-catalyst="">
															<p class="mb-1 mt-0 js-webauthn-subtle-emu-control">
															<button data-action="click:webauthn-subtle#prompt" type="button" data-view-component="true" class="Button--link Button--medium Button">    <span class="Button-content">
																</span>
															</button>  
															</p>
													</webauthn-subtle>
													<p class="m-0 p-0">
														Новичок?
														<a data-ga-click="Sign in, switch to sign up" class="new-acc" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;sign in switch to sign up&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/login&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="72d062e79bb6ab076a3b88b32943286ea51894183bd812a5038d00013946f239" href="reg.php">Создать аккаунт</a>
													</p>
											</div>


										 <?php
											if ($_SESSION['message']) {
												echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
											}
											unset($_SESSION['message']);
										?>
								</form>		
							</div>
			</div>
	</main>
			

</div>
</body>


</html>