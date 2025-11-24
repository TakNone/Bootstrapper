# updatePinnedSavedDialogs

**Description** : *Pinned saved dialogs &raquo; were updated*

**Layer** : 218

```tl
updatePinnedSavedDialogs#686c85a6 flags:# order:flags.0?Vector<DialogPeer> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
				user_id : -293845721305701989,
			),
		),
		$client->dialogPeerFolder(
			folder_id : 37,
		),
	),
);
```