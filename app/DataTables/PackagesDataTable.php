<?php

namespace App\DataTables;

use App\Models\Meal;
use App\Models\Package;
use App\Models\State;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PackagesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query
           
        )
        )
            ->editColumn('checkbox',function($state){
                return '<div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input state-checkbox" value="'.$state->id.'" id="selectCheckbox-'.$state->id.'"><label class="custom-control-label" for="selectCheckbox-'.$state->id.'"></label></div>';
            })
     
            ->addColumn('action', function($model){
                $html='<div class="btn-group pull-right">';
                if(PerUser('packages.edit')){
                    $html.='<a href="'.route('packages.edit', $model->id).'" class="btn btn-sm btn-success"><span class="fadeIn animated bx bx-edit-alt"> </span></a>';
                }
                if(PerUser('packages.destroy')){
                    $html.='<a href="#" class="btn btn-sm btn-danger delete-this" data-id="'.$model->id.'" data-url="'.route('packages.destroy',$model->id).'"><span class="fadeIn animated bx bx-trash"> </span></a>';
                }
                $html.='</div>';
                return$html;
            })
            ->editColumn('created_at',function ($model){
                return $model->created_at?$model->created_at->format('Y-m-d H:i:s'):'';
            })

            ->rawColumns(['image','checkbox','active','default','action'  , 'is_active' ])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\State $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Package $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('medicines')
            ->columns($this->getColumns())
            ->minifiedAjax()
//                    ->dom('Bfrtip')
            ->orderBy(1)
            ->pageLength(10)
            ->lengthMenu([10, 20, 50, 100, 150])
//                    ->buttons(
//                        Button::make('export'),
//                        Button::make('print'),
//                        Button::make('reset'),
//                        Button::make('reload')
//                    )
            ;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('checkbox')
                ->title('<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="selectAllCheckbox"><label class="custom-control-label" for="selectAllCheckbox"></label></div>')
                ->searchable(false)
                ->exportable(false)
                ->printable(false)
                ->width('10px')
                ->orderable(false),
            Column::make('id'),
            Column::make('name_en'),
            Column::make('name_ar'),    
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'States_' . date('YmdHis');
    }
}
