# updateEmojiGameInfo

**Layer** : 227

```tl
updateEmojiGameInfo#fb9c547a info:messages.EmojiGameInfo = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>info</mark> | [`messages.EmojiGameInfo`](type/messages.EmojiGameInfo) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEmojiGameInfo(
	info : $client->messages->emojiGameUnavailable(),
);
```