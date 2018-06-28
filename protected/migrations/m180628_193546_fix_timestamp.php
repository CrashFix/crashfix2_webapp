<?php

class m180628_193546_fix_timestamp extends CDbMigration
{
        public function safeUp()
        {
            $this->alterColumn('{{module}}', 'timestamp','INTEGER UNSIGNED');
            $this->alterColumn('{{bug_change}}', 'timestamp', 'INTEGER UNSIGNED NOT NULL');
            $this->alterColumn('{{operation}}', 'timestamp', 'INTEGER UNSIGNED NOT NULL');
        }

        public function safeDown()
        {
            $this->alterColumn('{{module}}', 'timestamp', 'INTEGER');
            $this->alterColumn('{{bug_change}}', 'timestamp', 'INTEGER NOT NULL');
            $this->alterColumn('{{operation}}', 'timestamp', 'INTEGER NOT NULL');
        }       
}
