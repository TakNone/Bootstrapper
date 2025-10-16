# messages.deleteExportedChatInvite

**Description** : *Delete a chat invite*

**Layer** : 216

```tl
messages.deleteExportedChatInvite#d464a42b peer:InputPeer link:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>link</mark> | [`string`](type/string) | Invite link |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INVITE_HASH_EXPIRED** | `400` | The invite link has expired |
| **INVITE_REVOKED_MISSING** | `400` | The specified invite link was already revoked or is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->deleteExportedChatInvite(
	peer : $client->inputPeerEmpty(),
	link : '0VDQ5AGakbx7hPoI',
);
```