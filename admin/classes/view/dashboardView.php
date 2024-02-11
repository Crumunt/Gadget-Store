<?php

class DashboardView extends Dashboard {

    public function fetchAdminCount() {

        $result = $this->getAdminCount();

        return $result;

    }

    public function fetchProductCount() {

        $result = $this->getProductCount();

        return $result;

    }


    public function fetchOrderCount() {

        $result = $this->getOrderCount();

        return $result;

    }



}