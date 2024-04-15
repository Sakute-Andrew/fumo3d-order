<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Order;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('order_id', __('Order id'));
        $grid->column('user_id', __('User id'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('order_name', __('Order name'));
        $grid->column('order_description', __('Order description'));
        $grid->column('order_price', __('Order price'));
        $grid->column('material_id', __('Material id'));
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
        $show = new Show(Order::findOrFail($id));

        $show->field('order_id', __('Order id'));
        $show->field('user_id', __('User id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('address', __('Address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('order_name', __('Order name'));
        $show->field('order_description', __('Order description'));
        $show->field('order_price', __('Order price'));
        $show->field('material_id', __('Material id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->number('user_id', __('User id'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('address', __('Address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('order_name', __('Order name'));
        $form->text('order_description', __('Order description'));
        $form->number('order_price', __('Order price'));
        $form->number('material_id', __('Material id'));

        return $form;
    }
}
