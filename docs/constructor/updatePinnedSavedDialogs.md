# updatePinnedSavedDialogs

**Description** : *Pinned saved dialogs &raquo; were updated*

**Layer** : 229

```tl
updatePinnedSavedDialogs#686c85a6 flags:# order:flags.0?Vector<DialogPeer> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **order** | [`flags.0?Vector<DialogPeer>`](type/DialogPeer) | New order of pinned saved dialogs |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedSavedDialogs(
	order : array(
		$client->dialogPeer(
			peer : $client->peerUser(
				user_id : -8752023976946918417,
			),
		),
		$client->dialogPeerFolder(
			folder_id : 68,
		),
		$client->dialogPeerCommunity(
			community_id : -2700139156311573234,
		),
	),
);
```