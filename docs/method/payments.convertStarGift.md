# payments.convertStarGift

**Description** : *Convert a received gift &raquo; into Telegram Stars: this will permanently destroy the gift, converting it into starGift\.convert\_stars Telegram Stars, added to the user&#039;s balance*

**Layer** : 216

```tl
payments.convertStarGift#74bf076b stargift:InputSavedStarGift = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The gift to convert |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_PEER_INVALID** | `400` | The specified inputSavedStarGiftChat.peer is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->payments->convertStarGift(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 24,
	),
);
```