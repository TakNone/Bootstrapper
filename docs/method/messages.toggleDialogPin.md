# messages.toggleDialogPin

**Description** : *Pin/unpin a dialog*

**Layer** : 211

```tl
messages.toggleDialogPin#a731e257 flags:# pinned:flags.0?true peer:InputDialogPeer = Bool;
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
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **PEER_HISTORY_EMPTY** | `400` | You can't pin an empty chat with a user |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PINNED_DIALOGS_TOO_MUCH** | `400` | Too many pinned dialogs |

---

## Example

```php
$bool = $client->messages->toggleDialogPin(
	pinned : true,
	peer : $client->inputDialogPeer(
		peer : $client->inputPeerEmpty(),
	),
);
```