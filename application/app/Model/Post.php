<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel
{
    public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'title' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'タイトルは必須入力です',
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'maxLength' => [
                'rule' => ['maxLength', '255'],
                'message' => 'タイトルは255文字以内で入力してください',
            ]
        ),
    );
}
