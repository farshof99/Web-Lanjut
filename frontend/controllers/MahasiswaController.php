<?php
namespace frontend\controllers;
class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$mahasiswa1 = "Farah Shofiyah";
    	$mahasiswa2 = "Noviyati Nur Wulan";
    	$mahasiswa3 = "Rahmawati Nurlaela";
    	$mahasiswa4 = "Achdiat fata";
    	$mahasiswa5 = "Robiah qoyimah";
    	$semester = "3";
        return $this->render('index', [
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'fs' => $mahasiswa1,
        	'nnw' => $mahasiswa2,
        	'rn' => $mahasiswa3,
        	'af' => $mahasiswa4,
        	'rq' => $mahasiswa5,
        	'smstr' => $semester
        ]);
    }
}