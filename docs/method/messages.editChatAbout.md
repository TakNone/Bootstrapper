# messages.editChatAbout

**Description** : *Edit the description of a group/supergroup/channel*

**Layer** : 218

```tl
messages.editChatAbout#def60797 peer:InputPeer about:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The group/supergroup/channel |
| <mark>about</mark> | [`string`](type/string) | The new description |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ABOUT_NOT_MODIFIED** | `400` | About text has not changed |
| **CHAT_ABOUT_TOO_LONG** | `400` | Chat about too long |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->editChatAbout(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	about : 'EKJnwWOHxGXukP7Y',
);
```