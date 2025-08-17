# messages.editChatAdmin

**Description** : *Make a user admin in a basic group*

**Layer** : 211

```tl
messages.editChatAdmin#a85bd1c2 chat_id:long user_id:InputUser is_admin:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | The ID of the group |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to make admin |
| <mark>is_admin</mark> | [`Bool`](type/Bool) | Whether to make them admin |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_NOT_PARTICIPANT** | `400` | You're not a member of this supergroup/channel |

---

## Example

```php
$bool = $client->messages->editChatAdmin(
	chat_id : -8802304830093411556,
	user_id : $client->inputUserEmpty(),
	is_admin : $client->boolFalse(),
);
```