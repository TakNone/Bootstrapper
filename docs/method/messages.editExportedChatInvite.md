# messages.editExportedChatInvite

**Description** : *Edit an exported chat invite*

**Layer** : 218

```tl
messages.editExportedChatInvite#bdca2f75 flags:# revoked:flags.2?true peer:InputPeer link:string expire_date:flags.0?int usage_limit:flags.1?int request_needed:flags.3?Bool title:flags.4?string = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.2?true`](type/true) | Whether to revoke the chat invite |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat |
| <mark>link</mark> | [`string`](type/string) | Invite link |
| **expire_date** | [`flags.0?int`](type/int) | New expiration date |
| **usage_limit** | [`flags.1?int`](type/int) | Maximum number of users that can join using this link |
| **request_needed** | [`flags.3?Bool`](type/Bool) | Whether admin confirmation is required before admitting each separate user into the chat |
| **title** | [`flags.4?string`](type/string) | Description of the invite link, visible only to administrators |

---

## Result

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_INVITE_PERMANENT** | `400` | You can't set an expiration date on permanent invite links |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **EDIT_BOT_INVITE_FORBIDDEN** | `403` | Normal users can't edit invites that were created by bots |
| **INVITE_HASH_EXPIRED** | `400` | The invite link has expired |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USAGE_LIMIT_INVALID** | `400` | The specified usage limit is invalid |

---

## Example

```php
$messagesExportedChatInvite = $client->messages->editExportedChatInvite(
	revoked : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	link : 'NPsEViGbZ1yA9H5B',
	expire_date : 77,
	usage_limit : 37,
	request_needed : false,
	title : 'Tr9pxSbmYDHZiPc7',
);
```