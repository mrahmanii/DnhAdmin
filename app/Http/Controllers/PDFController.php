<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\User;
use App\Boat;
use Illuminate\Support\Facades\File;

class PDFController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generatePDF($id)
    {
        $userid = 1;

        #content = File::get(storage_path('pdf.blade.php'));

        $content = view('pdf',[
            'user' => User::where('id',$id)->get()->first(),
            'boats' => Boat::where('ownerId',$id)->get()]);
        #$html = file_get_contents('pdf.blade.php');

        #$filePath = 'pdf.blade.php';
        #$content = Storage::disk('local_public')->get($filePath);
        #dd($content);

        // instantiate and use the dompdf class
        $Dompdf = new Dompdf();
        $Dompdf->loadHtml($content);

        // (Optional) Setup the paper size and orientation
        $Dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $Dompdf->render();

        // Output the generated PDF to Browser
        return $Dompdf->stream('test1',array('Attachment'=>0));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfIndex()
    {
        return view('pdf');
    }
}
