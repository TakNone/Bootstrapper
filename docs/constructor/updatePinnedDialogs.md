# updatePinnedDialogs

**Description** : *Pinned dialogs were updated*

**Layer** : 214

```tl
updatePinnedDialogs#fa0f3ca2 flags:# folder_id:flags.1?int order:flags.0?Vector<DialogPeer> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **folder_id** | [`flags.1?int`](type/int) | Peer folder ID, for more info click here |
| **order** | [`flags.0?Vector<DialogPeer>`](type/DialogPeer) | New order of pinned dialogs |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedDialogs(
	folder_id : 44,
	order : array(
		$client->dialogPeer(
			peer : $client->peerUser(
				user_id : 6379070549752157599,
			),
		),
		$client->dialogPeerFolder(
			folder_id : 95,
		),
	),
);
```