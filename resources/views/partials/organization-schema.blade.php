{{-- Static Organization / WebSite / Service schema for the main (Global) homepage only. --}}
@if (optional(request()->route())->getName() === 'front.home')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://pcsglobalgroup.com/#organization",
      "name": "PCS Global",
      "legalName": "Progressive Corporate Services Pvt. Ltd.",
      "url": "https://pcsglobalgroup.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://pcsglobalgroup.com/public/front/images/logo.svg"
      },
      "description": "PCS Global provides accounting, bookkeeping, taxation, payroll, recruitment, and strata management outsourcing solutions for global businesses and accounting firms.",
      "email": "info@pcsglobalgroup.com",
      "telephone": "+91-796-826-0121",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Addor Aspire 2, 7th Floor, Opp. Old Passport Office, University Area",
        "addressLocality": "Ahmedabad",
        "addressRegion": "Gujarat",
        "postalCode": "380015",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-796-826-0121",
        "email": "info@pcsglobalgroup.com",
        "contactType": "Business Enquiries",
        "availableLanguage": [
          "English"
        ]
      },
      "sameAs": [
        "https://www.linkedin.com/company/pcs-global-group/",
        "https://www.facebook.com/PCSGlobalGroup/",
        "https://www.instagram.com/pcsglobalgroup/"
      ],
      "areaServed": [
        { "@type": "Country", "name": "United States" },
        { "@type": "Country", "name": "United Kingdom" },
        { "@type": "Country", "name": "Australia" }
      ],
      "knowsAbout": [
        "Accounting Outsourcing",
        "Bookkeeping Outsourcing",
        "Tax Preparation Outsourcing",
        "Payroll Outsourcing",
        "Recruitment Outsourcing",
        "Strata Management"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://pcsglobalgroup.com/#website",
      "url": "https://pcsglobalgroup.com/",
      "name": "PCS Global",
      "alternateName": "PCS Global Group",
      "publisher": { "@id": "https://pcsglobalgroup.com/#organization" },
      "inLanguage": "en"
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#accounting-outsourcing",
      "name": "Accounting Outsourcing Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Accounting Outsourcing",
      "areaServed": [
        "United States",
        "United Kingdom",
        "Australia"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#bookkeeping-outsourcing",
      "name": "Bookkeeping Outsourcing Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Bookkeeping Outsourcing",
      "areaServed": [
        "United States",
        "United Kingdom",
        "Australia"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#taxation-outsourcing",
      "name": "Taxation Outsourcing Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Tax Preparation Outsourcing",
      "areaServed": [
        "United States",
        "United Kingdom",
        "Australia"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#payroll-outsourcing",
      "name": "Payroll Outsourcing Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Payroll Outsourcing",
      "areaServed": [
        "United States",
        "United Kingdom",
        "Australia"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#recruitment-outsourcing",
      "name": "Recruitment Outsourcing Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Recruitment Outsourcing",
      "areaServed": [
        "United States",
        "United Kingdom",
        "Australia"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/#strata-management",
      "name": "Strata Management Services",
      "provider": { "@id": "https://pcsglobalgroup.com/#organization" },
      "serviceType": "Strata Management",
      "areaServed": { "@type": "Country", "name": "Australia" }
    }
  ]
}
</script>
@endverbatim
@endif
