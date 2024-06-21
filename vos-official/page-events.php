<?php
/*
Template Name: События
*/
?>

<?php get_header(); ?>
<main>
<section class="events">
      <h4>Главная / Мероприятия</h4>
      <h1>Мероприятия</h1>
      <div class="events-container">
        <div class="filter-btns">
          <div class="date-filter">
            <div class="year">
              <h3>Год</h3>
              <div class="year-dropdown-wrapper">
                <select class="year-dropdown">
                  <option value="">2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                </select>
              </div>
            </div>
            <div class="month">
              <h3>Год</h3>
              <div class="month-dropdown-wrapper">
                <select class="month-dropdown">
                  <option value="">Июнь</option>
                  <option value="Июль">Июль</option>
                  <option value="Август">Август</option>
                  <option value="Сентябрь">Сентябрь</option>
                  <option value="Октябрь">Октябрь</option>
                  <option value="Ноябрь">Ноябрь</option>
                  <option value="Декабрь">Декабрь</option>
                  <option value="Январь">Январь</option>
                  <option value="Февраль">Февраль</option>
                  <option value="Март">Март</option>
                  <option value="Апрель">Апрель</option>
                  <option value="Май">Май</option>
                </select>
              </div>
            </div>
            <button>Применить</button>
          </div>
          <div class="search-filter-wrapper">
            <img src="../images/search.svg" />
            <input class="filter__input" placeholder="Поиск по мероприятиям" />
          </div>
        </div>
        <div class="events-list">
          <div class="events-left">
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
          </div>
          <div class="line">
            <div class="line-left">
              <img src="../images/leftpart.svg" />
            </div>
            <div class="line-right">
              <img src="../images/rightpart.svg" />
            </div>
          </div>
          <div class="events-right">
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
            <div class="one-event">
              <div class="one-event-date">
                <img src="../images/calendar.png" />
                <p class="arcticle">17 мая 2024</p>
              </div>
              <p class="text">
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </p>
              <a href="/">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>