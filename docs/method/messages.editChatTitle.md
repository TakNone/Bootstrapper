# messages.editChatTitle

**Description** : *Changes chat name and sends a service message on it*

**Layer** : 211

```tl
messages.editChatTitle#73783ffd chat_id:long title:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>title</mark> | [`string`](type/string) | New chat name, different from the old one |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_TITLE_EMPTY** | `400` | No chat title provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editChatTitle(
	chat_id : -5159935707144282792,
	title : 'vEk6thd1Oj37BR0i',
);
```