<?php

namespace Database\Seeders;

use App\Models\PanelSession;
use App\Models\PanelSpeaker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Panel1Seeder extends Seeder
{
    public function run(): void
    {
        // ── Panel Session 1 ──────────────────────────────────────────────────
        $session = PanelSession::firstOrCreate(
            ['slug' => 'panel-1-ai-is-not-coming-its-here'],
            [
                'title'           => 'The Skills Co-op Sessions: Panel 1',
                'tagline'         => 'AI Is Not Coming, It\'s Here. Now What?',
                'description'     => 'Our first panel session brings together six practitioners from across AI, data, HR, healthcare, and tech leadership to ask a simple question: now that AI is here, what does that mean for people in underserved communities? What skills matter, what jobs are changing, and how do we make sure the people who need opportunity most are not left behind?',
                'event_date'      => '2026-06-16 18:30:00',
                'duration'        => '90 minutes',
                'format'          => 'Virtual (Riverside Live), streamed to LinkedIn and YouTube',
                'eventbrite_url'  => 'https://www.eventbrite.co.uk/e/the-skills-co-op-sessions-tickets-1990225897234',
                'recording_url'   => null, // add after the session
                'status'          => 'upcoming',
                'sort_order'      => 1,
            ]
        );

        // ── Speakers ─────────────────────────────────────────────────────────
        $speakers = [
            [
                'name'         => 'Mike Banwo',
                'title'        => 'People Strategist and HR Leader',
                'company'      => null,
                'bio'          => 'An experienced People Strategist and HR Leader with deep expertise in building high-performing teams, shaping organisational culture, and driving human-centred change at scale. Mike brings a practitioner lens to questions of workforce transformation and what AI means for people strategy.',
                'photo_path'   => 'images/speakers/mike-banwo.jpg',
                'linkedin_url' => null,
                'topic'        => 'People strategy and workforce transformation in the age of AI',
                'sort_order'   => 1,
            ],
            [
                'name'         => 'Frances "Frankie" Agba',
                'title'        => 'AI Governance Practitioner and Computer Science Educator',
                'company'      => null,
                'bio'          => 'Frances Agba (Frankie) is a Computer Science Educator and AI Governance Practitioner. Her work focuses on AI governance architecture, risk and assurance, and policy, with a particular emphasis on institutional accountability for communities underserved by mainstream AI frameworks. She is currently conducting active research on English-centric AI safety alignment failures across Nigerian languages.',
                'photo_path'   => 'images/speakers/frankie-agba.jpg',
                'linkedin_url' => null,
                'topic'        => 'AI governance, ethics, and responsible practice',
                'sort_order'   => 2,
            ],
            [
                'name'         => 'Josephine De-love Yeboah',
                'title'        => 'Healthcare Data Professional and Founder',
                'company'      => 'The Women\'s Voice Circle',
                'bio'          => 'Josephine is a Healthcare Data Professional and the Founder of The Women\'s Voice Circle, a community platform amplifying the voices of women across health and social care. She brings lived experience and professional insight into what data skills mean for career progression in high-stakes sectors.',
                'photo_path'   => 'images/speakers/josephine-yeboah.jpg',
                'linkedin_url' => null,
                'topic'        => 'Data skills, healthcare, and community voice',
                'sort_order'   => 3,
            ],
            [
                'name'         => 'Andrea Marshall Webb',
                'title'        => 'Managing Director',
                'company'      => 'Credera Consulting',
                'bio'          => 'Andrea is Managing Director at Credera Consulting, a global consultancy at the intersection of strategy, technology, and transformation. She brings insight from Credera\'s research into the AI gender gap, and what organisations need to do to ensure that AI benefits everyone, not just those already in the room.',
                'photo_path'   => 'images/speakers/andrea-marshall-webb.jpg',
                'linkedin_url' => null,
                'topic'        => 'The AI gender gap and organisational responsibility',
                'sort_order'   => 4,
            ],
            [
                'name'         => 'Jaisal Surana',
                'title'        => 'AI Solutions Architect and Founder',
                'company'      => 'Santander UK / MKAI',
                'bio'          => 'Jaisal is an AI Solutions Architect at Santander UK and the Founder of MKAI, a global AI community focused on building responsible, human-centred AI. He works daily at the intersection of applied AI and enterprise transformation, and brings a grounded, practitioner view of what the technology actually does in real organisations.',
                'photo_path'   => 'images/speakers/jaisal-surana.jpg',
                'linkedin_url' => null,
                'topic'        => 'Applied AI in enterprise and responsible deployment',
                'sort_order'   => 5,
            ],
            [
                'name'         => 'Ravi Rabheru',
                'title'        => 'Global AI Partnerships, ByteDance / Forbes AI Advisor',
                'company'      => 'ByteDance',
                'bio'          => 'Ravi leads Global AI Partnerships at ByteDance and serves as a Forbes AI Advisor, working at the very front edge of how AI platforms are being adopted globally. He brings a rare combination of big-tech perspective and advisory experience to questions of where AI is heading and what that means for skills, opportunity, and access.',
                'photo_path'   => 'images/speakers/ravi-rabheru.jpg',
                'linkedin_url' => null,
                'topic'        => 'Global AI adoption and what it means for opportunity',
                'sort_order'   => 6,
            ],
        ];

        foreach ($speakers as $data) {
            $topic      = $data['topic'];
            $sort_order = $data['sort_order'];
            unset($data['topic'], $data['sort_order']);

            $speaker = PanelSpeaker::firstOrCreate(
                ['name' => $data['name']],
                $data
            );

            // Attach to session if not already attached
            if (! $session->speakers()->where('panel_speaker_id', $speaker->id)->exists()) {
                $session->speakers()->attach($speaker->id, [
                    'topic'      => $topic,
                    'sort_order' => $sort_order,
                ]);
            }
        }

        $this->command->info('Panel 1 seeded: ' . $session->title . ' with ' . count($speakers) . ' speakers.');
    }
}
