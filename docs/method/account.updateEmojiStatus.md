# account.updateEmojiStatus

**Description** : *Set an emoji status*

**Layer** : 211

```tl
account.updateEmojiStatus#fbd3de6b emoji_status:EmojiStatus = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoji_status</mark> | [`EmojiStatus`](type/EmojiStatus) | Emoji status to set |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |

---

## Example

```php
$bool = $client->account->updateEmojiStatus(
	emoji_status : $client->emojiStatusEmpty(),
);
```