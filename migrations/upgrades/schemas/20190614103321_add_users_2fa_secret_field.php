<?php

use Phinx\Migration\AbstractMigration;

class AddUsers2FASecretField extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('directus_users');
        if (!$table->hasColumn('2fa_secret')) {
            $table->addColumn('2fa_secret', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null
            ]);

            $table->save();
        }
    }
}
