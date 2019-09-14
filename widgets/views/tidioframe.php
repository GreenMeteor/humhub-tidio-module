<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\tidio\Assets::register($this);
?>

<?= Html::beginTag('div') ?>
<script src="<?= $tidioUrl; ?>"></script>
<?= Html::endTag('div'); ?>
