<?php
declare(strict_types=1);


class ReaderFactory
{
    public function create($filename)
    {
        $reader = $this->createReader($filename);
        return $reader;
    }

    private function createReader($filename)
    {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if ($poscsv !== false) {
            $r = new CSVFileReader($filename);
            return $r;
        } elseif ($posxml !== false) {
            return new XMLFileReader($filename);
        } else {
            die('This filename is not supported : ' . $filename);
        }
    }
}
