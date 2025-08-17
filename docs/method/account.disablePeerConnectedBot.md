# account.disablePeerConnectedBot

**Description** : *Permanently disconnect a specific chat from all business bots » (equivalent to specifying it in recipients.exclude_users during initial configuration with account.updateConnectedBot »); to reconnect of a chat disconnected using this method the user must reconnect the entire bot by invoking account.updateConnectedBot »*

**Layer** : 211

```tl
account.disablePeerConnectedBot#5e437ed9 peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat to disconnect |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_ALREADY_DISABLED** | `400` | The connected business bot was already disabled for the specified peer |
| **BOT_NOT_CONNECTED_YET** | `400` | No business bot is connected to the currently logged in user |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->account->disablePeerConnectedBot(
	peer : $client->inputPeerEmpty(),
);
```