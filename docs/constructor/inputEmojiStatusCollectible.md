# inputEmojiStatusCollectible

**Layer** : 214

```tl
inputEmojiStatusCollectible#7141dbf flags:# collectible_id:long until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>collectible_id</mark> | [`long`](type/long) | NOTHING |
| **until** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->inputEmojiStatusCollectible(
	collectible_id : 7289540482320822617,
	until : 7,
);
```