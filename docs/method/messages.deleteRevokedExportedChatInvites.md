# messages.deleteRevokedExportedChatInvites

**Description** : *Delete all revoked chat invites*

**Layer** : 211

```tl
messages.deleteRevokedExportedChatInvites#56987bd5 peer:InputPeer admin_id:InputUser = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat |
| <mark>admin_id</mark> | [`InputUser`](type/InputUser) | ID of the admin that originally generated the revoked chat invites |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ADMIN_ID_INVALID** | `400` | The specified admin ID is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->deleteRevokedExportedChatInvites(
	peer : $client->inputPeerEmpty(),
	admin_id : $client->inputUserEmpty(),
);
```