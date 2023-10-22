 <?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use App\Models\Feedback;
class FeedbackController extends Controller
{
    
//     public function index()
//     {
//         $feedbacks = Feedback::all();
       
//         return view('product.product', compact('feedbacks'));
//     }
    

   
//     public function create()
//     {
//         return view('product.product');
//     }

//     public function store(Request $request)
//     {


//         $request->validate([
//             'name' => 'required|string',
//             'email' => 'required|email',
//             'description' => 'required|string',
//             'ratings' => 'required|integer',
//         ]);
//         $request->merge(['date' => Date::now()]);

//         Feedback::create($request->all());

//         return redirect()->route('product.product')->with('success', 'Feedback submitted successfully!');
//     }

    
 
//     public function edit($id)
//     {
//         $feedback = Feedback::find($id);
//         return view('product.products', compact('feedback'));
//     }

   
//     public function update(Request $request, $id)
// {
//     $request->validate([
//         'description' => 'required|string',
//     ]);

//     $feedback = Feedback::find($id);

//     $feedback->description = $request->input('description');
//     $feedback->save();

//     return redirect()->route('product.product')->with('success', 'Feedback updated successfully!');
// }



//     public function destroy($id)
//     {
//         Feedback::destroy($id);
//         return redirect()->route('product.product')->with('success', 'Feedback deleted successfully.');
//     }
} 