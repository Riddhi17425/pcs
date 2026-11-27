{{-- Static schema for the US homepage only. --}}
@if (optional(request()->route())->getName() === 'us.home')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AccountingService",
      "@id": "https://pcsglobalgroup.com/us#accountingservice",
      "name": "PCS Global USA",
      "url": "https://pcsglobalgroup.com/us",
      "image": "https://pcsglobalgroup.com/public/front/images/logo.svg",
      "description": "PCS Global provides accounting, bookkeeping, tax preparation, payroll and audit support outsourcing services to US businesses and CPA firms. Our dedicated accounting teams provide scalable outsourcing solutions, US GAAP support and reliable financial operations.",
      "telephone": "+13478018715",
      "email": "info@pcsglobalgroup.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "225 Cherry Street, 52K",
        "addressLocality": "New York",
        "addressRegion": "NY",
        "postalCode": "10002",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "parentOrganization": {
        "@id": "https://pcsglobalgroup.com/#organization"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+13478018715",
        "email": "info@pcsglobalgroup.com",
        "contactType": "Business Enquiries",
        "availableLanguage": "English"
      },
      "knowsAbout": [
        "US GAAP Accounting",
        "Accounting Outsourcing",
        "Bookkeeping Outsourcing",
        "Tax Preparation",
        "Payroll Processing",
        "Accounts Payable",
        "Accounts Receivable",
        "Financial Reporting",
        "General Ledger Management",
        "Bank Reconciliation",
        "Month-End Closing",
        "Year-End Closing",
        "Audit Preparation",
        "Internal Controls"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://pcsglobalgroup.com/us#webpage",
      "url": "https://pcsglobalgroup.com/us",
      "name": "Accounting Outsourcing Company for US Businesses & CPA Firms | PCS Global",
      "description": "PCS Global provides accounting outsourcing, bookkeeping, tax preparation, payroll and audit support services for US businesses and CPA firms.",
      "isPartOf": {
        "@id": "https://pcsglobalgroup.com/#website"
      },
      "about": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "mainEntity": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/us#accounting-outsourcing",
      "name": "Accounting Outsourcing Services USA",
      "serviceType": "Accounting Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/us#bookkeeping-outsourcing",
      "name": "Bookkeeping Outsourcing Services USA",
      "serviceType": "Bookkeeping Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/us#tax-preparation",
      "name": "Tax Preparation Outsourcing Services USA",
      "serviceType": "Tax Preparation Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/us#payroll-outsourcing",
      "name": "Payroll Outsourcing Services USA",
      "serviceType": "Payroll Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/us#audit-support",
      "name": "Outsourced Audit Support Services USA",
      "serviceType": "Audit Support",
      "provider": {
        "@id": "https://pcsglobalgroup.com/us#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    }
  ]
}
</script>
@endverbatim
@endif
