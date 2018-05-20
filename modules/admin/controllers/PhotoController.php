<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use app\modules\admin\models\Photo;
use app\modules\admin\models\PhotoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\UploadForm;
use yii\web\UploadedFile;

/**
 * PhotoController implements the CRUD actions for Photo model.
 */
class PhotoController extends Controller
{
	public $layout = 'main0';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
		    'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'update', 'view', 'create', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
					
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Photo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhotoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Photo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Photo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new photo();
		$uploadForm = new UploadForm();	
		
        if ($model->load(Yii::$app->request->post()) && $uploadForm->load(Yii::$app->request->post()) ) {
            $isValid = $model->validate();
            $isValidf = $uploadForm->validate();
			if ($isValid) {			
				$uploadForm->imageFile = UploadedFile::getInstance($uploadForm, 'imageFile');
                $dir = Yii::getAlias('@webroot') . '/uploads/images/';				
				if ($uploadForm->upload($dir, null, 'photo')) {
					$model->img_path = $uploadForm->imageName;
				    $model->save(false);
					Yii::$app->session->setFlash('success', "Продукт успешно добавлен");
                    return $this->redirect(['view', 'id' => $model->id]);
                }else{
					Yii::$app->session->setFlash('error', "Продукт не добавлен");
                    return $this->redirect(['view', 'id' => $model->id]);			 
				}
				
            }else{
				die("no valid");
			}
			
        }
        return $this->render('create', [
            'model' => $model,
            'uploadForm' => $uploadForm,
        ]);
    }

    /**
     * Updates an existing Photo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$uploadForm = new UploadForm();
			
        if ($model->load(Yii::$app->request->post()) && $uploadForm->load(Yii::$app->request->post())) {
			$isValid = $model->validate();
            $isValidf = $uploadForm->validate();
			
			if ($isValid) {  
                //die("valid");	
                $uploadForm->imageFile = UploadedFile::getInstance($uploadForm, 'imageFile');			
                $model->save();
				if (!empty($uploadForm->imageFile)) {
					//die('file is');
					$current_image = $model->img_path;
					 $dir = Yii::getAlias('@webroot') . '/uploads/images/';	
					$uploadForm->upload($dir, $current_image, 'photo');
				   
                   
                }else {
					//die('file is not');
				}
				Yii::$app->session->setFlash('success', "Продукт успешно обновлен");
                return $this->redirect(['view', 'id' => $model->id]);				
				
				
            }else{
				die("no valid");
			}
	
        }
        return $this->render('update', [
            'model' => $model,
			'uploadForm' => $uploadForm,
        ]);
    }

    /**
     * Deletes an existing Photo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
		$model = $this->findModel($id);
        $current_image = $model->img_path;
		//удаляем файл, если он есть
        $dir = Yii::getAlias('@webroot') . '/uploads/images/';				
          if($current_image!=='' && file_exists($dir .$current_image)) { 
            unlink($dir .$current_image);
        }
		
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "Продукт успешно удален");
        return $this->redirect(['index']);
    }

    /**
     * Finds the Photo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Photo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Photo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
