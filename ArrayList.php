<?php


class ArrayList
{
public $arrayList;
//

public function ArrayList($arr=''){
    if (is_array($arr)== true){
        $this->arrayList = $arr;
    }
    else{
        $this->arrayList= array();
    }
}
// them mot phan tu cuoi danh sach
// ham add
public  function add($obj){
    array_push($this->arrayList,$obj);
}
// xoa tat ca phan tu khoi danh sach nay
public function clear(){
    $this->arrayList= array();
}
//tra ve phan tu tai vi tri ma minh nhap

public function get($index){
    if ($this->isInteger($index) && $index < $this->size()){
        return $this->arrayList[$index];
    } else{
        die("Value in ArrayList is not found");
    }
}

// ham kiem tra danh sach nay neu khong co phan tu nao
public function isEmpty(){
    if (count($this->arrayList)==0){
        return true;
    }
    return false;
}

// loai bo phan tu da chi dinh trong danh sach nay
public function remove($index){
    if ($this->isInteger($index)){
        $newArrayList = array();
        for ($i =0; $i <$this->size(); $i++)
            if ($index != $i) $newArrayList[]= $this->get($i);
            $this->arrayList = $newArrayList;
    } else{
        die("Error to trying remove value form array <br> Integer is required ");
    }
}

public function sort(){
        sort($this->arrayList);
}
// tra ve true neu tham so chua mot gia tri so nguyen
public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/", $toCheck);
}
// tra ve tong so phan tu trong danh sach mang nay
    public  function size(){
        return count($this->arrayList);
    }
//tra ve mot mang chua tat ca caca phan tu
    public function toArray(){
        return $this->arrayList;
    }

}








































