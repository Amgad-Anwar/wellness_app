<?php

namespace App\DataTables;

use App\Models\State;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StatesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query->select('states.id','states.name','states.arab_name','states.country_id' , 'states.is_active')->with('country')->where('is_active' , 1 )
            ->when( $this->request()->country_id , function($q) {
                if($this->request()->country_id >= 1 ){
                    $q->where('country_id', $this->request()->country_id);
                }
            }, function($q) {
                $q;
            })
        )
        )
            ->editColumn('checkbox',function($state){
                return '<div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input state-checkbox" value="'.$state->id.'" id="selectCheckbox-'.$state->id.'"><label class="custom-control-label" for="selectCheckbox-'.$state->id.'"></label></div>';
            })
            ->editColumn('active', function ($state) {
                return ($state->active)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->editColumn('is_active', function ($state) {
                return ($state->is_active == 1)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->editColumn('default', function ($state) {
                return ($state->default)?'<div class="badge badge-success">'.__('Yes').'</div>':'<div class="badge badge-danger">'.__('No').'</div>';
            })
            ->editColumn('total_cities', function ($state) {
                return $state->cities->count() ;
            })
            ->addColumn('action', function($model){
                $html='<div class="btn-group pull-right">';
                if(PerUser('states.edit')){
                    $html.='<a href="'.route('states.edit',['state'=>$model]).'" class="btn btn-sm btn-success"><span class="fadeIn animated bx bx-edit-alt"> </span></a>';
                }
                if(PerUser('states.destroy')){
                    $html.='<a href="#" class="btn btn-sm btn-danger delete-this" data-id="'.$model->id.'" data-url="'.route('states.destroy',['state'=>$model]).'"><span class="fadeIn animated bx bx-trash"> </span></a>';
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
    public function query(State $model): QueryBuilder
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
            ->setTableId('states')
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
            Column::make('country.name'),
            Column::make('name'),
            Column::make('arab_name'),
            Column::make('is_active'),
            Column::make('total_cities'),
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
