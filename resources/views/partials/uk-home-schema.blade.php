{{-- Static schema for the UK homepage only. --}}
@if (optional(request()->route())->getName() === 'uk')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AccountingService",
      "@id": "https://pcsglobalgroup.com/uk#accountingservice",
      "name": "PCS Global UK",
      "url": "https://pcsglobalgroup.com/uk",
      "image": "https://pcsglobalgroup.com/public/front/images/logo.svg",
      "description": "PCS Global provides accounting, bookkeeping, tax preparation, VAT and payroll outsourcing services to UK businesses, SMEs and accounting firms. Our experienced professionals deliver UK GAAP and IFRS-compliant accounting support and HMRC-focused services.",
      "telephone": "+441134034334",
      "email": "info@pcsglobalgroup.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "16 Field Maple Gardens",
        "addressLocality": "High Wycombe",
        "addressRegion": "Buckinghamshire",
        "postalCode": "HP10 9FN",
        "addressCountry": "GB"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      },
      "parentOrganization": {
        "@id": "https://pcsglobalgroup.com/#organization"
      },
      "sameAs": [
        "https://www.linkedin.com/company/pcs-global-group/",
        "https://www.facebook.com/PCSGlobalGroup/",
        "https://www.instagram.com/pcsglobalgroup/"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+441134034334",
        "email": "info@pcsglobalgroup.com",
        "contactType": "Business Enquiries",
        "availableLanguage": "English"
      },
      "knowsAbout": [
        "UK Accounting Standards",
        "UK GAAP",
        "IFRS",
        "HMRC Compliance",
        "VAT Compliance",
        "Making Tax Digital",
        "PAYE",
        "Payroll Management",
        "Bookkeeping",
        "Tax Preparation",
        "Companies House Compliance"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://pcsglobalgroup.com/uk#webpage",
      "url": "https://pcsglobalgroup.com/uk",
      "name": "Accounting Outsourcing Company for UK Businesses & Accounting Firms | PCS Global",
      "description": "PCS Global provides accounting outsourcing, bookkeeping, payroll, tax and VAT services for UK businesses and accounting firms.",
      "isPartOf": {
        "@id": "https://pcsglobalgroup.com/#website"
      },
      "about": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "mainEntity": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "inLanguage": "en-GB"
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#accounting-outsourcing",
      "name": "Accounting Outsourcing Services UK",
      "serviceType": "Accounting Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#bookkeeping-outsourcing",
      "name": "Bookkeeping Outsourcing Services UK",
      "serviceType": "Bookkeeping Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#tax-preparation",
      "name": "Tax Preparation Outsourcing Services UK",
      "serviceType": "Tax Preparation",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#payroll-outsourcing",
      "name": "Payroll Outsourcing Services UK",
      "serviceType": "Payroll Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#vat-outsourcing",
      "name": "VAT Outsourcing Services UK",
      "serviceType": "VAT Outsourcing",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    },
    {
      "@type": "Service",
      "@id": "https://pcsglobalgroup.com/uk#small-business-accounting",
      "name": "Small Business Accounting Services UK",
      "serviceType": "Small Business Accounting",
      "provider": {
        "@id": "https://pcsglobalgroup.com/uk#accountingservice"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    }
  ]
}
</script>
@endverbatim
@endif
