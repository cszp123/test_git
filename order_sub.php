<?php

/**
 * @Author: anchen
 * @Date:   2018-08-07 10:33:59
 * @Last Modified by:   anchen
 * @Last Modified time: 2018-08-07 14:04:38
 */
/**
 * 
 */
class OrderSub
{
    /**
     * [初始化]
     * @return [type] [description]
     */
    public function index() {
        $a = 4;
    }

    public function addOrder() {

        $mOrder = new Order();
        $mOrder->insert(['order_id' => '11111', 'status' => 2]);
    }

    public function dd() {
        
    }
}