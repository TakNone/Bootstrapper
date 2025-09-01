# updatePinnedDialogs

**Layer** : 214

```tl
updatePinnedDialogs#fa0f3ca2 flags:# folder_id:flags.1?int order:flags.0?Vector<DialogPeer> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **folder_id** | [`flags.1?int`](type/int) | NOTHING |
| **order** | [`flags.0?Vector<DialogPeer>`](type/DialogPeer) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedDialogs(
	folder_id : 1,
	order : array(
		$client->dialogPeer(
			peer : $client->peerUser(
				user_id : -4575073900112289955,
			),
		),
		$client->dialogPeerFolder(
			folder_id : 7,
		),
	),
);
```