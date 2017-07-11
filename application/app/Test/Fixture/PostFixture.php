<?php
/**
 * Post Fixture
 */
class PostFixture extends CakeTestFixture
{

/**
 * Import
 *
 * @var array
 */
    public $import = array('model' => 'Post');

/**
 * Records
 *
 * @var array
 */
    public $records = array(
        array(
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'created' => '2017-07-11 22:43:19',
            'modified' => '2017-07-11 22:43:19'
        ),
    );
}
