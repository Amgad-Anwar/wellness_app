<?php

namespace App\DataTables;

use App\Models\City;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CitiesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query->select('cities.id','cities.name','cities.arab_name','cities.state_id' , 'cities.is_active' )->with('state') ))
            ->editColumn('checkbox',function($city){
                return '<div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input city-checkbox" value="'.$city->id.'" id="selectCheckbox-'.$city->id.'"><label class="custom-control-label" for="selectCheckbox-'.$city->id.'"></label></div>';
            })
            ->editColumn('active', function ($city) {
                return ($city->active)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->editColumn('is_active', function ($state) {
                return ($state->is_active == 1)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->editColumn('default', function ($city) {
                return ($city->default)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->addColumn('action', function($model){
                $html='<div class="btn-group pull-right">';
                if(PerUser('cities.edit')){
                    $html.='<a href="'.route('cities.edit',['city'=>$model->id]).'" class="btn btn-sm btn-success"><span class="fadeIn animated bx bx-edit-alt"> </span></a>';
                }
                if(PerUser('cities.destroy')){
                    $html.='<a href="#" class="btn btn-sm btn-danger delete-this" data-id="'.$model->id.'" data-url="'.route('cities.destroy',['city'=>$model]).'"><span class="fadeIn animated bx bx-trash"> </span></a>';
                }
                $html.='</div>';
                return$html;
            })
            ->editColumn('created_at',function ($model){
                return $model->created_at?$model->created_at->format('Y-m-d H:i:s'):'';
            })

            ->rawColumns(['image','checkbox','active','default','action' , 'is_active'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\City $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(City $model): QueryBuilder
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
            ->setTableId('cities')
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
            Column::make('state.name'),
            Column::make('name'),
            Column::make('arab_name'),
            Column::make('is_active'),
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
        return 'Cities_' . date('YmdHis');
    }
}
