<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        Course::query()->delete();

        $courses = [
            [
                'name' => 'Introduction to Web Development',
                'description' => 'HTML, CSS, and basic JavaScript to build accessible, responsive web pages.',
            ],
            [
                'name' => 'Advanced Web Development',
                'description' => 'Modern frontend frameworks, state management, routing, and performance best practices.',
            ],
            [
                'name' => 'Database Systems',
                'description' => 'Relational design, SQL, normalization, indexing, transactions, and query optimization.',
            ],
            [
                'name' => 'Data Structures and Algorithms',
                'description' => 'Complexity analysis, arrays, lists, trees, graphs, sorting, searching, and hashing.',
            ],
            [
                'name' => 'Software Engineering',
                'description' => 'Software lifecycle, requirements, design patterns, testing, and maintenance.',
            ],
            [
                'name' => 'Operating Systems',
                'description' => 'Processes, threads, scheduling, memory management, filesystems, and concurrency.',
            ],
            [
                'name' => 'Computer Networks',
                'description' => 'Network layers, TCP/IP, routing, switching, DNS, HTTP/HTTPS, and network security basics.',
            ],
            [
                'name' => 'Mobile Application Development',
                'description' => 'Native and cross-platform mobile development, UI patterns, offline storage, and publishing.',
            ],
            [
                'name' => 'Cloud Computing',
                'description' => 'Cloud models, containerization, serverless, IaC, and cost-effective cloud architectures.',
            ],
            [
                'name' => 'Cybersecurity Fundamentals',
                'description' => 'Security principles, threat models, authentication, authorization, and secure coding.',
            ],
            [
                'name' => 'Human-Computer Interaction',
                'description' => 'User research, prototyping, accessibility, usability testing, and UX/UI design principles.',
            ],
            [
                'name' => 'Machine Learning',
                'description' => 'Supervised/unsupervised learning, model evaluation, feature engineering, and ethics.',
            ],
            [
                'name' => 'Artificial Intelligence',
                'description' => 'Search, knowledge representation, planning, reasoning, and introduction to NLP/CV.',
            ],
            [
                'name' => 'DevOps and CI/CD',
                'description' => 'Version control, pipelines, automated testing, observability, and release strategies.',
            ],
            [
                'name' => 'Project Management for Software',
                'description' => 'Agile, Scrum/Kanban, estimation, risk management, stakeholder communication, and delivery.',
            ],
            [
                'name' => 'Discrete Mathematics',
                'description' => 'Logic, sets, combinatorics, graphs, and proofs relevant to computer science.',
            ],
            [
                'name' => 'UX Design Principles',
                'description' => 'Design thinking, interaction design, information architecture, and design systems.',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['name' => $course['name']],
                ['description' => $course['description']]
            );
        }
    }
}


