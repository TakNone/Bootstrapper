# account.saveAutoSaveSettings

**Description** : *Modify autosave settings*

**Layer** : 216

```tl
account.saveAutoSaveSettings#d69b8361 flags:# users:flags.0?true chats:flags.1?true broadcasts:flags.2?true peer:flags.3?InputPeer settings:AutoSaveSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **users** | [`flags.0?true`](type/true) | Whether the new settings should affect all private chats |
| **chats** | [`flags.1?true`](type/true) | Whether the new settings should affect all groups |
| **broadcasts** | [`flags.2?true`](type/true) | Whether the new settings should affect all channels |
| **peer** | [`flags.3?InputPeer`](type/InputPeer) | Whether the new settings should affect a specific peer |
| <mark>settings</mark> | [`AutoSaveSettings`](type/AutoSaveSettings) | The new autosave settings |

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
$bool = $client->account->saveAutoSaveSettings(
	users : true,
	chats : true,
	broadcasts : true,
	peer : $client->inputPeerEmpty(),
	settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 5865751034145627548,
	),
);
```