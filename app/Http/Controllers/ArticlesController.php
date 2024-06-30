<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Exception;

class ArticlesController extends Controller
{
    public function exclude() 
    {
        $article = Article::query()->findOrFail(1);
        echo __('Get article ID:') . $article->id . PHP_EOL;
        $article->addToExclusion();
        if ($article->excluded()) {
            echo __('Exclude article ID: :id', ['id' => $article->id]) . PHP_EOL;
        }
        try {
            Article::findOrFail(1);
        } catch (Exception $e) {
            echo __('Article ID: :id', ['id' => $article->id]) . ' ' . __('cannot be obtained') . PHP_EOL;
        }
    }
}
