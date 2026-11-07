# updatePinnedDialogs

**Description** : *Pinned dialogs were updated*

**Layer** : 233

```tl
updatePinnedDialogs#fa0f3ca2 flags:# folder_id:flags.1?int order:flags.0?Vector<DialogPeer> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **folder_id** | [`flags.1?int`](type/int) | Peer folder ID, for more info click here |
| **order** | [`flags.0?Vector<DialogPeer>`](type/DialogPeer) | New order of pinned dialogs |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedDialogs(
	folder_id : 70,
	order : array(
		$client->dialogPeer(
			peer : $client->peerUser(
				user_id : -876340819071558037,
			),
		),
		$client->dialogPeerFolder(
			folder_id : 81,
		),
		$client->dialogPeerCommunity(
			community_id : 4802475750971394300,
		),
	),
);
```