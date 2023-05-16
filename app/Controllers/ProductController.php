<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;

class ProductController extends Controller
{
    public function index()
    {
        $products = new ProductsModel();
        $data['products'] = $products->findAll();
        return view('products/index', $data);
    }
/* ********************************************************************* */
    public function create()
    {
        return view('products/create');
    }
/* ********************************************************************* */
    public function store()
    {
        $product = new ProductsModel();
        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            //$file->move($path );
            $imgName = $file->getRandomName();
            $file->move('public/Upload/', $imgName);
        }
        $data = [
                 'name'=> $this->request->getPost('name'),
                 'description'=> $this->request->getPost('description'),
                 'price'=> $this->request->getPost('price'),
                 'image'=> $imgName,
                ];
        $product -> save($data);
        return redirect()->to('products')->with('status', 'Your Entry is Successfully Saved');
        return view('products/store');
    }
/* ********************************************************************* */
    public function edit($id)
    {
        $products = new ProductsModel();
        $data['product'] = $products->find($id);
        return view('products/edit', $data);
    }
/* ********************************************************************* */
    public function update($id)
    {
        $products = new ProductsModel();
        $prod_item = $products->find($id);
        $old_img_name = $prod_item['image'];
        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            if (file_exists("public/Upload/".$old_img_name)) {
                unlink("public/Upload/".$old_img_name);
            }
            $imgName = $file->getRandomName();
            $file->move('public/Upload/', $imgName);
        } else {
            $imgName = $old_img_name;
        }
        $data = [
            'name'=> $this->request->getPost('name'),
            'description'=> $this->request->getPost('description'),
            'price'=> $this->request->getPost('price'),
            'image'=> $imgName,
           ];
        $products -> update($id, $data);
        return redirect()->to('/products')->with('status', 'Your Entry is Successfully Updated');
    }
/* ********************************************************************* */
    public function delete($id)
    {
        $product = new ProductsModel();
        $data = $product->find($id);
        $imgfile = $data['image'];
        if (file_exists("public/Upload/".$imgfile)) {
            unlink("public/Upload/".$imgfile);
        }
        $product->delete($id);
        return redirect()->back()->with('status', 'Your Entry is Successfully Deleted');
    }
/* ********************************************************************* */
}
