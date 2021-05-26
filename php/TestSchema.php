<?php

use PHPUnit\Framework\TestCase;
use Edxml\Schema;

class TestSchema extends TestCase
{
    public function testSchemaPath(): void
    {
        self::assertStringContainsString("schema/", Schema::PATH_3_0);
    }
}
