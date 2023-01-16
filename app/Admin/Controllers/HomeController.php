<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Models\Reservation;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Reservation Reports')
            ->row('<form action="/export_excel"> <input type="submit" class="btn btn-info" value="Export Excel"></input> </form>')
            // ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(6, function (Column $column) {
                    $data = Reservation::all();
                    $column->append(view('admin/reportdinein', compact('data')));
                });
                $row->column(6, function (Column $column) {
                    $data = Reservation::all();
                    $column->append(view('admin/reportdelivery', compact('data')));
                });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::dependencies());
                // });
            });
    }
}
