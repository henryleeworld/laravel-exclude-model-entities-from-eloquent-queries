<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Exception;

class ArticlesController extends Controller
{
    public function exclude() 
    {
        $article = Article::query()->findOrFail(1);
        echo '取得文章編號：' . $article->id . PHP_EOL;
        $article->addToExclusion();
        if ($article->excluded()) {
            echo '將文章編號：' . $article->id . ' ' . '設定排除' . PHP_EOL;
        }
        try {
            Article::findOrFail(1);
        } catch (Exception $e) {
            echo '文章編號：' . $article->id . ' ' . '無法取得' . PHP_EOL;
        }
    }
}
