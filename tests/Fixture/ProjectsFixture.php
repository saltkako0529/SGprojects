<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 *
 */
class ProjectsFixture extends TestFixture
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
        'name' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '案件名', 'precision' => null, 'fixed' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Users_id', 'precision' => null, 'autoIncrement' => null],
        'no' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '案件No', 'precision' => null, 'fixed' => null],
        'kind' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '案件種別', 'precision' => null, 'autoIncrement' => null],
        'clients_id' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '顧客ID', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '状況', 'precision' => null, 'autoIncrement' => null],
        'estimated' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '見積金額', 'precision' => null, 'fixed' => null],
        'billingdate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '請求予定月', 'precision' => null],
        'year' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '発注年度', 'precision' => null, 'autoIncrement' => null],
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
            'created' => '2017-02-10 11:47:10',
            'modified' => '2017-02-10 11:47:10',
            'name' => 'Lorem ipsum dolor ',
            'users_id' => 1,
            'no' => 'Lorem ',
            'kind' => 1,
            'clients_id' => 1,
            'status' => 1,
            'estimated' => 'Lorem ip',
            'billingdate' => '2017-02-10',
            'year' => 1,
            'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
