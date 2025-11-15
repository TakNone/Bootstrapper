# updateUserEmojiStatus

**Description** : *The emoji status of a certain user has changed*

**Layer** : 216

```tl
updateUserEmojiStatus#28373599 user_id:long emoji_status:EmojiStatus = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>emoji_status</mark> | [`EmojiStatus`](type/EmojiStatus) | New emoji status |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserEmojiStatus(
	user_id : -6192627923747722293,
	emoji_status : $client->emojiStatusEmpty(),
);
```