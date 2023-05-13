#!/bin/bash
echo "\n\n Запуск установки \n"

php yii migrate
echo "\n\n Базы созданы \n";

php yii gii/model --tableName=cart --modelClass=Cart --ns="app\models\db"
php yii gii/model --tableName=categories --modelClass=Categories --ns="app\models\db"
php yii gii/model --tableName=orders --modelClass=Orders --ns="app\models\db"
php yii gii/model --tableName=posts --modelClass=Posts --ns="app\models\db"
php yii gii/model --tableName=products --modelClass=Products --ns="app\models\db"
php yii gii/model --tableName=settings --modelClass=Settings --ns="app\models\db"
echo "\n\n Модели баз данных созданы \n";

echo "\n\n Установка завершена \n";