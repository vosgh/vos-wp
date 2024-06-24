<?php
/*
Template Name: Авторизация
*/
?>

<?php get_header(); ?>
    <main>
      <section class="login">
        <div class="login-form">
          <h2>Вход на сайт</h2>
          <?php if (isset($_GET['login'])) : ?>
            <?php if ($_GET['login'] == 'failed') : ?>
              <p class="error">Неверный логин или пароль. Пожалуйста, попробуйте снова.</p>
            <?php elseif ($_GET['login'] == 'empty') : ?>
              <p class="error">Поля логина и пароля не могут быть пустыми.</p>
            <?php endif; ?>
          <?php endif; ?>
          <form name="loginform" id="loginform" action="<?php echo esc_url(wp_login_url()); ?>" method="post">
            <div class="login-inp">
              <input name="log" id="user_login" type="text" placeholder="Логин" required />
            </div>
            <div class="password-inp">
              <input name="pwd" id="user_pass" type="password" placeholder="Пароль" required />
            </div>
            <label class="checkbox-remember">
              <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="custom-checkbox" />
              Запомнить меня
            </label>
            <div class="log-forgot">
              <button type="submit" name="wp-submit" id="wp-submit">Войти</button>
              <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>" />
              <div class="log-links">
                <a href="<?php echo wp_lostpassword_url(); ?>">Забыли пароль?</a>
                <a href="/">Забыли логин?</a>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>