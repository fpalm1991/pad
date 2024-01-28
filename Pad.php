<?php

class Pad {
    public function __construct(
        private readonly string $str
    ) {}

    public function leftPad(int $lengthPadding = 0): string {
        $leftPadding = str_repeat(' ', $lengthPadding);
        return $leftPadding . trim($this->str);
    }

    public function rightPad(int $lengthPadding = 0): string {
        $rightPadding = str_repeat(' ', $lengthPadding);
        return trim($this->str) . $rightPadding;
    }

    public static function printLine(string $strValue): void {
        echo $strValue . "\n";
    }

    public static function test(): void {
        $testing = 'Testing';
        $pad = new Pad($testing);

        $lengths = [0, 1, 2, 3, 4, 5];

        foreach ($lengths as $length) {
            Pad::printLine($pad->leftPad($length));
        }

        foreach ($lengths as $length) {
            Pad::printLine($pad->rightPad($length) . ';)');
        }
    }
}

Pad::test();