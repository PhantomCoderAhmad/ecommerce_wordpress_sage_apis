<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
    public function index()
    {
        $args = [
            'post_type' => 'profile',
            'posts_per_page' => -1, // Fetch all profiles
        ];
        $query = new WP_Query($args);
        $profile = []; // Change to an array to hold multiple profiles
        
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $project_fields = get_fields(); // Fetch all fields using ACF

                // Fetch accomplishments
                $accomplishments = $this->getAccomplishments();
                $skills = $this->getSkills();
                $expertise = $this->getExpertise();


                $profile = [
                    'title' => get_the_title(),
                    'ID' => get_the_ID(),
                    'fields' => $project_fields,
                    'accomplishments' => $accomplishments,
                    'skills' => $skills,
                    'expertise' => $expertise
                ];
            }
            wp_reset_postdata();
        }
        // dd($profile);
        return view('index', [
            'profile' => $profile,
        ]);
    }

    private function getAccomplishments()
    {
        $terms = get_the_terms(get_the_ID(), 'accomplishment');
        $data = [];

        if (!is_wp_error($terms) && $terms) {
            foreach ($terms as $term) {
                $term_image = get_field('accomplishment_image', 'accomplishment_' . $term->term_id); // Fetch the image for accomplishments
                $data[] = [
                    'term_id' => $term->term_id,
                    'name' => $term->name,
                    'slug' => $term->slug,
                    'description' => $term->description,
                    'image' => $term_image, // Include the image field for accomplishments
                ];
            }
        }
        return $data;
    }

    private function getSkills()
    {
        $terms = get_the_terms(get_the_ID(), "skills");
        $data = [];

        if (!is_wp_error($terms) && $terms) {
            foreach ($terms as $term) {
                $data[] = [
                    'term_id' => $term->term_id,
                    'name' => $term->name,
                    'slug' => $term->slug,
                    'description' => $term->description,
                ];
            }
        }
        return $data;
    }
    private function getExpertise()
    {
        $terms = get_the_terms(get_the_ID(), "expertise");
        
        $data = [];

        if (!is_wp_error($terms) && $terms) {
            foreach ($terms as $term) {
                $term_image = get_field('expertise_image', 'expertise_' . $term->term_id);
                $data[] = [
                    'term_id' => $term->term_id,
                    'name' => $term->name,
                    'slug' => $term->slug,
                    'description' => $term->description,
                    'image' => $term_image, // Include the image field for expertise
                ];
            }
        }
        return $data;
    }
}
