<?php
/**
 * File Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Satoru Majima <neo.otokomae@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('WysiwygFileController', 'Wysiwyg.Controller');

/**
 * Image Controller
 *
 * @author Satoru Majima <neo.otokomae@gmail.com>
 * @package NetCommons\Wysiwyg\Controller
 */
class WysiwygImageController extends WysiwygFileController {

/**
 * uploadFileモデル用の validation設定
 *
 * @var array
 */
	protected $_validate = [
		'real_file_name' => [
			'rule' => ['isValidMimeType', ['image/gif', 'image/png', 'image/jpg', 'image/jpeg']],
			'message' => 'File is not a image'
		]
	];
}
