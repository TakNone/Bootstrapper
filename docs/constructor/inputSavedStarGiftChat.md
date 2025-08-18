# inputSavedStarGiftChat

**Layer** : 211

```tl
inputSavedStarGiftChat#f101aa7f peer:InputPeer saved_id:long = InputSavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>saved_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[InputSavedStarGift](type/InputSavedStarGift)

---

## Example

```php
$inputSavedStarGift = $client->inputSavedStarGiftChat(
	peer : $client->inputPeerEmpty(),
	saved_id : -2196581939128062528,
);
```