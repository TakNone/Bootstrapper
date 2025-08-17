# messages.getDialogUnreadMarks

**Description** : *Get dialogs manually marked as unread*

**Layer** : 211

```tl
messages.getDialogUnreadMarks#21202222 flags:# parent_peer:flags.0?InputPeer = Vector<DialogPeer>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Vector<DialogPeer>](type/DialogPeer)

---

## Example

```php
$dialogPeer = $client->messages->getDialogUnreadMarks(
	parent_peer : $client->inputPeerEmpty(),
);
```