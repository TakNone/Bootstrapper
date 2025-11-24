# updateEncryptedChatTyping

**Description** : *Interlocutor is typing a message in an encrypted chat\. Update period is 6 second\. If upon this time there is no repeated update, it shall be considered that the interlocutor stopped typing*

**Layer** : 218

```tl
updateEncryptedChatTyping#1710f156 chat_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`int`](type/int) | Chat ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEncryptedChatTyping(
	chat_id : 42,
);
```