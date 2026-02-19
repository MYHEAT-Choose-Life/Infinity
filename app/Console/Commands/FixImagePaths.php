<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class FixImagePaths extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fix-image-paths';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix image paths for posts stored in private storage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking posts with image paths...');
        
        $posts = Post::whereNotNull('image')->get();
        
        $this->info("Found {$posts->count()} posts with images");
        
        foreach ($posts as $post) {
            $this->info("Post ID: {$post->id} | Title: {$post->title}");
            $this->info("Current image path: {$post->image}");
            
            // Check if image path doesn't start with 'images/'
            if (!str_starts_with($post->image, 'images/')) {
                // Extract filename from current path
                $filename = basename($post->image);
                $newPath = 'images/' . $filename;
                
                $this->info("Updating to: {$newPath}");
                
                // Check if file exists in new location
                if (Storage::disk('public')->exists($newPath)) {
                    $post->image = $newPath;
                    $post->save();
                    $this->info("✓ Updated successfully");
                } else {
                    $this->warn("✗ File not found in new location: storage/app/public/{$newPath}");
                }
            } else {
                $this->info("Already has correct path format");
            }
            
            $this->info('---');
        }
        
        $this->info('Done!');
        
        // Fix attachment paths
        $this->info('');
        $this->info('Checking posts with attachment paths...');
        
        $postsWithAttachments = Post::whereNotNull('attachment')->get();
        
        $this->info("Found {$postsWithAttachments->count()} posts with attachments");
        
        foreach ($postsWithAttachments as $post) {
            $this->info("Post ID: {$post->id} | Title: {$post->title}");
            $this->info("Current attachment path: {$post->attachment}");
            
            // Check if attachment path doesn't start with 'attachments/'
            if (!str_starts_with($post->attachment, 'attachments/')) {
                // Extract filename from current path
                $filename = basename($post->attachment);
                $newPath = 'attachments/' . $filename;
                
                $this->info("Updating to: {$newPath}");
                
                // Check if file exists in new location
                if (Storage::disk('public')->exists($newPath)) {
                    $post->attachment = $newPath;
                    $post->save();
                    $this->info("✓ Updated successfully");
                } else {
                    $this->warn("✗ File not found in new location: storage/app/public/{$newPath}");
                }
            } else {
                $this->info("Already has correct path format");
            }
            
            $this->info('---');
        }
        
        return 0;
    }
}
