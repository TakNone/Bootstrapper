# inputInvoiceSlug

**Description** : *An invoice slug taken from an invoice deep link or from the premium_invoice_slug app config parameter »*

**Layer** : 211

```tl
inputInvoiceSlug#c326caef slug:string = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | The invoice slug |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceSlug(
	slug : '2thL1o0FrmIPne4U',
);
```