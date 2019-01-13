<?php
    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\LoginForm;
    use app\models\Add;
    use app\models\Index;
    use app\models\Delete;
    use app\models\Update;

    /**
     *
     */
    class SiteController extends Controller
    {

        public function actionAdd()
        {
            $model = new Add();
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->addBook(Yii::$app->request->post());
                Yii::$app->session->setFlash('addSuccessfully');

                return $this->refresh();
                // return json_encode(Yii::$app->request->post()['Add']);
            }
            return $this->render('add',[
                'model' => $model,
            ]);
        }

        public function actionDelete()
        {
            $model = new Delete();
            $post = Yii::$app->request->post();
            if ($model->load($post) && $model->validate()) {

                /**
                 * 如果有要删除的数据，返回数据，没有返回false
                 */
                $hasBook = $model->findBook($post);
                if (!$hasBook) {
                    Yii::$app->session->setFlash('deleteFailed');
                    return $this->refresh();
                }
                foreach ($hasBook as $book) {
                    $model->deleteBook($book['name']);
                }
                Yii::$app->session->setFlash('deleteSuccessfully');

                return $this->refresh();
            }
            return $this->render('delete',[
                'model' => $model,
            ]);
        }

        public function actionUpdate()
        {
            $model = new Update();
            $post = Yii::$app->request->post();

            if ($model->load($post) && $model->validate()) {
                $hasBook = $model->findBook($post);
                if (!$hasBook) {
                    Yii::$app->session->setFlash('updateFailed');
                    return $this->refresh();
                }
                // return $model->updataBookInfo($hasBook['id'],$post['Update']);
                $model->updataBookInfo($hasBook['id'],$post['Update']);
                Yii::$app->session->setFlash('updateSuccessfully');
                return $this->refresh();
            }
            return $this->render('update',[
                'model' => $model
            ]);
        }

        public function actionIndex()
        {
            $model = new Index();
            $bookList = $model->getList();
            return $this->render('index', [
                'model' => $bookList,
            ]);
        }

    }

?>
