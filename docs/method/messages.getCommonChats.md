# messages.getCommonChats

**Description** : *Get chats in common with a user*

**Layer** : 218

```tl
messages.getCommonChats#e40ca104 user_id:InputUser max_id:long limit:int = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |
| <mark>max_id</mark> | [`long`](type/long) | Maximum ID of chat to return (see pagination) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesChats = $client->messages->getCommonChats(
	user_id : $client->get_input_user(peer : '@TakNone'),
	max_id : -3240263580259622051,
	limit : 20,
);
```