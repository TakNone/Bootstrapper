# updateSavedDialogPinned

**Description** : *A saved message dialog was pinned/unpinned*

**Layer** : 218

```tl
updateSavedDialogPinned#aeaf9e74 flags:# pinned:flags.0?true peer:DialogPeer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the dialog was pinned |
| <mark>peer</mark> | [`DialogPeer`](type/DialogPeer) | The dialog |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSavedDialogPinned(
	pinned : true,
	peer : $client->dialogPeer(
		peer : $client->peerUser(
			user_id : 1991144191653721811,
		),
	),
);
```