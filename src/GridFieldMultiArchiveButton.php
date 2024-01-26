<?php

namespace Coep\GridFieldMultiArchive;

class GridFieldMultiArchiveButton extends GridFieldApplyToMultipleRows
{
    /**
     * Shortcut to create a button that deletes all selected entries
     */
    public function __construct($targetFragment = 'after')
    {
        parent::__construct('archiveselected', _t('GridFieldMultiArchiveButton.ButtonText', 'Archive Selected'), array($this, 'archiveRecord'), $targetFragment, array(
            'class'   => 'btn btn-outline-danger mt-2 font-icon-trash-bin btn--icon-large',
            'confirm' => _t('GridFieldMultiArchiveButton.Confirm', 'Are you sure you want to archive all selected items?'),
        ));
    }


    /**
     * @param DataObject $record
     * @param int $index
     */
    public function archiveRecord($record, $index)
    {   
            $record->doArchive();
    }
}
