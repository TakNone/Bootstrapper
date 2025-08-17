# updateDialogUnreadMark

**Description** : *The manual unread mark of a chat was changed*

**Layer** : 211

```tl
updateDialogUnreadMark#b658f23e flags:# unread:flags.0?true peer:DialogPeer saved_peer_id:flags.1?Peer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **unread** | [`flags.0?true`](type/true) | Was the chat marked or unmarked as read |
| <mark>peer</mark> | [`DialogPeer`](type/DialogPeer) | The dialog |
| **saved_peer_id** | [`flags.1?Peer`](type/Peer) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogUnreadMark(
	unread : true,
	peer : $client->dialogPeer(
		peer : $client->peerUser(
			user_id : -4670631059565046826,
		),
	),
	saved_peer_id : $client->peerUser(
		user_id : -4381803141845962708,
	),
);
```