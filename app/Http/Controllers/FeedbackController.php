 <?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use App\Models\Feedback;
class FeedbackController extends Controller
{
    
<<<<<<< Updated upstream
//     public function index()
//     {
//         $feedbacks = Feedback::all();
       
//         return view('product.product', compact('feedbacks'));
//     }
=======
    public function index($productId)
    {
        $product = Product::findOrFail($productId);

        $feedbacks = $product->feedbacks;

        return view('product.product', compact('feedbacks'));
    }

    public function show($feedbackId)
    {
        $feedback = Feedback::findOrFail($feedbackId);
        $comments = $feedback->comments; 
        return view('product.product', ['comments' => $comments, 'feedback' => $feedback]);
    }
>>>>>>> Stashed changes
    

   
<<<<<<< Updated upstream
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
=======
    
        public function create($productId)
        {
            $product = Product::findOrFail($productId);
            $feedbacks = $product->feedbacks; 
        
            return view('product.feedback.create', compact('product', 'feedbacks'));
        }
    
        public function store(Request $request, $productId)
        {
    
            $product = Product::findOrFail($productId);
    
            $feedback = new Feedback([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'description' => $request->input('description'),
                'ratings' => $request->input('ratings'),
                'date' => now(), 
            ]);

            $product->feedbacks()->save($feedback);
    
            return redirect()->route('product.product', ['id' => $productId])
                ->with('success', 'Feedback submitted successfully');
        }
    
>>>>>>> Stashed changes


    
<<<<<<< Updated upstream
 
//     public function edit($id)
//     {
//         $feedback = Feedback::find($id);
//         return view('product.products', compact('feedback'));
//     }
=======
        // public function edit($productId, $feedbackId)
        // {
        //     $product = Product::findOrFail($productId);
        //     $feedback = Feedback::findOrFail($feedbackId);
        
        //     return view('product.product', compact('product', 'feedback'));
        // }
        
    
        /**
         * Update the specified resource in storage.
         */

         public function update(Request $request,$productId, $feedbackId)
{
            $feedback = Feedback::findOrFail($feedbackId);
            
            $request->validate([
                'description' => 'required|max:255',
            ]);
            
    
    if ($feedback->product_id != $productId) {
        abort(404);
    }

    $feedback->update([
        'description' => $request->input('description'),

    ]);
    $feedback->save();
    if ($request->ajax()) {
        return response()->json([
            'feedback' => $feedback,
        ]);
    }
    return redirect()->route('product.product', ['id' => $productId])->with('success', 'Feedback updated successfully!');
        
}

>>>>>>> Stashed changes

   
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