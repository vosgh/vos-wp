<?php
/*
Template Name: Форма для новости
*/
?>

<?php
    if (!is_user_logged_in()) {
        wp_redirect(home_url());
        exit;
    }
?>

<?php get_header(); ?>
    <main>
        <section class="add-news">
            <div class="add-news-form">
                <h2>Добавить новость</h2>
                <?php if (isset($_POST['submit'])) : ?>
                    <?php
                    $title = sanitize_text_field($_POST['title']);
                    $description = sanitize_textarea_field($_POST['description']);
                    $post_id = wp_insert_post(array(
                        'post_title' => $title,
                        'post_content' => $description,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'meta_input' => array(
                            '_wp_page_template' => 'page-onennes.php',
                        ),
                    ));
                    
                    if ($post_id && !empty($_FILES['photos']['name'][0])) {
                        require_once(ABSPATH . 'wp-admin/includes/file.php');
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        require_once(ABSPATH . 'wp-admin/includes/media.php');

                        foreach ($_FILES['photos']['name'] as $key => $value) {
                            if ($value) {
                                $file = array(
                                    'name' => $_FILES['photos']['name'][$key],
                                    'type' => $_FILES['photos']['type'][$key],
                                    'tmp_name' => $_FILES['photos']['tmp_name'][$key],
                                    'error' => $_FILES['photos']['error'][$key],
                                    'size' => $_FILES['photos']['size'][$key]
                                );
                                $_FILES = array('upload_attachment' => $file);
                                $attachment_id = media_handle_upload('upload_attachment', $post_id);
                                if (is_wp_error($attachment_id)) {
                                    echo "Error uploading image.";
                                } else {
                                    set_post_thumbnail($post_id, $attachment_id);
                                }
                            }
                        }
                    }

                    if ($post_id) {
                        echo '<p class="success">Новость успешно опубликована.</p>';
                    } else {
                        echo '<p class="error">Произошла ошибка. Пожалуйста, попробуйте снова.</p>';
                    }
                    ?>
                <?php else : ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photos">Фотографии</label>
                            <input type="file" id="photos" name="photos[]" multiple>
                        </div>
                        <button type="submit" name="submit">Опубликовать</button>
                    </form>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>