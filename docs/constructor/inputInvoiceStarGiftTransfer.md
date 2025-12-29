# inputInvoiceStarGiftTransfer

**Description** : *Used to pay to transfer a collectible gift to another peer, see the gifts &raquo; documentation for more info*

**Layer** : 218

```tl
inputInvoiceStarGiftTransfer#4a5f5bd9 stargift:InputSavedStarGift to_id:InputPeer = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The identifier of the received gift |
| <mark>to_id</mark> | [`InputPeer`](type/InputPeer) | The destination peer |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftTransfer(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 89,
	),
	to_id : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```