<?php
/*
Template Name: Список предприятий
*/
?>

<?php get_header(); ?>
<main>
    <section class="companies">
      <h4>Главная / Предприятия</h4>
      <h1 class="companies-header">Предприятия</h1>
      <div class="filter-btns">
        <div class="filter-btns-container">
          <h3>Сортировка</h3>
          <button>Предприятия по алфавиту</button>
          <button>Предприятия по регионам</button>
        </div>
        <div class="search-region">
          <h3>Регион</h3>
          <div class="select-wrapper">
            <select class="dropdown">
              <option value="">Все регионы</option>
              <option value="2023">Регион1</option>
              <option value="2022">Регион2</option>
            </select>
          </div>
        </div>
        <div class="search">
          <img src="../images/search.svg" />
          <input class="search__input" placeholder="Поиск по преприятиям" />
        </div>
      </div>
      <div class="alphabet-btns">
        <button>А</button>
        <button>Б</button>
        <button>В</button>
        <button>Г</button>
        <button>Д</button>
        <button>Е</button>
        <button>Ж</button>
        <button>З</button>
        <button>И</button>
        <button>Й</button>
        <button>К</button>
        <button>Л</button>
        <button>М</button>
        <button>Н</button>
        <button>О</button>
        <button>П</button>
        <button>Р</button>
        <button>С</button>
        <button>Т</button>
        <button>У</button>
        <button>Ф</button>
        <button>Х</button>
        <button>Ц</button>
        <button>Ч</button>
        <button>Ш</button>
        <button>Щ</button>
        <button>Э</button>
        <button>Ю</button>
        <button>Я</button>
      </div>
      <div class="companies-content">
        <div class="letter-list">
          <div class="letter-quantity">
            <h1>А</h1>
            <h3>2 предприятия</h3>
          </div>
          <div class="companies-container">
            <div class="company-info">
              <h3>ООО «Грэйд»</h3>
              <h4>
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </h4>
              <div class="company-contacts">
                <div class="info-headers">
                  <h4>Адрес</h4>
                  <h4>Телефон</h4>
                  <h4>Директор</h4>
                </div>
                <div class="info-headers-content">
                  <h4>г. Хабаровск, ул. Черняховского, 7-1</h4>
                  <h4>(4212) 504544</h4>
                  <h4>Кожевников Алексей Олегович</h4>
                </div>
              </div>
            </div>
            <div class="company-info">
              <h3>ООО «Грэйд»</h3>
              <h4>
                Стартовал прием заявок на всероссийский конкурс бизнес-идей для предпринимателей и самозанятых
                с инвалидностью «Инвастартап-2024»
              </h4>
              <div class="company-contacts">
                <div class="info-headers">
                  <h4>Адрес</h4>
                  <h4>Телефон</h4>
                  <h4>Директор</h4>
                </div>
                <div class="info-headers-content">
                  <h4>г. Хабаровск, ул. Черняховского, 7-1</h4>
                  <h4>(4212) 504544</h4>
                  <h4>Кожевников Алексей Олегович</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>