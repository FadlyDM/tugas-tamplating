<?php

namespace app\controllers;
use app\models\Mahasiswa020;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa020Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $query = Mahasiswa020::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa020 = new Mahasiswa020;
        $randomNumber = mt_rand(100, 999); 
        $mahasiswa020 -> nim = '60200121020-' . $randomNumber;
        $mahasiswa020 -> nama = 'Muhammad Fadly Tahir';
        $mahasiswa020 -> kelas = 'C';
        $mahasiswa020 -> status = 'Baru'; 
        // $mahasiswa020 -> save();
        if ($mahasiswa020->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);

        }
        

    }

    public function actionUpdate($id = '')
    {
        $mahasiswa020 = Mahasiswa020::findOne(['id' => $id]);
        $mahasiswa020 -> status = 'Update';
        $mahasiswa020 -> kelas = 'A';
        if ($mahasiswa020->save()) {
            Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);

        }
    }
    public function actionDelete($id = '')
    {
        $mahasiswa020 = Mahasiswa020::findOne(['id' => $id]);
        if ($mahasiswa020->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }
    public function actionView($id)
    {
        $mahasiswa020 = Mahasiswa020::findOne(['id' => $id]);
        return $this->render('view', ['model' => $mahasiswa020]);
        
    }

}
