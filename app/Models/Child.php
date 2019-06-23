<?php
declare(strict_types=1);

namespace App\Models;

use App\Request\Api;

/**
 * @package App\Models
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough 2019
 */
abstract class Child
{
    protected $id;

    protected $uri;

    protected $version;
    protected $name;
    protected $dob;
    protected $sex;
    protected $weight;
    protected $short_name;
    protected $image_uri;

    protected $total = null;
    protected $total_populated = false;

    protected $total_current_year = null;
    protected $total_current_year_populated = false;

    public function details(): array
    {
        return [
            'version' => $this->version,
            'name' => $this->name,
            'dob' => $this->dob,
            'sex' => $this->sex,
            'weight' => $this->weight,
            'short_name' => $this->short_name,
            'image_uri' => $this->image_uri
        ];
    }

    public function id(): string
    {
        return $this->id;
    }

    public function uri(): string
    {
        return $this->uri;
    }

    public function total(): array
    {
        if ($this->total_populated === false) {
            $response = Api::summaryExpenses($this->id);
            Api::setCalledURI('Total expenses for ' . $this->name, Api::lastUri());

            $this->total = [
                'name' => $this->name,
                'dob' => $this->dob,
                'total' => 0.00
            ];

            if ($response !== null) {
                if (
                    $response !== null && array_key_exists('total', $response) === true) {
                    $this->total['total'] = $response['total'];
                    $this->total_populated = true;
                }
            }
        }

        return $this->total;
    }

    /**
     * Fetch the subcategory summary for the requested child and category for the requested subcategory
     *
     * Subsequent calls of this method will not execute an expense API call if
     * called within the same request
     *
     * @return float
     */
    public function totalCurrentYear(): float
    {
        if ($this->total_current_year_populated === false) {
            $response = Api::summaryExpensesForCurrentYear($this->id);
            Api::setCalledURI('Current year expenses for ' . $this->short_name, Api::lastUri());

            $this->total_current_year = 0.00;

            if ($response !== null && array_key_exists('total', $response) === true) {
                $this->total_current_year = (float) $response['total'];
                $this->total_current_year_populated = true;
            }
        }

        return $this->total_current_year;
    }
}