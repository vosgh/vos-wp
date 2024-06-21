<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vos
 */

?>
		<footer>
      <div class="footer-inform">
        <div class="footer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Логотип Всероссийского общества слепых" class="logo-img" />
        </div>
        <div class="footer-contacts">
          <h3>Приемная</h3>
          <h4>
            Адрес: 109012, г. Москва, <br />Большой Черкасский пер., д.13, стр.4 <br />Почтовый адрес: 109992,
            <br />ГСП-2, Бокс №1 <br />+7 495 132 74 53 <br />+7 495 785 31 54 <br />E-mail: info@vos.org.ru
          </h4>
        </div>
        <div class="footer-media">
          <h3>Пресс-служба ВОС</h3>
          <h4>
            Телефон: +7 495 785 31 54 доб. 131 <br />E-Mail: press@vos.org.ru <br />Адрес: 109012, г. Москва,
            <br />Большой Черкасский пер., д.13, стр.4
          </h4>
        </div>
        <div class="footer-socials">
          <a href="https://vk.com/vosmediapress" class="social-link-vk" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" />
            <h4>МедиаВОС</h4>
          </a>
          <a
            href="https://t.me/MediaVOS"
            class="social-link-tg"
            title="Социальная сеть Телеграм"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" />
            <h4>МедиаВОС</h4>
          </a>
          <a
            href="https://www.youtube.com/channel/UCgSjzojpfXnrQGcLk4aaG-g"
            class="social-link-yt"
            title="Социальная сеть Ютуб"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" />
            <h4>МедиаВОС</h4>
          </a>
          <a href="https://vk.com/trudvos" class="social-link-vk-work" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" />
            <h4>Труд незрячих</h4>
          </a>
        </div>
        <div class="footer-btns">
          <button>Войти на сайт</button>
          <button>Вход для РО и предприятий</button>
          <button>Регистрация</button>
        </div>
      </div>
    </footer>
	<?php wp_footer(); ?>
	</body>
</html>