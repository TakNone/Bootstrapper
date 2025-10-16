# inputSavedStarGiftChat

**Description** : *A gift received by a channel we own*

**Layer** : 216

```tl
inputSavedStarGiftChat#f101aa7f peer:InputPeer saved_id:long = InputSavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel |
| <mark>saved_id</mark> | [`long`](type/long) | ID of the gift, must be the saved_id of a messageActionStarGift/messageActionStarGiftUnique constructor |

---

## Type

[InputSavedStarGift](type/InputSavedStarGift)

---

## Example

```php
$inputSavedStarGift = $client->inputSavedStarGiftChat(
	peer : $client->inputPeerEmpty(),
	saved_id : 2648952257760744893,
);
```