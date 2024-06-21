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
          <div class="login-inp">
            <input placeholder="Логин" />
          </div>
          <div class="password-inp">
            <input placeholder="Пароль" />
          </div>
          <label class="checkbox-remember">
            <input class="custom-checkbox" type="checkbox" />
            Запомнить меня
          </label>
          <div class="log-forgot">
            <button>Войти</button>
            <div class="log-links">
              <a href="/">Забыли пароль?</a>
              <a href="/">Забыли логин?</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>