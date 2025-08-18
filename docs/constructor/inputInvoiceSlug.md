# inputInvoiceSlug

**Description** : *An invoice slug taken from an invoice deep link or from the premium\_invoice\_slug app config parameter &raquo;*

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
	slug : 'DaHVPecfGgUEL0h2',
);
```