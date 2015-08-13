/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
config.filebrowserBrowseUrl = '\includes/ckfinder/ckfinder.html';

config.filebrowserImageBrowseUrl = '\includes/ckfinder/ckfinder.html?type=Images';

config.filebrowserFlashBrowseUrl = '\includes/ckfinder/ckfinder.html?type=Flash';

config.filebrowserUploadUrl = '\includes/ckfinder/connector/php/connector.php?command=QuickUpload&type=Files';

config.filebrowserImageUploadUrl = '\includes/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

config.filebrowserFlashUploadUrl = '\includes/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
