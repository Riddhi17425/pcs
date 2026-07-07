@include('layouts.frontheader')

<section class="privacy-policy py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fw-bold mb-2">Privacy Policy</h1>
      <p class="text-muted">Effective Date: {{ date('F d, Y') }}</p>
    </div>

    <div class="policy-content">
      <h4 class="mt-4">Introduction</h4>
      <p>
        At <strong>PCS Global</strong>, we value your trust and are committed to protecting your privacy. 
        As a global provider of automation, IT, property management, and behavioral health solutions, 
        we handle personal and business information with the highest level of responsibility, transparency, and care.
      </p>
      <p>
        This Privacy Policy explains how we collect, use, store, and protect your information across our 
        websites, platforms, and services.
      </p>

      <h4 class="mt-5">Information We Collect</h4>
      <ul>
        <li><strong>Personal Information:</strong> Information you voluntarily share such as name, company, job title, email, phone number, and message details.</li>
        <li><strong>Business Information:</strong> Details related to your business requirements, used to deliver accurate and personalized services.</li>
        <li><strong>Technical Information:</strong> Non-personal data like IP address, browser type, and device details collected to improve functionality.</li>
      </ul>

      <h4 class="mt-5">How We Use Your Information</h4>
      <ul>
        <li>Respond to inquiries and provide tailored assistance.</li>
        <li>Deliver and enhance our range of professional services.</li>
        <li>Improve user experience, content quality, and platform security.</li>
        <li>Communicate updates about services and innovations (if opted in).</li>
        <li>Facilitate client support and service delivery processes.</li>
      </ul>

      <h4 class="mt-5">Data Sharing & Third Parties</h4>
      <p>
        PCS Global does not sell, rent, or trade your personal data. However, information may be shared with:
      </p>
      <ul>
        <li>Trusted partners such as hosting or logistics providers supporting operations.</li>
        <li>Regulatory authorities if required by law.</li>
      </ul>
      <p>All partners are bound by confidentiality and data protection agreements.</p>

      <h4 class="mt-5">Data Security</h4>
      <p>
        We implement strong security practices—including encryption, firewalls, and controlled access—to safeguard your data. 
        While we enhance security continuously, no online system can guarantee absolute safety.
      </p>

      <h4 class="mt-5">Cookies & Tracking</h4>
      <p>
        PCS Global uses cookies to personalize experience, analyze performance, and enable essential functions. 
        You may disable cookies in your browser, though some site features may not function properly.
      </p>

      <h4 class="mt-5">International Data Transfers</h4>
      <p>
        Your data may be stored or processed internationally, with safeguards ensuring compliance with 
        <strong>GDPR</strong>, <strong>CCPA</strong>, and similar laws.
      </p>

      <h4 class="mt-5">Your Rights</h4>
      <ul>
        <li>Access, correct, or delete your personal information.</li>
        <li>Withdraw consent for marketing communications.</li>
        <li>Request details about how your data is processed and stored.</li>
      </ul>
      <p>To exercise these rights, contact us directly.</p>

      <h4 class="mt-5">Policy Updates</h4>
      <p>
        PCS Global may update this Privacy Policy periodically. The latest version will always be available 
        on this page with the revision date indicated above.
      </p>

      <h4 class="mt-5">Contact Us</h4>
      <p>
        📧 <a href="mailto:info@pcsglobalgroup.com">info@pcsglobalgroup.com</a><br>
        🌐 <a href="https://pcsglobalgroup.com" target="_blank">www.pcsglobalgroup.com</a><br>
        📍 <a href="https://maps.app.goo.gl/b8ZAnKuc1b4XP9SX8" target="_blank"> PCS Global Ahmedabad </a> 
      </p> 
    </div>
  </div>
</section>

<style>
.privacy-policy h1 { font-size: 2rem; color: #1c1c1c; }
.privacy-policy h4 { font-size: 1.25rem; margin-bottom: .5rem; color: #0a4275; }
.privacy-policy p, 
.privacy-policy li { font-size: .95rem; line-height: 1.7; color: #333; }
.privacy-policy ul { padding-left: 1.2rem; }
</style>

@include('layouts.frontfooter')
