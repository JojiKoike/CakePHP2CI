<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 */
class PostsController extends AppController
{
    public $components = ['RequestHandler', 'Session'];
    public $helpers = [
        'Html' => ['className' => 'BoostCake.BoostCakeHtml'],
        'Form' => ['className' => 'BoostCake.BoostCakeForm']
    ];
    public $paginate = [
      'limit' => 5,
      'order' => [
          'Post.created' => 'DESC',
      ],
      'conditions' => [
          'Post.id >' => 0,
      ]
    ];

    public function index()
    {
        $this->set('posts', $this->paginate());
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Post->create($this->request->data);
            if ($this->Post->save()) {
                $this->Session->
                setFlash(
                    __('新しい記事を受け付けました。'),
                    'alert',
                    [
                        'plugin' => 'BoostCake', 'class' => 'alert-success'
                    ]
                );
                return $this->redirect(['action'=>'index']);
            } elseif (!$this->Post->save()) {
                $this->Session->
                setFlash(
                    __('記事の投稿に失敗しました。入力内容を確認して再度投稿してください。'),
                    'alert',
                    [
                        'plugin' => 'BoostCake', 'class' => 'alert-danger'
                    ]
                );
            }
        }
    }
}
