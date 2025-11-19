# messages.getSavedDialogsByID

**Description** : *Obtain information about specific saved message dialogs &raquo; or monoforum topics &raquo;*

**Layer** : 218

```tl
messages.getSavedDialogsByID#6f6f9c96 flags:# parent_peer:flags.1?InputPeer ids:Vector<InputPeer> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | If set, fetches monoforum topics », otherwise fetches saved message dialogs » |
| <mark>ids</mark> | [`Vector<InputPeer>`](type/InputPeer) | IDs of dialogs (topics) to fetch |

---

## Result

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->getSavedDialogsByID(
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	ids : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```