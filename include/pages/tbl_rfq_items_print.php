<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'tbl_rfqs' => array( 'preview' => true ) ),
'totals' => array( 'ID' => array( 'totalsType' => '' ),
'RfqID' => array( 'totalsType' => '' ),
'Description' => array( 'totalsType' => '' ),
'Weight' => array( 'totalsType' => '' ),
'WeightUOMID' => array( 'totalsType' => '' ),
'PackageQuantitiy' => array( 'totalsType' => '' ),
'PackageTypeID' => array( 'totalsType' => '' ),
'HndlingQuantitiy' => array( 'totalsType' => '' ),
'HandlingTypeID' => array( 'totalsType' => '' ),
'CreateDate' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ID',
'Description',
'Weight',
'WeightUOMID',
'PackageQuantitiy',
'PackageTypeID',
'HndlingQuantitiy',
'HandlingTypeID',
'CreateDate',
'RfqID' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ID' => array( 'simple_grid_field',
'simple_grid_field10' ),
'Description' => array( 'simple_grid_field2',
'simple_grid_field11' ),
'Weight' => array( 'simple_grid_field3',
'simple_grid_field12' ),
'WeightUOMID' => array( 'simple_grid_field4',
'simple_grid_field13' ),
'PackageQuantitiy' => array( 'simple_grid_field5',
'simple_grid_field14' ),
'PackageTypeID' => array( 'simple_grid_field6',
'simple_grid_field15' ),
'HndlingQuantitiy' => array( 'simple_grid_field7',
'simple_grid_field16' ),
'HandlingTypeID' => array( 'simple_grid_field8',
'simple_grid_field17' ),
'CreateDate' => array( 'simple_grid_field9',
'simple_grid_field18' ),
'RfqID' => array( 'simple_grid_field1',
'simple_grid_field19' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'grid' => array( 'simple_grid_field10',
'simple_grid_field',
'simple_grid_field11',
'simple_grid_field2',
'simple_grid_field12',
'simple_grid_field3',
'simple_grid_field13',
'simple_grid_field4',
'simple_grid_field14',
'simple_grid_field5',
'simple_grid_field15',
'simple_grid_field6',
'simple_grid_field16',
'simple_grid_field7',
'simple_grid_field17',
'simple_grid_field8',
'simple_grid_field18',
'simple_grid_field9',
'simple_grid_field19',
'simple_grid_field1' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'simple_grid_field10' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field1' ),
'grid_field_label' => array( 'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'Description_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'Weight_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'WeightUOMID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'PackageQuantitiy_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'PackageTypeID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'HndlingQuantitiy_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'HandlingTypeID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'CreateDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'RfqID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'ID_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'Description_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'Weight_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'WeightUOMID_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'PackageQuantitiy_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'PackageTypeID_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'HndlingQuantitiy_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'HandlingTypeID_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'CreateDate_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'RfqID_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'ID',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'ID',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'Description',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'Description',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'Weight',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'Weight',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'WeightUOMID',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'WeightUOMID',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'PackageQuantitiy',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'PackageQuantitiy',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'PackageTypeID',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'PackageTypeID',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'HndlingQuantitiy',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'HndlingQuantitiy',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'HandlingTypeID',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'HandlingTypeID',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'CreateDate',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'CreateDate',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'RfqID',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'RfqID',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'tbl_rfqs' => 'true' ) ),
'simple_grid_field' => array( 'field' => 'ID',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'ID' ),
'simple_grid_field2' => array( 'field' => 'Description',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'Description' ),
'simple_grid_field3' => array( 'field' => 'Weight',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'Weight' ),
'simple_grid_field4' => array( 'field' => 'WeightUOMID',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'WeightUOMID' ),
'simple_grid_field5' => array( 'field' => 'PackageQuantitiy',
'type' => 'grid_field' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'PackageQuantitiy' ),
'simple_grid_field6' => array( 'field' => 'PackageTypeID',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'PackageTypeID' ),
'simple_grid_field7' => array( 'field' => 'HndlingQuantitiy',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'HndlingQuantitiy' ),
'simple_grid_field8' => array( 'field' => 'HandlingTypeID',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'HandlingTypeID' ),
'simple_grid_field9' => array( 'field' => 'CreateDate',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'CreateDate' ),
'simple_grid_field1' => array( 'field' => 'RfqID',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'RfqID' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>