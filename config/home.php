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
         'text' => 'PCS Global has strong experience in end-to-end accounting and administration. I’ve seen first-hand their high productivity and commitment to clients. Their focus on delivering quality accounting and strata services makes them a trusted business partner.'],
        ['name' => 'Darren Mason', 'role' => 'Financial Controller, Global Accounting Network',
         'text' => 'The PCS Global Group experts took the time to understand my business and me. I have a real sense of security knowing there is always quality advice available as my business grows and I make more decisions.'],
        ['name' => 'Barry Williams', 'role' => 'Owner, V-Care Clinics',
         'text' => 'The PCS team is extremely proactive and professional. They look after all my accounting and tax requirements, allowing me to focus on what matters most—building and growing my business.'],
        ['name' => 'Jason Hoopai', 'role' => 'MD, Hoopai Financial Consultancy',
         'text' => 'They provide prompt, accurate and professional service, relieving us of the burden of keeping up with changing payroll legislation. I value having an expert contact who understands our business and provides tailored advice when needed.'],
    ],

    // Data security slider: Figma ke 3 cards ke baad ye 3 aur (slider chalne ke liye). Image page deta hai.
    'security_extra' => [
        ['title' => 'Certified Security Standards',
         'text' => 'Our practices align with recognised security standards and certifications for protecting, accessing and managing data. This provides independent assurance that your information is handled to a professional benchmark. '],
        ['title' => 'Secure Technology & Communication',
         'text' => 'We use secure, monitored systems and encrypted channels for files and communications. Access is tightly restricted, and confidential information is never sent through unsecured routes. ' ],
    ],

    // 'How does PCS Global work' ke 3 steps (Australia, UK)
    'process_steps' => [
        ['title' => 'Discovery',
         'text' => 'Every engagement opens with a discussion. Our priority is to learn how your business runs, which areas are under most pressure, and the responsibilities you would prefer to pass on. With that understanding, we can pinpoint the work to take on and the best way to sit alongside your team.'],
        ['title' => 'Tailored Team',
         'text' => 'We then form your team, selecting professionals whose expertise aligns with your requirements. The same individuals remain with you over time, developing a clear understanding of your business, your preferences, and your standards. That continuity produces more efficient delivery and reduces the need for repeated instruction.'],
        ['title' => 'Workflow Integration',
         'text' => 'We then integrate with your established working methods. We work directly in the accounting software, file-sharing tools, and reporting formats already in place, so your team adopts nothing new. We arrange secure access and confirm how we will communicate and exchange work.'],
         ['title' => 'Support',
         'text' => 'Once the arrangement is in place, delivery begins. We maintain your books, payroll, tax, and reporting accurately and to deadline, and keep you informed of what has been completed and what is scheduled next. This is consistent, dependable support you can rely on over the long term.'],
         ['title' => 'Review & Scale',
         'text' => 'Your requirements will evolve, and your support adjusts accordingly. Regular reviews keep the standard high, and the level of support can rise through busy spells or scale down as demand settles. This flexibility ensures the partnership remains valuable as your business develops.'],
    ],
];
