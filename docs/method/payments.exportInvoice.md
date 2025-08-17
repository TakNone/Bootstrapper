# payments.exportInvoice

**Description** : *Generate an invoice deep link*

**Layer** : 211

```tl
payments.exportInvoice#f91b065 invoice_media:InputMedia = payments.ExportedInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invoice_media</mark> | [`InputMedia`](type/InputMedia) | Invoice |

---

## Result

[payments.ExportedInvoice](type/payments.ExportedInvoice)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CURRENCY_TOTAL_AMOUNT_INVALID** | `400` | The total amount of all prices is invalid |
| **INVOICE_PAYLOAD_INVALID** | `400` | The specified invoice payload is invalid |
| **MEDIA_INVALID** | `400` | Media invalid |
| **PAYMENT_PROVIDER_INVALID** | `400` | The specified payment provider is invalid |
| **STARS_INVOICE_INVALID** | `400` | The specified Telegram Star invoice is invalid |
| **WEBDOCUMENT_MIME_INVALID** | `400` | Invalid webdocument mime type provided |
| **WEBDOCUMENT_URL_EMPTY** | `400` | The passed web document URL is empty |

---

## Example

```php
$paymentsExportedInvoice = $client->payments->exportInvoice(
	invoice_media : $client->inputMediaEmpty(),
);
```