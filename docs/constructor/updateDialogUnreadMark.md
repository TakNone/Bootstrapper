# updateDialogUnreadMark

**Layer** : 214

```tl
updateDialogUnreadMark#b658f23e flags:# unread:flags.0?true peer:DialogPeer saved_peer_id:flags.1?Peer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **unread** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`DialogPeer`](type/DialogPeer) | NOTHING |
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
			user_id : 906534176476733352,
		),
	),
	saved_peer_id : $client->peerUser(
		user_id : -1757791584115893256,
	),
);
```