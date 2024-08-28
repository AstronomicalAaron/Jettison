<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Inertia\Inertia;
use Inertia\Response;

class ForumController extends Controller
{
    public function edit(): Response
    {
        return Inertia::render('Forum', [
            'forums' => [],
        ]);
    }

    public function update(): \Illuminate\Http\Response
    {
        return response('updating a forum');
    }

    public function destroy(): \Illuminate\Http\Response
    {
        return \response('deleting a forum');
    }
}
