<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerSampleExport implements FromArray, WithHeadings
{
    protected $invoices;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            'RestaurantCode',
            'Name',
            'Email',
            'Phone',
            'type'
        ];
	}

    public function array(): array
    {
        return $this->data;
    }
}
