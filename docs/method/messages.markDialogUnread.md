# messages.markDialogUnread

**Description** : *Manually mark dialog as unread*

**Layer** : 218

```tl
messages.markDialogUnread#8c5006f8 flags:# unread:flags.0?true parent_peer:flags.1?InputPeer peer:InputDialogPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **unread** | [`flags.0?true`](type/true) | Mark as unread/read |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | If set, must be equal to the ID of a monoforum, and will affect the monoforum topic passed in peer |
| <mark>peer</mark> | [`InputDialogPeer`](type/InputDialogPeer) | Dialog |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->markDialogUnread(
	unread : true,
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	peer : $client->inputDialogPeer(
		peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	),
);
```