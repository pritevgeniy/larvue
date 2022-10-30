<?php

declare(strict_types=1);

use Cog\Laravel\Clickhouse\Migration\AbstractClickhouseMigration;

return new class extends AbstractClickhouseMigration
{
    public function up(): void
    {
        $this->clickhouseClient->write("
CREATE TABLE IF NOT EXISTS data (
  id   Int64,
  date     Date,
  text   String,
  description   String
) ENGINE = Memory;"
        );
    }
};
