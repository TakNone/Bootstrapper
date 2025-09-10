# inputInvoiceStarGiftTransfer

**Layer** : 214

```tl
inputInvoiceStarGiftTransfer#4a5f5bd9 stargift:InputSavedStarGift to_id:InputPeer = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |
| <mark>to_id</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftTransfer(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 60,
	),
	to_id : $client->inputPeerEmpty(),
);
```