# updateDialogPinned

**Description** : *A dialog was pinned/unpinned*

**Layer** : 218

```tl
updateDialogPinned#6e6fe51c flags:# pinned:flags.0?true folder_id:flags.1?int peer:DialogPeer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	folder_id : 10,
	peer : $client->dialogPeer(
		peer : $client->peerUser(
			user_id : -6995822522255574076,
		),
	),
);
```