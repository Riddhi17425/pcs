{{-- Static schema for the Australia homepage only. --}}
@if (optional(request()->route())->getName() === 'australia.home')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AccountingService",
      "@id": "https://pcsglobalgroup.com/au#accountingservice",
      "name": "PCS Global Australia",
      "url": "https://pcsglobalgroup.com/au",
      "image": "https://pcsglobalgroup.com/public/front/images/logo.svg",
      "description": "PCS Global provides accounting, bookkeeping, tax preparation, BAS and IAS returns, payroll and strata management outsourcing services to Australian businesses and accounting firms. Our dedicated professionals deliver reliable accounting support aligned with Australian accounting standards and regulatory requirements.",
      "telephone": "+61399980494",
      "email": "info@pcsglobalgroup.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "22A Mort Street",
        "addressLocality": "Blacktown",
        "addressRegion": "NSW",
        "postalCode": "2148",
        "addressCountry": "AU"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      },
      "parentOrganization": {
        "@id": "https://pcsglobalgroup.com/#organization"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+61399980494",
        "email": "info@pcsglobalgroup.com",
        "contactType": "Business Enquiries",
        "availableLanguage": "English"
      },
      "knowsAbout": [
        "Australian Accounting Standards",
        "AASB Compliance",
        "Accounting Outsourcing",
        "Bookkeeping Outsourcing",
        "Tax Preparation",
        "BAS and IAS Returns",
        "GST Compliance",
        "PAYG Withholding",
        "Payroll Processing",
        "Superannuation",
        "Single Touch Payroll",
        "ATO Compliance",
        "ASIC Compliance",
        "Strata Accounting",
        "Financial Reporting"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://pcsglobalgroup.com/au#webpage",
      "url": "https://pcsglobalgroup.com/au",
      "name": "Accounting Outsourcing Company for Australian Businesses & Firms | PCS Global",
      "description": "PCS Global provides accounting outsourcing, bookkeeping, tax preparation, BAS, payroll and strata management services for Australian businesses and accounting firms.",
      "isPartOf": {
        "@id": "https://pcsglobalgroup.com/#website"
      },
      "about": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "mainEntity": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "inLanguage": "en-AU"
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#accounting-outsourcing",
      "name": "Accounting Outsourcing Services Australia",
      "serviceType": "Accounting Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#bookkeeping-outsourcing",
      "name": "Bookkeeping Outsourcing Services Australia",
      "serviceType": "Bookkeeping Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#tax-preparation",
      "name": "Tax Preparation Outsourcing Services Australia",
      "serviceType": "Tax Preparation Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#bas-ias-services",
      "name": "BAS and IAS Return Services Australia",
      "serviceType": "BAS and IAS Return Preparation",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#payroll-outsourcing",
      "name": "Payroll Outsourcing Services Australia",
      "serviceType": "Payroll Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/au#strata-management",
      "name": "Strata Management Services Australia",
      "serviceType": "Strata Management",
      "provider": {
        "@id": "https://pcsglobalgroup.com/au#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Australia"
      }
    }
  ]
}
</script>
@endverbatim
@endif
