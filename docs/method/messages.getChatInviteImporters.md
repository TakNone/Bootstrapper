# messages.getChatInviteImporters

**Description** : *Get info about the users that joined the chat using a specific chat invite*

**Layer** : 218

```tl
messages.getChatInviteImporters#df04dd4e flags:# requested:flags.0?true subscription_expired:flags.3?true peer:InputPeer link:flags.1?string q:flags.2?string offset_date:int offset_user:InputUser limit:int = messages.ChatInviteImporters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **requested** | [`flags.0?true`](type/true) | If set, only returns info about users with pending join requests » |
| **subscription_expired** | [`flags.3?true`](type/true) | Set this flag if the link is a Telegram Star subscription link » and only members with already expired subscription must be returned |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat |
| **link** | [`flags.1?string`](type/string) | Invite link |
| **q** | [`flags.2?string`](type/string) | Search for a user in the pending join requests » list: only available when the requested flag is set, cannot be used together with a specific link |
| <mark>offset_date</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>offset_user</mark> | [`InputUser`](type/InputUser) | User ID for pagination: if set, offset_date must also be set |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.ChatInviteImporters](type/messages.ChatInviteImporters)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INVITE_HASH_EXPIRED** | `400` | The invite link has expired |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SEARCH_WITH_LINK_NOT_SUPPORTED** | `400` | You cannot provide a search query and an invite link at the same time |

---

## Example

```php
$messagesChatInviteImporters = $client->messages->getChatInviteImporters(
	requested : true,
	subscription_expired : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	link : 'hyLKrtJWuA6NXH1S',
	q : 'HoBfzOlaMeQLxCPg',
	offset_date : 0,
	offset_user : $client->get_input_user(peer : '@TakNone'),
	limit : 64,
);
```