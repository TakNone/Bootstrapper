# inputEmojiStatusCollectible

**Description** : *An owned collectible gift &raquo; as emoji status: can only be used in account\.updateEmojiStatus, is never returned by the API*

**Layer** : 218

```tl
inputEmojiStatusCollectible#7141dbf flags:# collectible_id:long until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>collectible_id</mark> | [`long`](type/long) | ID of the collectible (from starGiftUnique.id) |
| **until** | [`flags.0?int`](type/int) | If set, the emoji status will be active until the specified unixtime |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->inputEmojiStatusCollectible(
	collectible_id : 2655288569910078270,
	until : 8,
);
```