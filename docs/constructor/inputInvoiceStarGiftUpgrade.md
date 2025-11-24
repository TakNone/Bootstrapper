# inputInvoiceStarGiftUpgrade

**Description** : *Used to pay to upgrade a Gift to a collectible gift, see the collectible gifts &raquo; documentation for more info on the full flow*

**Layer** : 218

```tl
inputInvoiceStarGiftUpgrade#4d818d5d flags:# keep_original_details:flags.0?true stargift:InputSavedStarGift = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **keep_original_details** | [`flags.0?true`](type/true) | Set this flag to keep the original gift text, sender and receiver in the upgraded gift as a starGiftAttributeOriginalDetails attribute |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The identifier of the received gift to upgrade |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftUpgrade(
	keep_original_details : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 13,
	),
);
```