<?php
// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validate
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'age' => 'required|numeric|min:18|max:60',
            ],
            [
                'name.required' => 'Họ và tên không được để trống.',
                'email.required' => 'Email không được để trống.',
                'email.email' => 'Email không đúng định dạng.',
                'age.required' => 'Tuổi không được để trống.',
                'age.numeric' => 'Tuổi phải là một số.',
                'age.min' => 'Tuổi phải lớn hơn hoặc bằng 18.',
                'age.max' => 'Tuổi phải nhỏ hơn 61.',
            ]
        );

        session(
            [
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
            ]
        );

        return redirect()->route('form.result');
    }

    public function showResult()
    {
        $data = [
            'name' => session('name'),
            'email' => session('email'),
            'age' => session('age'),
        ];

        return view('result', compact('data'));
    }


    public function resetForm()
    {
        session()->forget(['name', 'email', 'age']);
        return redirect()->route('form.show');
    }
}
