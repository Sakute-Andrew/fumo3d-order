<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Materials;

class MaterialsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Materials';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Materials());

        $grid->column('material_id', __('Material id'));
        $grid->column('material_name', __('Material name'));
        $grid->column('material_description', __('Material description'));
        $grid->column('material_strength', __('Material strength'));
        $grid->column('hdt', __('Hdt'));
        $grid->column('tensile_elongation', __('Tensile elongation'));
        $grid->column('material_photo', __('Material photo'))->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Materials::findOrFail($id));

        $show->field('material_id', __('Material id'));
        $show->field('material_name', __('Material name'));
        $show->field('material_description', __('Material description'));
        $show->field('material_strength', __('Material strength'));
        $show->field('hdt', __('Hdt'));
        $show->field('tensile_elongation', __('Tensile elongation'));
        $show->field('material_photo', __('Material photo'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Materials());

        $form->display('material_id', __('Material id'));

        $form->text('material_name', __('Material name'));
        $form->text('material_description', __('Material description'));
        $form->text('material_strength', __('Material strength'));
        $form->text('hdt', __('Hdt'));
        $form->text('tensile_elongation', __('Tensile elongation'));
        $form->image('material_photo', __('Material photo'));

        return $form;
    }
}
