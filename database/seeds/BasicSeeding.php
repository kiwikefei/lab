<?php

use App\Tag;
use App\Category;

class TagsAndCategoriesSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $tags = [
        1   => [ 'name' => 'Laravel' ],
        2   => [ 'name' => 'Eloquent' ],
        3   => [ 'name' => 'ECMAScript 6' ],
        4   => [ 'name' => 'Vue.js' ],
        5   => [ 'name' => 'React' ],
    ];
    protected $categories = [
        1   => [ 'name' => 'Php' ],
        2   => [ 'name' => 'Sql' ],
        3   => [ 'name' => 'Frontend' ],
        4   => [ 'name' => 'Testing' ],
        5   => [ 'name' => 'Workflow' ],
        6   => [ 'name' => 'Trick' ],
        7   => [ 'name' => 'Life' ],
    ];
    public function run()
    {
        $this->emptyTables(['tags', 'categories']);
        $this->message('tables truncated');
        $this->message('seeding stander tags...');
        $this->seedTags();
        $this->message('seeding stander categories...');
        $this->seedCategories();
        $this->message('done.');
    }
    private function seedTags()
    {
        collect($this->tags)->each(function($tag){
            Tag::create($tag);
        });
    }
    private function seedCategories()
    {
        collect($this->categories)->each(function($category){
            Category::create($category);
        });
    }

}
