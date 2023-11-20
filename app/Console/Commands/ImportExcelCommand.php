<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Imports\PostsImport;
use App\Models\Post;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelCommand extends Command
{
    protected $signature = 'import:excel';

    protected $description = 'Get data from excel';

    public function handle()
    {
        Excel::import(new PostsImport(), public_path('excel/posts.xlsx'));

        dd('finishhh');
    }
}
