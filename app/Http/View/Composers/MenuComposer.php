<?php
 
namespace App\View\Composers;
 
use App\Services\CategoryService;
use Illuminate\View\View;

class MenuComposer
{
    private $categoryService;
    public function __construct(CategoryService $categoryService) 
    {
        $this->categoryService = $categoryService;
    }
 

    public function compose(View $view)
    {
            $categories =  $this->categoryService->getParentCategory();
            return $view->with('menu', $categories);
    }
}