# messages.reorderPinnedSavedDialogs

**Description** : *Reorder pinned saved message dialogs &raquo;*

**Layer** : 218

```tl
messages.reorderPinnedSavedDialogs#8b716587 flags:# force:flags.0?true order:Vector<InputDialogPeer> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **force** | [`flags.0?true`](type/true) | If set, dialogs pinned server-side but not present in the order field will be unpinned |
| <mark>order</mark> | [`Vector<InputDialogPeer>`](type/InputDialogPeer) | New dialog order |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->reorderPinnedSavedDialogs(
	force : true,
	order : array(
		$client->inputDialogPeer(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
		),
		$client->inputDialogPeerFolder(
			folder_id : 74,
		),
	),
);
```