<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function getAllItems()
    {
        $students = Student::all();
        $data = [
            'status' => 200,
            'data' => $students
        ];
        return response()->json($data, 200);
    }

    public function createItem(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);
        if ($validation->fails()) {
            $data = [
                'message' => $validation->messages(),
                'status' => 422
            ];
            return response()->json($data, 422);
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->save();

            return response()->json($student, 200);
        }
    }
    public function updateItem(Request $request, String $id)
    {


        $student = Student::findorfail($id);
        $isUpdate = $student->update($request->all());

        if ($isUpdate) {
            $data = [
                'message' => 'item updated succesfully',
                'status' => 200
            ];

            return response()->json([$data, $student], 200);
        } else {
            $data = [
                'message' => 'item dont updated ',
                'status' => 200
            ];
        }
        return response()->json([$data, $student], 200);
    }

    public function deleteItem(Request $request, String $id)
    {


        $student = Student::findorfail($id);
        $student->delete();
        $data = [
            'message' => 'item deleted succesfully',
            'status' => 200
        ];

        return response()->json([$data, $student], 200);
    }

    public function getItem(String $id)
    {


        $student = Student::findorfail($id);


        return response()->json($student, 200);
    }
}
