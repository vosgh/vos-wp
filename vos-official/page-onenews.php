<?php
/*
Template Name: Новость
*/
?>

<?php get_header(); ?>
<main>
<section class="one-news">
      <h4>Главная / Новости / Инвастартап-2024</h4>
      <div class="one-news-container">
        <div class="one-news-content">
          <div class="one-news-gallery">
            <img class="one-news-gallery__img" src="../images/mainnews.png" />
            <div class="one-news-gallery-btns">
              <!--<img class="button-arrow" src="../images/left.svg"/>
                <img class="button-arrow" src="../images/right.svg"/>-->
            </div>
          </div>
          <h2><?= CFS()->get('news-header') ?></h2>
          <div class="content-date-tags">
            <p class="dates">24 мая 2024</p>
            <div class="description-links">
              <a href="/" class="tag">tag</a>
              <a href="/" class="tag">tag</a>
              <a href="/" class="tag">tag</a>
              <a href="/" class="tag">tag</a>
              <a href="/" class="tag">tag</a>
              <a href="/" class="tag">tag</a>
            </div>
          </div>
          <div class="news-text">
            <h3 class="arcticle">Заголовок подраздела</h3>
            <p class="text">
              Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с
              инвалидностью «Инвастартап-2024». Стартовал прием заявок на всероссийский конкурс бизнес-идей
              для предпринимателей и самозанятых с инвалидностью «Инвастартап-2024». Стартовал прием заявок на
              всероссийский конкурс бизнес-идей для предпринимателей и самозанятых с инвалидностью
              «Инвастартап-2024»
            </p>
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
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                </div>
              </div>
              <div class="highlighted-news-description">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                </div>
              </div>
              <div class="highlighted-news-description">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
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
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                </div>
              </div>
              <div class="highlighted-news-description">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                </div>
              </div>
              <div class="highlighted-news-description">
                <p class="dates">28 Февраля</p>
                <h4>
                  Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и
                  самозанятых с инвалидностью «Инвастартап-2024»»
                </h4>
                <div class="tag-container">
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                  <a href="/" class="tag">tag</a>
                </div>
              </div>
            </div>
          </div>
          <button>Все новости</button>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>