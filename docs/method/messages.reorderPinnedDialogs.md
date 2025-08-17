# messages.reorderPinnedDialogs

**Description** : *Reorder pinned dialogs*

**Layer** : 211

```tl
messages.reorderPinnedDialogs#3b1adf37 flags:# force:flags.0?true folder_id:int order:Vector<InputDialogPeer> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **force** | [`flags.0?true`](type/true) | If set, dialogs pinned server-side but not present in the order field will be unpinned |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |
| <mark>order</mark> | [`Vector<InputDialogPeer>`](type/InputDialogPeer) | New dialog order |

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
$bool = $client->messages->reorderPinnedDialogs(
	force : true,
	folder_id : 17,
	order : array(
		$client->inputDialogPeer(
			peer : $client->inputPeerEmpty(),
		),
		$client->inputDialogPeerFolder(
			folder_id : 93,
		),
	),
);
```