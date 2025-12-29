<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // SECTION A — Cognitive Orientation (Questions 1-4)
            [
                'question_number' => 1,
                'section' => 'A',
                'question_text' => 'When you\'re given a new task, which approach feels most natural?',
                'order' => 1,
                'answers' => [
                    ['label' => 'A', 'text' => 'Break it down step-by-step until it makes sense.', 'clusters' => ['T', 'S']],
                    ['label' => 'B', 'text' => 'Think about the user or audience first.', 'clusters' => ['C', 'B']],
                    ['label' => 'C', 'text' => 'Look at the big picture before diving into details.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Explore the system to understand how things connect.', 'clusters' => ['S', 'T']],
                ]
            ],
            [
                'question_number' => 2,
                'section' => 'A',
                'question_text' => 'Which activity sounds more enjoyable?',
                'order' => 2,
                'answers' => [
                    ['label' => 'A', 'text' => 'Solving puzzles or logical problems.', 'clusters' => ['T', 'S']],
                    ['label' => 'B', 'text' => 'Designing or sketching something visually appealing.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Mapping out a plan or organising information.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Finding flaws or risks in something.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 3,
                'section' => 'A',
                'question_text' => 'How do you feel about technical complexity?',
                'order' => 3,
                'answers' => [
                    ['label' => 'A', 'text' => 'It excites me — I like figuring things out.', 'clusters' => ['T', 'S']],
                    ['label' => 'B', 'text' => 'I prefer creativity or interaction over complexity.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'I can handle it, but only if tied to a project or goal.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'I enjoy understanding rules and structures.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 4,
                'section' => 'A',
                'question_text' => 'If learning a new tool or system, you prefer:',
                'order' => 4,
                'answers' => [
                    ['label' => 'A', 'text' => 'Experimenting and testing until you understand it.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'Watching a demo and imagining how it could look better.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Reading an overview or guide first.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Checking settings, safeguards, and how it behaves.', 'clusters' => ['S']],
                ]
            ],

            // SECTION B — Behavioural Traits (Questions 5-8)
            [
                'question_number' => 5,
                'section' => 'B',
                'question_text' => 'In group projects, you naturally become:',
                'order' => 5,
                'answers' => [
                    ['label' => 'A', 'text' => 'The builder/problem-solver.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'The designer/creative thinker.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'The organiser/planner.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'The checker/quality controller.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 6,
                'section' => 'B',
                'question_text' => 'Which describes you best?',
                'order' => 6,
                'answers' => [
                    ['label' => 'A', 'text' => 'Persistent and analytical.', 'clusters' => ['T', 'S']],
                    ['label' => 'B', 'text' => 'Creative and expressive.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Structured and clear communicator.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Detail-oriented and vigilant.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 7,
                'section' => 'B',
                'question_text' => 'When deadlines approach, you…',
                'order' => 7,
                'answers' => [
                    ['label' => 'A', 'text' => 'Do focused, hands-on work.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'Improve the design or presentation.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Coordinate tasks and keep everyone aligned.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Double-check everything for errors or risks.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 8,
                'section' => 'B',
                'question_text' => 'How do you prefer to learn?',
                'order' => 8,
                'answers' => [
                    ['label' => 'A', 'text' => 'By doing and experimenting.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'By creating or visualising ideas.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'By understanding the reasoning and planning.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'By observing patterns and spotting mistakes.', 'clusters' => ['S']],
                ]
            ],

            // SECTION C — Motivation & Career Aspirations (Questions 9-12)
            [
                'question_number' => 9,
                'section' => 'C',
                'question_text' => 'Which outcome feels most rewarding?',
                'order' => 9,
                'answers' => [
                    ['label' => 'A', 'text' => 'I built this website/app/dashboard.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'I designed this product/experience.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'I led this team/project successfully.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'I prevented a major issue.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 10,
                'section' => 'C',
                'question_text' => 'Which future work style sounds like you?',
                'order' => 10,
                'answers' => [
                    ['label' => 'A', 'text' => 'Creating things with code or tools.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'Designing visuals or user experiences.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Organising, analysing or planning projects.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Monitoring systems and solving complex problems.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 11,
                'section' => 'C',
                'question_text' => 'What kind of impact do you want to make?',
                'order' => 11,
                'answers' => [
                    ['label' => 'A', 'text' => 'Build tools/products people rely on.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'Create experiences people enjoy.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Improve how teams or systems operate.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Protect people, systems, or information.', 'clusters' => ['S']],
                ]
            ],
            [
                'question_number' => 12,
                'section' => 'C',
                'question_text' => 'Choose a phrase that resonates most:',
                'order' => 12,
                'answers' => [
                    ['label' => 'A', 'text' => 'Let me figure out how to build this.', 'clusters' => ['T']],
                    ['label' => 'B', 'text' => 'Let me make this look and feel amazing.', 'clusters' => ['C']],
                    ['label' => 'C', 'text' => 'Let me organise this and make it work.', 'clusters' => ['B']],
                    ['label' => 'D', 'text' => 'Let me analyse this and secure it.', 'clusters' => ['S']],
                ]
            ],

            // SECTION D — Readiness & Learning Environment (Questions 13-15)
            [
                'question_number' => 13,
                'section' => 'D',
                'question_text' => 'How confident are you using a computer independently?',
                'order' => 13,
                'answers' => [
                    ['label' => 'A', 'text' => 'Very confident', 'clusters' => ['T', 'C', 'B', 'S']],
                    ['label' => 'B', 'text' => 'Moderately confident', 'clusters' => ['T', 'B', 'C']],
                    ['label' => 'C', 'text' => 'I need guidance occasionally', 'clusters' => ['C', 'B']],
                    ['label' => 'D', 'text' => 'I\'m still learning the basics', 'clusters' => ['F']],
                ]
            ],
            [
                'question_number' => 14,
                'section' => 'D',
                'question_text' => 'How many hours per week can you realistically commit?',
                'order' => 14,
                'answers' => [
                    ['label' => 'A', 'text' => '8+ hours', 'clusters' => ['T', 'C', 'B', 'S']],
                    ['label' => 'B', 'text' => '4–7 hours', 'clusters' => ['T', 'B', 'C']],
                    ['label' => 'C', 'text' => '2–3 hours', 'clusters' => ['B', 'C']],
                    ['label' => 'D', 'text' => '<2 hours', 'clusters' => ['F']],
                ]
            ],
            [
                'question_number' => 15,
                'section' => 'D',
                'question_text' => 'Do you have stable device & internet access?',
                'order' => 15,
                'answers' => [
                    ['label' => 'A', 'text' => 'Yes', 'clusters' => ['T', 'C', 'B', 'S']],
                    ['label' => 'B', 'text' => 'Yes, but limited time', 'clusters' => ['B', 'C']],
                    ['label' => 'C', 'text' => 'Sometimes', 'clusters' => ['C', 'B']],
                    ['label' => 'D', 'text' => 'No', 'clusters' => ['F']],
                ]
            ],
        ];

        foreach ($questions as $questionData) {
            $answers = $questionData['answers'];
            unset($questionData['answers']);

            $question = Question::create($questionData);

            foreach ($answers as $index => $answerData) {
                Answer::create([
                    'question_id' => $question->id,
                    'option_label' => $answerData['label'],
                    'answer_text' => $answerData['text'],
                    'clusters' => $answerData['clusters'],
                    'order' => $index + 1,
                    'is_active' => true,
                ]);
            }
        }
    }
}
