# inputInvoiceStarGiftDropOriginalDetails

**Description** : *Used to pay for for the removal of the starGiftAttributeOriginalDetails attribute from a collectible gift, see here &raquo; for the full flow*

**Layer** : 229

```tl
inputInvoiceStarGiftDropOriginalDetails#923d8d1 stargift:InputSavedStarGift = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The collectible gift whose starGiftAttributeOriginalDetails attribute should be removed |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftDropOriginalDetails(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 56,
	),
);
```