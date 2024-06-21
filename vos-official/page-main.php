<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>
<main>
      <section class="main-content">
        <div class="name">
          <h1>Всероссийское общество слепых</h1>
          <h2><?= CFS()->get('main_title') ?></h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/president_mainpage.svg" />
          <a>Приветственное слово<br />Президента ВОС<br />В.В. СИПКИНА</a>
        </div>
        <div class="main-content-container">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/1.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/2.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/3.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/4.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/5.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/6.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/7.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/8.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/9.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/10.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/11.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/12.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/13.png" /></div>
              <div class="swiper-slide"><img class="main-gallery" src="<?php echo get_template_directory_uri(); ?>/img/main/14.png" /></div>
            </div>
          </div>
          <div class="main-events">
            <div class="header-events">
              <h3>Мероприятия</h3>
              <a href="/">Смотреть все</a>
            </div>
            <div class="events">
              <div class="first-event">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" class="calendar" />
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»
                </h4>
              </div>
              <hr />
              <div class="second-event">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" class="calendar" />
                <h4>Президент ВОС В. В. Сипкин встретился с представителями фонда «Защитники Отечества»</h4>
              </div>
              <hr />
              <div class="third-event">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" class="calendar" />
                <h4>ООО «ИПТК «Логосвос» подтвердил статус социального предприятия</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="disabled">
        <div class="disabled-main">
          <h2>Людям с инвалидностью по зрению</h2>
          <div class="disabled-about">
            <div class="disabled-question">
              <h3>Приемная</h3>
              <h4>Вы можете обратиться к президенту ВОС с вашим вопросом</h4>
              <button>Подробнее</button>
            </div>
            <div class="disabled-join">
              <h3>Как вступить в ВОС</h3>
              <h4>Мы подготовили подробную информацию по любым вашим вопросам о вступлении в ВОС</h4>
              <button>Подробнее</button>
            </div>
          </div>
        </div>
        <div class="disabled-info">
          <div class="disabled-info-category">
            <div class="disabled-info-category-header">
              <img src="<?php echo get_template_directory_uri(); ?>/img/text.png" />
              <h3>Оформление инвалидности и получение ТСР</h3>
            </div>
            <h4>Об оказании бесплатной юридической помощи инвалида</h4>
            <div class="disabled-info-category-links">
              <a>Порядок оформлени</a>
              <a>Три способа получения ТСР</a>
              <a>ИПРА — как оформить</a>
              <a>Федеральный реестр инвалидов</a>
            </div>
          </div>
          <div class="disabled-info-category">
            <div class="disabled-info-category-header">
              <img src="<?php echo get_template_directory_uri(); ?>/img/sport.png" />
              <h3>Образование и активный образ жизни</h3>
            </div>
            <h4>Где можно заняться спортом, куда сходить и чем заняться</h4>
            <div class="disabled-info-category-links">
              <a>Социокультурная реабилитация</a>
              <a>Физкультурно-оздоровительные мероприятия и спорт</a>
            </div>
          </div>
          <div class="disabled-info-category">
            <div class="disabled-info-category-header">
              <img src="<?php echo get_template_directory_uri(); ?>/img/disabled.png" />
              <h3>Доступная среда</h3>
            </div>
            <h4>Адреса и способы проезда</h4>
            <div class="disabled-info-category-links">
              <a>Наземный транспорт</a>
              <a>Авиатранспорт</a>
              <a>Театры, кинотеатры, стадионы, библиотеки</a>
            </div>
          </div>
          <div class="disabled-info-category">
            <div class="disabled-info-category-header">
              <img src="<?php echo get_template_directory_uri(); ?>/img/help.png" />
              <h3>Помощь</h3>
            </div>
            <h4>Куда обратиться за помощью</h4>
            <div class="disabled-info-category-links">
              <a>Как получить собаку-повадыря</a>
              <a>Содействие в трудоустройстве</a>
              <a>Реабилитация инвалидов по зрению ТСР: подбор, виды, использование</a>
              <a>Вопрос-ответ</a>
            </div>
          </div>
        </div>
      </section>
      <hr class="disabled-info-line" />
      <section class="info">
        <h2>Неравнодушным</h2>
        <div class="info-container">
          <div class="info-products">
            <h3>Ознакомиться с продукцией ВОС</h3>
            <h4>Ассортимент продукции предприятий ВОС составляет более 80 наименований</h4>
            <a>Заполнить заявку</a>
          </div>
          <div class="info-partner">
            <h3>Стать партнером</h3>
            <h4>Если Вы хотите стать партнером наших мероприятий или предложить сотрудничество</h4>
            <a>Заполнить заявку</a>
          </div>
        </div>
      </section>
      <section class="news-section">
        <div class="news-container">
          <h2>Новости</h2>
          <div class="all-news">
            <div class="main-news">
              <div class="one-main-news">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <div class="main-news-description">
                  <p class="dates">28 Февраля</p>
                  <h4>
                    Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                    самозанятых с инвалидностью «Инвастартап-2024»
                  </h4>
                  <div class="tag-container">
                    <a href="/" class="tag">Регион</a>
                    <a href="/" class="tag">Культура</a>
                    <a href="/" class="tag">Встречи</a>
                  </div>
                </div>
              </div>
              <div class="one-main-news">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <div class="main-news-description">
                  <p class="dates">28 Февраля</p>
                  <h4>
                    Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                    самозанятых с инвалидностью «Инвастартап-2024»
                  </h4>
                  <div class="tag-container">
                    <a href="/" class="tag">Регион</a>
                    <a href="/" class="tag">Культура</a>
                    <a href="/" class="tag">Встречи</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="regional-news">
              <div class="one-regional-news">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <div class="regional-news-description">
                  <p class="dates">28 Февраля</p>
                  <h4>Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей»</h4>
                  <div class="tag-container">
                    <a href="/" class="tag">Регион</a>
                    <a href="/" class="tag">Культура</a>
                    <a href="/" class="tag">Встречи</a>
                  </div>
                </div>
              </div>
              <div class="one-regional-news">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <div class="regional-news-description">
                  <p class="dates">28 Февраля</p>
                  <h4>Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей»</h4>
                  <div class="tag-container">
                    <a href="/" class="tag">Регион</a>
                    <a href="/" class="tag">Культура</a>
                    <a href="/" class="tag">Встречи</a>
                  </div>
                </div>
              </div>
              <div class="one-regional-news">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <div class="regional-news-description">
                  <p class="dates">28 Февраля</p>
                  <h4>Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей»</h4>
                  <div class="tag-container">
                    <a href="/" class="tag">Регион</a>
                    <a href="/" class="tag">Культура</a>
                    <a href="/" class="tag">Встречи</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="news-feed">
              <div class="highlighted-news">
                <div class="highlighted-news-all">
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="not-highlighted-news">
                <div class="not-highlighted-news-all">
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                  <div class="highlighted-news-description">
                    <p class="dates">28 Февраля</p>
                    <h4>
                      Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                      самозанятых с инвалидностью «Инвастартап-2024»»
                    </h4>
                    <div class="tag-container">
                      <a href="/" class="tag">Регион</a>
                      <a href="/" class="tag">Культура</a>
                      <a href="/" class="tag">Встречи</a>
                    </div>
                  </div>
                </div>
              </div>
              <button>Все новости</button>
            </div>
          </div>
        </div>
      </section>
      <section class="sports">
        <h2>Спортивные события</h2>
        <div class="sport">
          <div class="sport-event-over">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
            <div class="sport-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
          </div>
          <div class="sport-event-under">
            <div class="sport-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
          </div>
          <div class="sport-event-over">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
            <div class="sport-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
          </div>
        </div>
      </section>
      <section class="cultural">
        <h2>Социо-культурные мероприятия</h2>
        <div class="cultura">
          <div class="cultura-event-over">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
            <div class="cultura-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
          </div>
          <div class="cultura-event-under">
            <div class="cultura-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
          </div>
          <div class="cultura-event-over">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
            <div class="cultura-event-description">
              <h3>Всероссийский физкультурно-спортивный фестиваль «СОЧИ»</h3>
              <h4>Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России</h4>
              <a>Подробнее </a>
            </div>
          </div>
        </div>
      </section>
      <section class="media">
        <div class="jrn-life">
          <div class="jrn-life-description">
            <h3>Журнал<br />Наша Жизнь</h3>
            <button>Подробнее</button>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/life.png" />
        </div>
        <div class="jrn-dialog">
          <h3>Журнал Диалог</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/img/dialog.png" />
          <button>Подробнее</button>
        </div>
        <div class="radio">
          <div class="radio-description">
            <h3>Радио ВОС</h3>
            <button>Подробнее</button>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/radio.png" />
        </div>
        <!--<div class="media-vos">
            <h3>МедиаВОС</h3>
            <img/>
            <button>Подробнее</button>
        </div>-->
        <img class="media-pointer" src="<?php echo get_template_directory_uri(); ?>/img/right.svg" />
      </section>
      <section class="video">
        <h2>Видео ВОС</h2>
        <div class="video-container">
          <div class="video-main">
            <div class="video-highlighted">
              <div class="imgssss">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
                <img class="pointer" src="<?php echo get_template_directory_uri(); ?>/img/right.svg" />
              </div>
              <div class="video-highlighted-description">
                <p class="dates">28 Февраля</p>
                <h3>Оформление инвалидности и получение ТСР</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
                <h4>
                  Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России
                  Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России
                </h4>
              </div>
            </div>
            <div class="video-president">
              <div class="video-president-description">
                <h3>Видеоблог президента ВОС</h3>
                <h4>
                  Президент ВОС встретился с Муфтием Москвы, главой Духовного собрания мусульман России
                  Президент ВОС встретился с
                </h4>
                <button>Смотреть блог</button>
              </div>
              <img class="president-img" src="<?php echo get_template_directory_uri(); ?>/img/president.png" />
              <img class="pointer-img" src="<?php echo get_template_directory_uri(); ?>/img/right.svg" />
            </div>
          </div>
          <div class="video-feed">
            <div class="one-video-feed">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
              <div class="one-video-feed-description">
                <p class="dates">28 Февраля</p>
                <h3>Президент ВОС встретился с Муфтием Москвы</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <hr class="between-one-video-feed" />
            <div class="one-video-feed">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
              <div class="one-video-feed-description">
                <p class="dates">28 Февраля</p>
                <h3>Президент ВОС встретился с Муфтием Москвы</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <hr class="between-one-video-feed" />
            <div class="one-video-feed">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
              <div class="one-video-feed-description">
                <p class="dates">28 Февраля</p>
                <h3>Президент ВОС встретился с Муфтием Москвы</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <hr class="between-one-video-feed" />
            <div class="one-video-feed">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
              <div class="one-video-feed-description">
                <p class="dates">28 Февраля</p>
                <h3>Президент ВОС встретился с Муфтием Москвы</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <hr class="between-one-video-feed" />
            <div class="one-video-feed">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mainnews.png" />
              <div class="one-video-feed-description">
                <p class="dates">28 Февраля</p>
                <h3>Президент ВОС встретился с Муфтием Москвы</h3>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="photo">
        <h2>Фотогалерея ВОС</h2>
        <div class="photo-container">
          <div class="photo-main">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ph_album.png" />
            <div class="photo-main-nav">
              <div class="nav-pointers">
                <img class="left-pointer" src="<?php echo get_template_directory_uri(); ?>/img/left.svg" />
                <img class="right-pointer" src="<?php echo get_template_directory_uri(); ?>/img/right.svg" />
              </div>
              <div class="nav-description">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
          </div>
          <div class="photo-feed">
            <div class="photo-content">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ph_album.png" />
              <div class="photo-content-descr">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <div class="photo-content">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ph_album.png" />
              <div class="photo-content-descr">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
            <div class="photo-content">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ph_album.png" />
              <div class="photo-content-descr">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">Регион</a>
                  <a href="/" class="tag">Культура</a>
                  <a href="/" class="tag">Встречи</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="partners">
        <h2>Партнеры</h2>
        <div class="partners-container">
          <img class="left-pointer" src="<?php echo get_template_directory_uri(); ?>/img/left.svg" />
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners.png" />
          </div>
          <img class="right-pointer" src="<?php echo get_template_directory_uri(); ?>/img/right.svg" />
        </div>
      </section>
</main>
<?php get_footer(); ?>