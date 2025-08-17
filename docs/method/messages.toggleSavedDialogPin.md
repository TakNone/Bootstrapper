# messages.toggleSavedDialogPin

**Description** : *Pin or unpin a saved message dialog »*

**Layer** : 211

```tl
messages.toggleSavedDialogPin#ac81bbde flags:# pinned:flags.0?true peer:InputDialogPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether to pin or unpin the dialog |
| <mark>peer</mark> | [`InputDialogPeer`](type/InputDialogPeer) | The dialog to pin |

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
$bool = $client->messages->toggleSavedDialogPin(
	pinned : true,
	peer : $client->inputDialogPeer(
		peer : $client->inputPeerEmpty(),
	),
);
```