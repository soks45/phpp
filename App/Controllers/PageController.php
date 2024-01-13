<?php
    namespace App\Controllers;

    use Framework\Controller;

    class PageController extends Controller
    {
        public function page(array $arr)
        {
            return $this->view('page.php', ['arr' => $arr]);
        }

        public function create(array $arr)
        {
            return $this->view('create.php', ['arr' => $arr]);
        }

        public function update(array $arr)
        {
            return $this->view('update.php', ['arr' => $arr]);
        }
    }
