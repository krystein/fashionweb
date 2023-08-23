<?php

class UploadModel extends Database
{
    protected function getImages()
    {
        return $this->connect()->query("SELECT * FROM  images");
    }
    protected function delete($id)
    {
        $stmt = $this->connect()->prepare("DELETE FROM images WHERE id = ?;");

        if (!$stmt->execute(array($id))) {
            $stmt = null;
            header("location: ../productlist.php?error=stmt an Error occured!");
            exit();
        }

        $stmt = null;
        echo "Products deleted successfully..";
    }
    protected function add($filename, $code, $name, $type, $price)
    {
        $stmt = $this->connect()->prepare("INSERT INTO images (filename, code, name, type, price) VALUES (?, ?, ?, ?, ?);");

        if (!$stmt->execute(array($filename, $code, $name, $type, $price))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmt failed!");
            exit();
        } else {
            $stmt = null;
            echo "Product added successfully..";
        }
    }
    protected function checkcode($code)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE code = ?;");

        if (!$stmt->execute(array($code))) {
            $stmt = null;
            header("location: ../productlist.php?error=stmt failed!");
            exit();
        }

        $result = false;
        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}