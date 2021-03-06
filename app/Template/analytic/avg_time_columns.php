<div class="page-header">
    <h2><?= t('Average time spent into each column') ?></h2>
</div>

<?php if (empty($metrics)): ?>
    <p class="alert"><?= t('Not enough data to show the graph.') ?></p>
<?php else: ?>
    <?= $this->app->component('chart-project-avg-time-column', array(
        'metrics' => $metrics,
        'label' => t('Average time spent'),
    )) ?>

    <table class="table-striped">
    <tr>
        <th><?= t('Column') ?></th>
        <th><?= t('Average time spent') ?></th>
    </tr>
    <?php foreach ($metrics as $column): ?>
    <tr>
        <td><?= $this->text->e($column['title']) ?></td>
        <td><?= $this->dt->duration($column['average']) ?></td>
    </tr>
    <?php endforeach ?>
    </table>

    <p class="alert alert-info">
        <?= t('This chart show the average time spent into each column for the last %d tasks.', 1000) ?>
    </p>
<?php endif ?>
