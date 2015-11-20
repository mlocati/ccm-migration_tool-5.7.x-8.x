<table class="migration-table table table-bordered table-striped">
    <thead>
    <tr>
        <th><?=t('Handle')?></th>
        <th><?=t('Name')?></th>
        <th><?=t('Points')?></th>
    </tr>
    </thead>
    <tbody>
    <? foreach($collection->getTypes() as $type) {
        $validator = $type->getPublisherValidator();
        ?>
        <tr <? if ($validator->skipItem()) { ?>class="migration-item-skipped"<? } ?>>
            <td><?=$type->getHandle()?></td>
            <td><?=$type->getName()?></td>
            <td><?=$type->getPoints()?></td>
        </tr>
    <? } ?>
    </tbody>
</table>