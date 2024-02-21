<!-- <?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\LogForm;
use app\models\Question;
use yii\web\Controller;

class WebController extends Controller {

    public $layout = 'first';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionRegg() {
        $user = new Users();
        if ($user->load(Yii::$app->request->post())) {
            if ($user->register()) {
                return $this->render('ety', ['model' => $user]);
            }
        }
        // либо страница отображается первый раз, либо есть ошибка в данных
        return $this->render('entrys', ['model' => $user]);
    }

    public function actionLog() {
        
        $model = new LogForm();
        

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Получить пользователя из БД по имени пользователя
            $user = Users::findOne($model->login);

            // Сравнить введенный пароль с хешем пароля из БД
            if (Yii::$app->security->validatePassword($model->password, $user->password_hash)) {
                // Авторизовать пользователя
                Yii::$app->user->login($user);

                // Перенаправить на главную страницу
                return $this->goHome();
            } else {
                // Ошибка пароля
                $model->addError('password', 'Неверный пароль.');
            }
        }

        return $this->render('ety', ['model' => $model]);
    }
    
    public function actionQuestion()
    {

        /* Создаем экземпляр класса */
        $model = new question();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение об удачной отправке сообщения на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        /* иначе выводим форму обратной связи */
        } else {
            return $this->render('back', [
                'model' => $model,
            ]);
        }
    }
} -->