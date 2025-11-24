# savedDialog

**Description** : *Represents a saved dialog &raquo;*

**Layer** : 218

```tl
savedDialog#bd87cb6c flags:# pinned:flags.2?true peer:Peer top_message:int = SavedDialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Is the dialog pinned |
| <mark>peer</mark> | [`Peer`](type/Peer) | The dialog |
| <mark>top_message</mark> | [`int`](type/int) | The latest message ID |

---

## Type

[SavedDialog](type/SavedDialog)

---

## Example

```php
$savedDialog = $client->savedDialog(
	pinned : true,
	peer : $client->peerUser(
		user_id : -700401064389966850,
	),
	top_message : 0,
);
```