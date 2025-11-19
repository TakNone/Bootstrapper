# payments.toggleChatStarGiftNotifications

**Description** : *Enables or disables the reception of notifications every time a gift &raquo; is received by the specified channel, can only be invoked by admins with post\_messages admin rights*

**Layer** : 218

```tl
payments.toggleChatStarGiftNotifications#60eaefa1 flags:# enabled:flags.0?true peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **enabled** | [`flags.0?true`](type/true) | Whether to enable or disable reception of notifications in the form of messageActionStarGiftUnique and messageActionStarGift service messages from the channel |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel for which to receive or not receive notifications |

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
$bool = $client->payments->toggleChatStarGiftNotifications(
	enabled : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```