namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;

class StudentController extends Controller
{

    public function create()
    {
        return view('students.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:students,email',
            'age'=>'required|integer|min:18',
            'course'=>'required|string',
            'password'=>'required|min:8'
        ]);

        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'course'=>$request->course,
            'password'=>Hash::make($request->password)
        ]);

        return view('students.success');
    }
}