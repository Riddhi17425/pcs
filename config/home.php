<?php

// Country home pages ka shared content (sab countries me same). Country-specific cheezein page me hi rehti hain.
return [

    // Team slider ke pehle members (sab countries). Image: public/front/images/common/team/
    'core_team' => [
        ['name' => 'Malay Dalal FCA', 'role' => 'President/Chairman', 'image' => 'malay-dalal.png'],
        ['name' => 'Prithvi Dodla', 'role' => 'CEO / Managing Director', 'image' => 'prithvi-dodla.png'],
        ['name' => 'Umesh Porwad', 'role' => 'Operations - PCS', 'image' => 'umesh-porwad.png'],
    ],

    'testimonials' => [
        ['name' => 'Matt Osborne', 'role' => 'Owner',
         'text' => 'For some time, I have been working in conjunction with the Director of PCS Global Group, Mr Prithvi Dodla, getting to understand their business methods. Clearly, with their experience in end-to-end accounting, administration side. PCS Global Group will thrive in providing business solutions to clients globally. I have seen first hand the high productivity levels and commitment to clients being second to none. This is why I have joined their team to be on the ground in Australia to assist them in delivering Accounting & the Strata Industry services.'],
        ['name' => 'Darren Mason', 'role' => 'Financial Controller, Global Accounting Network',
         'text' => 'The PCS Group experts took the time to know my business and me. I have a real sense of security, knowing there’s always quality advice on hand as my business grows and I have to make more decisions.'],
        ['name' => 'Barry Williams', 'role' => 'Owner, V-Care Clinics',
         'text' => 'The PCS team is extremely proactive and professional. They look after all my accounting and tax requirements so that I can concentrate on building my business.'],
        ['name' => 'Jason Hoopai', 'role' => 'MD, Hoopai Financial Consultancy',
         'text' => 'They provide prompt, accurate, and professional service, relieving us of the burden of keeping up with ever-changing Payroll legislation. I particularly value having an expert contact I can contact if I have any questions, and they are familiar enough with our business to provide much-appreciated, tailored advice as needed.'],
    ],

    // Data security slider: Figma ke 3 cards ke baad ye 3 aur (slider chalne ke liye). Image page deta hai.
    'security_extra' => [
        ['title' => 'End-to-End Encryption',
         'text' => 'End-to-end encryption secures data from origin to destination, ensuring only intended recipients can access it.'],
        ['title' => 'Secure Data Storage',
         'text' => 'Your data is held on encrypted storage with scheduled backups and off-site replicas, so it stays protected and recoverable.'],
        ['title' => 'Compliance & Best Practices',
         'text' => 'Our security framework aligns with international standards such as ISO 27001, supporting a consistent and robust security culture.'],
    ],

    // 'How does PCS Global work' ke 3 steps (Australia, UK)
    'process_steps' => [
        ['title' => 'Understand Your Requirements',
         'text' => 'Every engagement opens with a discussion. Our priority is to learn how your business runs, which areas are under most pressure, and the responsibilities you would prefer to pass on. With that understanding, we can pinpoint the work to take on and the best way to sit alongside your team.'],
        ['title' => 'Build Your Team',
         'text' => 'The initial interview is usually a video call with a People & Culture colleague. We take the time for us to get to know each other and get a first impression. We will naturally answer your questions about us and the position you are applying for so you have a clear picture of your role with us.'],
        ['title' => 'Integrate With Your Workflow',
         'text' => 'We then integrate with your established working methods. We work directly in the accounting software, file-sharing tools, and reporting formats already in place, so your team adopts nothing new. We arrange secure access and confirm how we will communicate and exchange work.'],
    ],
];
