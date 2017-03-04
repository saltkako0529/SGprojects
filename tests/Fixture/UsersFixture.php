<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'id', 'autoIncrement' => true, 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'created', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'modified', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前', 'precision' => null, 'fixed' => null],
        'type' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ユーザタイプ', 'precision' => null, 'autoIncrement' => null],
        'affiliation' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '所属', 'precision' => null, 'autoIncrement' => null],
        'employment' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '雇用形態', 'precision' => null, 'autoIncrement' => null],
        'email' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス', 'precision' => null, 'fixed' => null],
        'loginid' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ユーザID', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード', 'precision' => null, 'fixed' => null],
        'color' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'カラー選択', 'precision' => null, 'autoIncrement' => null],
        'filepath' => ['type' => 'string', 'length' => 320, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '画像パス', 'precision' => null, 'fixed' => null],
        'remarks' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'created' => '2017-02-06 03:32:10',
            'modified' => '2017-02-06 03:32:10',
            'name' => 'Lorem ipsum dolor sit amet',
            'type' => 1,
            'affiliation' => 1,
            'employment' => 1,
            'email' => 'Lorem ipsum dolor ',
            'loginid' => 'Lorem ipsum dolor ',
            'password' => 'Lorem ipsum dolor sit amet',
            'color' => 1,
            'filepath' => 'Lorem ipsum dolor sit amet',
            'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
