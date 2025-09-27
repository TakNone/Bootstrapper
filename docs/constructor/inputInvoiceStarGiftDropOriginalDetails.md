# inputInvoiceStarGiftDropOriginalDetails

**Layer** : 216

```tl
inputInvoiceStarGiftDropOriginalDetails#923d8d1 stargift:InputSavedStarGift = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftDropOriginalDetails(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 64,
	),
);
```