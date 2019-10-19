<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.product.add');
    }

    //All
    public function All()
    {
        $allData = Product::orderBy('id', 'desc')->get();
        return view('admin.product.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required | min:3 | max:100',
            'details' => 'required | min:10 | max: 5000',
            'image1' => 'max:500', // file only jgp and size Not more than 500 kb
            'image2' => 'max:500', // file only jgp and size Not more than 500 kb
            'image3' => 'max:500', // file only jgp and size Not more than 500 kb
            'image4' => 'max:500', // file only jgp and size Not more than 500 kb
            'image5' => 'max:500', // file only jgp and size Not more than 500 kb
        ]);
        $data = new Product();
        //For Image 1
        $image1 = $request->file('image1');
        if (!empty($image1)) {
            $image_name1 = str_random(5);
            $ext1 = strtolower($image1->getClientOriginalExtension());
            $image_full_name1 = $image_name1 . '.' . $ext1;
            $upload_path1 = 'public/images/product/';
            $image_url1 = $upload_path1 . $image_full_name1;
            $success1 = $image1->move($upload_path1, $image_full_name1);
            if ($success1) {
                $data->image1 = $image_url1;
            }
        }
        //For Image 2
        $image2 = $request->file('image2');
        if (!empty($image2)) {
            $image_name2 = str_random(5);
            $ext2 = strtolower($image2->getClientOriginalExtension());
            $image_full_name2 = $image_name2 . '.' . $ext2;
            $upload_path2 = 'public/images/product/';
            $image_url2 = $upload_path2 . $image_full_name2;
            $success2 = $image2->move($upload_path2, $image_full_name2);
            if ($success2) {
                $data->image2 = $image_url2;
            }
        }

        //For Image 3
        $image3 = $request->file('image3');
        if (!empty($image3)) {
            $image_name3 = str_random(5);
            $ext3 = strtolower($image3->getClientOriginalExtension());
            $image_full_name3 = $image_name3 . '.' . $ext3;
            $upload_path3 = 'public/images/product/';
            $image_url3 = $upload_path3 . $image_full_name3;
            $success3 = $image3->move($upload_path3, $image_full_name3);
            if ($success3) {
                $data->image3 = $image_url3;
            }
        }

        //For Image 4
        $image4 = $request->file('image4');
        if (!empty($image4)) {
            $image_name4 = str_random(5);
            $ext4 = strtolower($image4->getClientOriginalExtension());
            $image_full_name4 = $image_name4 . '.' . $ext4;
            $upload_path4 = 'public/images/product/';
            $image_url4 = $upload_path4 . $image_full_name4;
            $success4 = $image4->move($upload_path4, $image_full_name4);
            if ($success4) {
                $data->image4 = $image_url4;
            }
        }

        //For Image 5
        $image5 = $request->file('image5');
        if (!empty($image5)) {
            $image_name5 = str_random(5);
            $ext5 = strtolower($image5->getClientOriginalExtension());
            $image_full_name5 = $image_name5 . '.' . $ext5;
            $upload_path5 = 'public/images/product/';
            $image_url5 = $upload_path5 . $image_full_name5;
            $success5 = $image5->move($upload_path5, $image_full_name5);
            if ($success5) {
                $data->image5 = $image_url5;
            }
        }

        $data->name = request('name');
        $data->website = request('website');
        $data->title = request('title');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('product.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Delete($id)
    {
        $data = Product::find($id);
        $image_path1 = $data->image1;
        if (!empty($image_path1)) {
            //Delete Existing File
            @unlink($image_path1);
        }

        $image_path2 = $data->image2;
        if (!empty($image_path2)) {
            //Delete Existing File
            @unlink($image_path2);
        }

        $image_path3 = $data->image3;
        if (!empty($image_path3)) {
            //Delete Existing File
            @unlink($image_path3);
        }

        $image_path4 = $data->image4;
        if (!empty($image_path4)) {
            //Delete Existing File
            @unlink($image_path4);
        }

        $image_path5 = $data->image5;
        if (!empty($image_path5)) {
            //Delete Existing File
            @unlink($image_path5);
        }

        //Delete from Database
        $success = $data->delete();

        if ($success) {
            $notification = array(
                'messege' => 'Successfully Data Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //edit
    public function editFormShow($id)
    {
        $data = Product::findOrFail($id);
        // print_r($data);
        return view('admin.product.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = Product::find($id);
        //For Image
        //For Image 1
        $image1 = $request->file('image1');
        if (!empty($image1)) {
            $img_path1 = $data->image1;
            //Delete Existing File
            @unlink($img_path1);
            $image_name1 = str_random(5);
            $ext1 = strtolower($image1->getClientOriginalExtension());
            $image_full_name1 = $image_name1 . '.' . $ext1;
            $upload_path1 = 'public/images/product/';
            $image_url1 = $upload_path1 . $image_full_name1;
            $success1 = $image1->move($upload_path1, $image_full_name1);
            if ($success1) {
                $data->image1 = $image_url1;
            }
        }
        //For Image 2
        $image2 = $request->file('image2');
        if (!empty($image2)) {
            $img_path2 = $data->image2;
            //Delete Existing File
            @unlink($img_path2);
            $image_name2 = str_random(5);
            $ext2 = strtolower($image2->getClientOriginalExtension());
            $image_full_name2 = $image_name2 . '.' . $ext2;
            $upload_path2 = 'public/images/product/';
            $image_url2 = $upload_path2 . $image_full_name2;
            $success2 = $image2->move($upload_path2, $image_full_name2);
            if ($success2) {
                $data->image2 = $image_url2;
            }
        }

        //For Image 3
        $image3 = $request->file('image3');
        if (!empty($image3)) {
            $img_path3 = $data->image3;
            //Delete Existing File
            @unlink($img_path3);
            $image_name3 = str_random(5);
            $ext3 = strtolower($image3->getClientOriginalExtension());
            $image_full_name3 = $image_name3 . '.' . $ext3;
            $upload_path3 = 'public/images/product/';
            $image_url3 = $upload_path3 . $image_full_name3;
            $success3 = $image3->move($upload_path3, $image_full_name3);
            if ($success3) {
                $data->image3 = $image_url3;
            }
        }

        //For Image 4
        $image4 = $request->file('image4');
        if (!empty($image4)) {
            $img_path4 = $data->image4;
            //Delete Existing File
            @unlink($img_path4);
            $image_name4 = str_random(5);
            $ext4 = strtolower($image4->getClientOriginalExtension());
            $image_full_name4 = $image_name4 . '.' . $ext4;
            $upload_path4 = 'public/images/product/';
            $image_url4 = $upload_path4 . $image_full_name4;
            $success4 = $image4->move($upload_path4, $image_full_name4);
            if ($success4) {
                $data->image4 = $image_url4;
            }
        }

        //For Image 5
        $image5 = $request->file('image5');
        if (!empty($image5)) {
            $img_path5 = $data->image5;
            //Delete Existing File
            @unlink($img_path5);
            $image_name5 = str_random(5);
            $ext5 = strtolower($image5->getClientOriginalExtension());
            $image_full_name5 = $image_name5 . '.' . $ext5;
            $upload_path5 = 'public/images/product/';
            $image_url5 = $upload_path5 . $image_full_name5;
            $success5 = $image5->move($upload_path5, $image_full_name5);
            if ($success5) {
                $data->image5 = $image_url5;
            }
        }

        $data->name = request('name');
        $data->website = request('website');
        $data->title = request('title');
        $data->details = request('details');
        $successData = $data->save();


        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('product.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
