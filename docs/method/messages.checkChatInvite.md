# messages.checkChatInvite

**Description** : *Check the validity of a chat invite link and get basic info about it*

**Layer** : 216

```tl
messages.checkChatInvite#3eadb1bb hash:string = ChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`string`](type/string) | Invite hash from chat invite deep link » |

---

## Result

[ChatInvite](type/ChatInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **INVITE_HASH_EMPTY** | `400` | The invite hash is empty |
| **INVITE_HASH_EXPIRED** | `406` | The invite link has expired |
| **INVITE_HASH_INVALID** | `400` | The invite hash is invalid |

---

## Example

```php
$chatInvite = $client->messages->checkChatInvite(
	hash : 'rQczsR9LnqtivbdZ',
);
```