# updateDialogPinned

**Description** : *A dialog was pinned/unpinned*

**Layer** : 214

```tl
updateDialogPinned#6e6fe51c flags:# pinned:flags.0?true folder_id:flags.1?int peer:DialogPeer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the dialog was pinned |
| **folder_id** | [`flags.1?int`](type/int) | Peer folder ID, for more info click here |
| <mark>peer</mark> | [`DialogPeer`](type/DialogPeer) | The dialog |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogPinned(
	pinned : true,
	folder_id : 91,
	peer : $client->dialogPeer(
		peer : $client->peerUser(
			user_id : -2359366717131906197,
		),
	),
);
```