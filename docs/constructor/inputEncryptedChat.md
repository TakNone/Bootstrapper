# inputEncryptedChat

**Description** : *An e2e encrypted chat*

**Layer** : 229

```tl
inputEncryptedChat#f141b5e1 chat_id:int access_hash:long = InputEncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`int`](type/int) | Chat ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash from encryptedChat, encryptedChatWaiting or encryptedChatRequested |

---

## Type

[InputEncryptedChat](type/InputEncryptedChat)

---

## Example

```php
$inputEncryptedChat = $client->inputEncryptedChat(
	chat_id : 86,
	access_hash : -1798462945529526121,
);
```