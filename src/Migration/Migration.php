<?php
/**
 * Created by PhpStorm.
 * User: arnab
 * Date: 3/22/19
 * Time: 12:15 PM
 */

namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init()  {
        $this->capsule = new Capsule;
        $this->capsule->addConnection([
            'driver' => 'your driver',
            'host' => 'your host',
            'database' => 'Test',
            'username' => 'Test',
            'password' => 'Test',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $this->capsule->bootEloquent();//register eloquent
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}