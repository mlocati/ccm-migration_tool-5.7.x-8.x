<?php

namespace PortlandLabs\Concrete5\MigrationTool\Importer\ContentType\Formatter;

defined('C5_EXECUTE') or die("Access Denied.");

interface FormatterInterface
{

    public function getPluralDisplayName();
    public function displayObjectCollection();

}