<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{


    public function destroy(Request $request)
    {
        return$request->id;
        $attachment = Attachment::findOrFail($request->id)->delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('sections.index');
    }

}
