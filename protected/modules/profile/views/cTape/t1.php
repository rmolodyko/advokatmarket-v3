
<div class="all t1">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.modules.profile.views.cTape._t1', // представление для одной записи
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Здесь еще ничего нет',
        'summaryText'=>"",
        'pager' => array(
            'header' => '',
            'nextPageLabel' => 'Наступна >',
            'prevPageLabel' => '< Попередня',
            //'lastPageCssClass' => 'pLast',
            'nextPageCssClass' => 'pNext',
            'previousPageCssClass' => 'pPrevious',
            'selectedPageCssClass' => 'pSelected',
            'internalPageCssClass' => 'pPage',
        ),
    )); ?>
</div>