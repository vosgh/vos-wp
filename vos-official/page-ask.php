<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>
<main>
    <section class="ask">
      <div class="ask-header">
        <h4>Главная / Приемная</h4>
        <h2>Приемная</h2>
      </div>
      <div class="ask-form">
        <h3>Задайте вопрос руководству ВОС</h3>
        <p class="text">
          Обращения, поступившие с неполной или неточной информацией об отправителе, рассмотрению не подлежат.
        </p>
        <div class="form-main-info">
          <input placeholder="ФИО *" />
          <input placeholder="Email" />
          <input placeholder="Почтовый адрес *" />
        </div>
        <div class="form-info">
          <div class="info-disabled">
            <label for="disabled">Группа инвалидности</label>
            <div class="disabled-wrapper">
              <select id="disabled">
                <option value="">Нет</option>
                <option value="first">1-я группа</option>
                <option value="second">2-я группа</option>
                <option value="third">3-я группа</option>
              </select>
            </div>
          </div>
          <div class="partof">
            <label for="yesorno">Членство в ВОС</label>
            <div class="yesorno">
              <div class="form_radio_btn">
                <input type="radio" id="radio-yes" />
                <label for="radio-yes">Да</label>
              </div>
              <div class="form_radio_btn">
                <input type="radio" id="radio-no" />
                <label for="radio-no">Нет</label>
              </div>
            </div>
          </div>
        </div>
        <div class="question">
          <textarea placeholder="Ваш вопрос *"></textarea>
          <label class="checkbox-agree">
            <input class="custom-checkbox" type="checkbox" />
            Ознакомлен с Политикой конфиденциальности и обработки персональных данных на сайте и принимаю
            Согласие на обработку персональных данных
          </label>
        </div>
        <button class="send-question">Отправить вопрос</button>
      </div>
    </section>
</main>
<?php get_footer(); ?>