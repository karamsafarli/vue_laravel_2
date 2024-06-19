<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Inertia\Inertia;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return Inertia::render('Home', ['reviews' => $reviews]);
    }
}