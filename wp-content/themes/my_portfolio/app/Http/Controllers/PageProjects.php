<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use Sober\Controller\Controller;
use WP_Query;

class PageProjects extends Controller
{
    /**
     * Return projects data.
     *
     * @return array
     */
    public function projects()
    {
        $args = [
            'post_type' => 'projects',
            'posts_per_page' => -1, // Fetch all projects
        ];

        $query = new WP_Query($args);
        $projects = [];

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                $project_fields = get_fields(); // Fetch all fields using ACF
                $taxonomies = get_the_terms(get_the_ID(), 'tech-stack'); // Replace 'your_taxonomy_slug' with the actual taxonomy

                // Check if terms were retrieved successfully
                if (!is_wp_error($taxonomies) && $taxonomies) {
                    $tech_stack_list = [];
                    foreach ($taxonomies as $taxonomy) {
                        $tech_stack_list[] = [
                            'term_id' => $taxonomy->term_id,
                            'name' => $taxonomy->name,
                            'slug' => $taxonomy->slug,
                        ];
                    }
                } else {
                    $tech_stack_list = []; // No taxonomies found
                }

                $projects[] = [
                    'title' => get_the_title(),
                    'ID' => get_the_ID(),
                    'fields' => $project_fields, // Add fields to the project data
                    'tech_stacks' => $tech_stack_list, // Add taxonomies to the project data
                ];
            }

            wp_reset_postdata();
        }
        
        // dd($projects);
        return $projects;
    }


    /**
     * Render the page-projects view.
     *
     * @return \Illuminate\View\View
     */
    public function projectsList()
    {
        $currentUrl = request()->url();
        $slug = basename($currentUrl);
        $page = get_page_by_path($slug);

        // Get the featured image
        $featured_image = get_the_post_thumbnail_url($page->ID);

        return view('page-projects', [
            'projects' => $this->projects(),
            'featured_image' => $featured_image,
        ]);
    }
    public function project($slug)
    {
        // Query to get the project by slug
        $args = [
            'post_type' => 'projects',
            'name' => $slug,
            'posts_per_page' => 1,
        ];

        $query = new WP_Query($args);

        // Check if the project exists
        if ($query->have_posts()) {
            $query->the_post();

            // Fetch all fields using ACF
            $project_fields = get_fields();

            // Fetch tech-stack taxonomies
            $tech_taxonomies = get_the_terms(get_the_ID(), 'tech-stack');
            
            // Prepare tech stack data
            $tech_stack_list = [];
            if (!is_wp_error($tech_taxonomies) && $tech_taxonomies) {
                foreach ($tech_taxonomies as $taxonomy) {
                    // Fetch the taxonomy image
                    $taxonomy_image = get_field('tech_stack_taxonomy_image', $taxonomy);

                    $tech_stack_list[] = [
                        'term_id' => $taxonomy->term_id,
                        'name' => $taxonomy->name,
                        'slug' => $taxonomy->slug,
                        'image' => $taxonomy_image,
                    ];
                }
            }

            // Fetch services-offered taxonomies
            $service_taxonomies = get_the_terms(get_the_ID(), 'services-offered');
            
            // Prepare services offered data
            $services_offered_list = [];
            if (!is_wp_error($service_taxonomies) && $service_taxonomies) {
                foreach ($service_taxonomies as $taxonomy) {
                    // Fetch the taxonomy image
                    $taxonomy_image = get_field('services_offered_taxonomy_image', $taxonomy);

                    $services_offered_list[] = [
                        'term_id' => $taxonomy->term_id,
                        'name' => $taxonomy->name,
                        'slug' => $taxonomy->slug,
                        'image' => $taxonomy_image,
                    ];
                }
            }

            // Prepare the project data
            $project_data = [
                'title' => get_the_title(),
                'ID' => get_the_ID(),
                'fields' => $project_fields,
                'tech_stacks' => $tech_stack_list,
                'services_offered' => $services_offered_list, // Add services offered data
            ];
            // dd($project_data);
            // Reset post data
            wp_reset_postdata();

            // Return the view with project data
            return view('single-projects', [
                'project' => $project_data,
            ]);
        } else {
            // Handle not found case
            return view('errors.404'); // Return a 404 view or handle as needed
        }
    }



}