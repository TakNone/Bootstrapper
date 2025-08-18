# inputInvoiceStarGiftUpgrade

**Layer** : 211

```tl
inputInvoiceStarGiftUpgrade#4d818d5d flags:# keep_original_details:flags.0?true stargift:InputSavedStarGift = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **keep_original_details** | [`flags.0?true`](type/true) | NOTHING |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftUpgrade(
	keep_original_details : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 31,
	),
);
```