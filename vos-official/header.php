<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <header>
      <a href="<?= get_home_url(); ?>" class="logo-header" title="Логотип ВОС" alt="Логотип ВОС">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Логотип Всероссийского общества слепых" class="logo-img" />
      </a>
      <div class="container">
        <div class="header-upper">
          <div class="lang">
            <a href="/" class="text">RUS</a>
            <a href="/" class="text">ENG</a>
          </div>
          <div class="header-fullname">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ussr.png" alt="Логотип орден Всероссийского общества слепых" />
            <p class="text">
              Общероссийская общественная организация инвалидов<br />«ВСЕРОССИЙСКОЕ ОРДЕНА ТРУДОВОГО КРАСНОГО
              ЗНАМЕНИ ОБЩЕСТВО СЛЕПЫХ»
            </p>
          </div>
          <div class="social-search">
            <div class="header-social">
              <a
                href="https://t.me/MediaVOS"
                class="social-link-tg"
                title="Социальная сеть Телеграм"
                target="_blank"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="Всероссийское общество слепых в Телеграм"/>
              </a>
              <a
                href="https://www.youtube.com/channel/UCgSjzojpfXnrQGcLk4aaG-g"
                class="social-link-yt"
                title="Социальная сеть Ютуб"
                target="_blank"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt="Всероссийское общество слепых в Ютуб"/>
              </a>
              <a href="https://vk.com/vosmediapress" class="social-link-vk" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt="Всероссийское общество слепых в Вконтакте"/>
              </a>
            </div>
            <div class="header-search">
              <div class="passive-state">
                <img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" />
                <p>Поиск</p>
              </div>
              <div class="active-state">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" />
                <input type="text" placeholder="Поиск" />
              </div>
              <!--<img src="../images/search.svg" />
              <a href="/">Поиск</a>-->
            </div>
          </div>
        </div>
        <hr class="header-line" />
        <div class="header-menu">
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-item nav-about">
                <a><?= CFS()->get('menu_about_vos') ?></a>
                <ul>
                    <div class="dropdown-menu menu-block-about">
                        <div class="block-img">
                            <img src="../images/menu.png" />
                        </div>
                        <div class="block-about">
                            <h3>Пресс-релиз ВОС</h3>
                            <div class="block-about-container">
                            <h4>
                                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                                инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                            </div>
                        </div>
                        <div class="block-pages">
                            <div class="column">
                            <ul>
                                <li class="column-header">
                                <a href="/">Обзор</a>
                                </li>
                                <li>
                                <a href="/">История ВОС</a>
                                </li>
                                <li>
                                <a href="/">Символика ВОС</a>
                                </li>
                                <li>
                                <a href="/">Фильмы о ВОС</a>
                                </li>
                                <li>
                                <a href="/">Депутатский корпус ВОС</a>
                                </li>
                            </ul>
                            </div>
                            <div class="column">
                            <ul>
                                <li class="column-header">
                                <a href="/">Документы</a>
                                </li>
                                <li>
                                <a href="/">Основные нормативные акты ВОС</a>
                                </li>
                                <li>
                                <a href="/">Методические документы</a>
                                </li>
                                <li>
                                <a href="/">Советы и комиссии при ЦП ВОС</a>
                                </li>
                                <li>
                                <a href="/">Финансовая отчетность</a>
                                </li>
                                <li>
                                <a href="/">Отчетно-выборная компания</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </ul>
              </li>
              <li class="nav-item nav-news">
                <?= CFS()->get('menu_news') ?>
                <ul>
                    <div class="dropdown-menu menu-block-news">
                        <div class="block-img">
                            <img src="../images/menu.png" />
                        </div>
                        <div class="block-about">
                            <div class="block-about-container">
                            <h4>
                                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                                инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                            </div>
                        </div>
                        <div class="block-pages">
                            <div class="column">
                            <ul>
                                <li class="column-header">
                                <a href="http://vos-site/news/">Новости</a>
                                </li>
                                <li>
                                <a href="/">Центральные новости</a>
                                </li>
                                <li>
                                <a href="/">Региональные новости</a>
                                </li>
                                <li>
                                <a href="/">Социокультурные мероприятия</a>
                                </li>
                                <li>
                                <a href="/">Спортивные мероприятия</a>
                                </li>
                                <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </ul>
              </li>
              <li class="nav-item nav-management">
                <a href="/"><?= CFS()->get('menu_managment') ?></a>
                <ul>
                    <div class="dropdown-menu menu-block-managment">
                        <div class="block-img">
                            <img src="../images/menu.png" />
                        </div>
                        <div class="block-about">
                            <div class="block-about-container">
                            <h4>
                                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                                инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                            </div>
                        </div>
                        <div class="block-pages">
                            <div class="column">
                            <ul>
                                <li class="column-header">
                                <a href="/">Структура ВОС</a>
                                </li>
                                <li>
                                <a href="/">Президент ВОС</a>
                                </li>
                                <li>
                                <a href="/">Вице-президенты ВОС</a>
                                </li>
                                <li>
                                <a href="/">Съезд ВОС</a>
                                </li>
                                <li>
                                <a href="/">Аппарат управления ВОС</a>
                                </li>
                                <li>
                                <a href="/">Полномочные представители</a>
                                </li>
                            </ul>
                            </div>
                            <div class="column">
                            <ul>
                                <li class="column-header">
                                <a href="/">ВОС в лицах</a>
                                </li>
                            </ul>
                            <div class="column-img">
                                <img src="../images/president_mainpage.svg" />
                                <img src="../images/president_mainpage.svg" />
                                <img src="../images/president_mainpage.svg" />
                            </div>
                            <div class="column-img">
                                <img src="../images/president_mainpage.svg" />
                                <img src="../images/president_mainpage.svg" />
                                <img src="../images/president_mainpage.svg" />
                            </div>
                            </div>
                        </div>
                    </div>
                </ul>
              </li>
              <li class="nav-item nav-people">
                <a href="/"><?= CFS()->get('menu_disabled') ?></a>
                <ul>
                    <div class="dropdown-menu menu-block-disabled">
                        <div class="block-img">
                        <img src="../images/menu.png" />
                        </div>
                        <div class="block-about">
                        <div class="block-about-container">
                            <h4>
                            Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                            инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                        </div>
                        </div>
                        <div class="block-pages">
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Новости</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Новости</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Новости</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Новости</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </ul>
              </li>
              <li class="nav-item nav-media">
                <a href="/"><?= CFS()->get('menu_media') ?></a>
                <ul>
                    <div class="dropdown-menu menu-block-media">
                        <div class="block-img">
                        <img src="../images/media.svg" />
                        </div>
                        <div class="block-about">
                        <div class="block-about-container">
                            <h4>
                            Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                            инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                        </div>
                        </div>
                        <div class="block-pages">
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Новости</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </ul>
              </li>
              <li class="nav-item nav-structure">
                <a href="/"><?= CFS()->get('menu_structure') ?></a>
                <ul>
                    <div class="dropdown-menu menu-block-structure">
                        <div class="block-img">
                        <img src="../images/menu.png" />
                        </div>
                        <div class="block-about">
                        <div class="block-about-container">
                            <h4>
                            Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
                            инвалидностью «Инвастартап-2024»
                            </h4>
                            <a href="/">Подробнее </a>
                        </div>
                        </div>
                        <div class="block-pages">
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Региональные организации</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Промышленность</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Учреждения</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Спортивные мероприятия</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            <li>
                                <a href="/">Проекты при поддержке ФПГ</a>
                            </li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                            <li class="column-header">
                                <a href="/">Санаторий ВОС</a>
                            </li>
                            <li>
                                <a href="/">Центральные новости</a>
                            </li>
                            <li>
                                <a href="/">Региональные новости</a>
                            </li>
                            <li>
                                <a href="/">Социокультурные мероприятия</a>
                            </li>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </ul>
              </li>
            </ul>
          </nav>
          <button>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="svg-gobbler - 2024-04-19T130545.238 1">
                <g id="Group">
                <path id="EDUCATION OUTLINE" d="M30 15.4344C30 14.5731 30 13.5008 29.4363 12.6805C29.4258 12.6635 29.4141 12.6471 29.4023 12.6313L29.3813 12.6008L29.3561 12.5733C29.3457 12.5604 29.3348 12.5481 29.3232 12.5364C27.6779 10.6819 26.0648 8.7928 24.7037 7.18909C24.3791 6.80452 23.9783 6.49142 23.5266 6.26955C23.0749 6.04768 22.5821 5.92186 22.0793 5.90003H22.043C21.5419 5.88576 21.0436 5.98049 20.5827 6.17767C20.1218 6.37484 19.7092 6.66975 19.3734 7.04202C19.1753 7.26113 19.0723 7.54998 19.0872 7.84502C19.102 8.14006 19.2334 8.41713 19.4525 8.61526C19.6717 8.8134 19.9605 8.91637 20.2555 8.90154C20.5506 8.88671 20.8276 8.75527 21.0258 8.53616C21.1457 8.40248 21.2933 8.29654 21.4584 8.22571C21.6234 8.15488 21.8019 8.12085 21.9814 8.126H21.992C22.1868 8.13569 22.3775 8.18581 22.5519 8.27317C22.7263 8.36052 22.8806 8.48321 23.0051 8.63343C23.7305 9.48772 24.5285 10.4229 25.3617 11.3914C24.3504 11.3264 23.2611 11.2801 22.4859 11.2742C21.298 11.2534 20.1106 11.3395 18.9381 11.5315H18.9252C18.3612 11.6362 17.8304 11.874 17.3769 12.2252C16.9234 12.5764 16.5603 13.0308 16.3178 13.5506C15.4661 13.2409 14.5327 13.2409 13.6811 13.5506C13.356 12.8533 12.8161 12.2783 12.1406 11.91C11.8078 11.7264 11.4478 11.5972 11.0742 11.5274H11.0613C9.9791 11.3422 8.81895 11.259 7.51113 11.2701C6.7377 11.2789 5.64727 11.3246 4.64004 11.3873C5.475 10.4188 6.27129 9.48362 6.99668 8.62932C7.12112 8.47911 7.27545 8.35642 7.44986 8.26906C7.62427 8.18171 7.81494 8.13159 8.00977 8.1219H8.02031C8.19984 8.11675 8.37833 8.15078 8.54337 8.22161C8.70841 8.29244 8.85603 8.39838 8.97598 8.53206C9.17411 8.75117 9.45117 8.8826 9.74621 8.89744C10.0413 8.91227 10.3301 8.80929 10.5492 8.61116C10.7683 8.41302 10.8998 8.13596 10.9146 7.84092C10.9294 7.54588 10.8265 7.25703 10.6283 7.03792C10.2925 6.66568 9.87993 6.37079 9.41902 6.17362C8.95812 5.97645 8.4599 5.8817 7.95879 5.89593H7.92715C7.42358 5.91722 6.92992 6.04278 6.47738 6.26467C6.02483 6.48655 5.62326 6.79993 5.29805 7.18499C3.93516 8.79163 2.32266 10.6807 0.676758 12.5381C0.665625 12.5498 0.654492 12.5621 0.643945 12.575L0.619336 12.6026L0.597656 12.633C0.585938 12.6489 0.574805 12.6653 0.563672 12.6817C0 13.5032 0 14.5731 0 15.4344V17.6258C0 18.6934 0.0585937 19.0362 0.15293 19.4744C0.181641 19.6086 0.211523 19.7352 0.237891 19.9362C0.498047 21.6987 1.79062 23.2719 3.31113 23.6768L3.32637 23.6809C4.30682 23.9229 5.30997 24.0614 6.31934 24.094C6.52402 24.101 6.72539 24.1045 6.92344 24.1045C7.74397 24.1077 8.56318 24.0382 9.37148 23.8971H9.38144C10.8656 23.6205 12.3809 22.1873 13.0658 20.4119C13.5492 19.1604 13.8117 17.3211 13.9699 15.9155C14.259 15.6744 14.6236 15.5423 15 15.5423C15.3764 15.5423 15.741 15.6744 16.0301 15.9155C16.1883 17.3217 16.4508 19.1598 16.9342 20.4119C17.6191 22.1873 19.1344 23.6205 20.6191 23.8971H20.6285C21.437 24.0383 22.2564 24.1077 23.0771 24.1045C23.2764 24.1045 23.4787 24.1008 23.6842 24.0934C24.6919 24.0617 25.6935 23.9242 26.6725 23.6832L26.6871 23.6791C28.2076 23.2742 29.4996 21.701 29.7609 19.935C29.7891 19.7375 29.8166 19.611 29.8453 19.4768C29.9414 19.0362 30 18.6934 30 17.6235V15.4344ZM11.7967 15.2973C11.7158 16.0537 11.4715 18.3559 10.9875 19.608C10.6424 20.5028 9.75293 21.5574 8.97715 21.7045C8.12719 21.8503 7.26409 21.9049 6.40254 21.8674C5.55142 21.8409 4.70542 21.7254 3.87832 21.5229C3.16934 21.3295 2.55293 20.3616 2.44219 19.6139C2.40293 19.3408 2.3625 19.1545 2.33086 19.0051C2.26934 18.7203 2.22891 18.5317 2.22773 17.6258V15.4344C2.22773 15.0201 2.22773 14.4283 2.32969 14.0979C2.87285 13.8365 3.6873 13.6877 4.13145 13.6555C5.24473 13.5711 6.64453 13.5049 7.53457 13.4955C8.58721 13.4764 9.63945 13.5515 10.6787 13.7199C10.8173 13.7461 10.9508 13.7942 11.0742 13.8623C11.5693 14.1313 11.8588 14.7061 11.7967 15.2973ZM27.7734 17.6235C27.7734 18.5323 27.7318 18.7203 27.6703 19.0057C27.6381 19.1551 27.5982 19.3408 27.5596 19.611C27.4482 20.3615 26.8318 21.3295 26.1229 21.5229C24.4526 21.9219 22.7196 21.9837 21.0252 21.7045C20.2494 21.5574 19.36 20.5028 19.0148 19.608C18.5309 18.3553 18.2865 16.0537 18.2062 15.2973C18.1436 14.7114 18.433 14.1313 18.9275 13.8623C19.0511 13.794 19.1849 13.746 19.3236 13.7199C20.3621 13.5513 21.4136 13.4762 22.4654 13.4955C23.3578 13.5049 24.7582 13.5711 25.8744 13.6561C26.1738 13.6778 27.0656 13.8026 27.6721 14.0967C27.7746 14.4272 27.7746 15.0196 27.7746 15.4344V16.0573C27.7734 16.3725 27.7734 16.6754 27.7734 17.6235Z" fill="#3C66CB"/>
                </g>
                </g>
            </svg>
            [bvi text="Версия для слабовидящих"]
          </button>
        </div>
      </div>
    </header>