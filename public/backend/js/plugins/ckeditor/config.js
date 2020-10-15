/**

 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.

 * For licensing, see LICENSE.md or http://ckeditor.com/license

 */



// CKEDITOR.editorConfig = function( config ) {

// 	// Define changes to default configuration here. For example:

// 	// config.language = 'fr';

// 	// config.uiColor = '#AADC6E';

// };

 CKEDITOR.editorConfig = function( config )

 	config.toolbar = [
		// { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
		// { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
		{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
		'/',
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
		{ name: 'others', items: [ '-' ] },
		{ name: 'about', items: [ 'About' ] }
	];

	// Toolbar groups configuration.
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'forms' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'links' },
		{ name: 'insert' },
		'/',
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'tools' },
		{ name: 'others' },
		{ name: 'about' }
	];

{





	//CKEDITOR.stylesSet.add( 'my_styles',

	//	[

	//		// Block-level styles

	//		{ name : 'Blue Title', element : 'h2', styles : { 'color' : 'Blue' } },

	//		{ name : 'Red Title' , element : 'h3', styles : { 'color' : 'Red' } },

    //

	//		// Inline styles

	//		{ name : 'CSS Style', element : 'span', attributes : { 'class' : 'my_style' } },

	//		{ name : 'Marker: Yellow', element : 'span', styles : { 'background-color' : 'Yellow' } }

	//	]);

    //

	//config.stylesSet = 'my_styles';

// Define changes to default configuration here:



config.contentsCss = '../plugin/ckeditor/CustomFonts/fonts.css';



config.allowedContent = true;





var fontsmname='Preeti Nepali/PREETI;';

config.font_names =  fontsmname+ config.font_names;

// config.font_names =  config.font_names;



config.removeButtons = 'Save';

//config.removePlugins = 'elementspath,save';

config.toolbar = 'MyToolbar';

 

	config.toolbar_MyToolbar =

	[

		

		// { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-' ] },

		// { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },

		{ name: 'styles', items : [ 'Source','Styles','Format','FontSize' ,'Bold','Italic','Underline'] },

		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-' ] },

		 { name: 'insert', items : [ 'Table','HorizontalRule','SpecialChar','PageBreak' ,'Iframe','-','Image'] },

		{ name: 'links', items : [ 'Link','Unlink' ] },

		// { name: 'tools', items : [ 'Maximize','-' ] }

	];



	config.filebrowserBrowseUrl = '../plugin/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';

   config.filebrowserImageBrowseUrl = '../plugin/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';

   config.filebrowserFlashBrowseUrl = '../plugin/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';

   config.filebrowserUploadUrl = '../plugin/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';

   config.filebrowserImageUploadUrl = '../plugin/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';

   config.filebrowserFlashUploadUrl = '../plugin/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

	

};







