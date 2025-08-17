# payments.exportedInvoice

**Description** : *Exported invoice deep link*

**Layer** : 211

```tl
payments.exportedInvoice#aed0cbd9 url:string = payments.ExportedInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Exported invoice deep link |

---

## Type

[payments.ExportedInvoice](type/payments.ExportedInvoice)

---

## Example

```php
$paymentsExportedInvoice = $client->payments->exportedInvoice(
	url : 'https://docs.liveproto.dev',
);
```