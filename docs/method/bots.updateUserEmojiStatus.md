# bots.updateUserEmojiStatus

**Description** : *Change the emoji status of a user (invoked by bots, see here » for more info on the full flow)*

**Layer** : 211

```tl
bots.updateUserEmojiStatus#ed9f30c5 user_id:InputUser emoji_status:EmojiStatus = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user whose emoji status should be changed |
| <mark>emoji_status</mark> | [`EmojiStatus`](type/EmojiStatus) | The emoji status |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->bots->updateUserEmojiStatus(
	user_id : $client->inputUserEmpty(),
	emoji_status : $client->emojiStatusEmpty(),
);
```