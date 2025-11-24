# messages.getDialogUnreadMarks

**Description** : *Get dialogs manually marked as unread*

**Layer** : 218

```tl
messages.getDialogUnreadMarks#21202222 flags:# parent_peer:flags.0?InputPeer = Vector<DialogPeer>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | Can be equal to the ID of a monoforum, to fetch monoforum topics manually marked as unread |

---

## Result

[Vector<DialogPeer>](type/DialogPeer)

---

## Example

```php
$dialogPeer = $client->messages->getDialogUnreadMarks(
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```