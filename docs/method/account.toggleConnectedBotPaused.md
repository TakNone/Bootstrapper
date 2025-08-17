# account.toggleConnectedBotPaused

**Description** : *Pause or unpause a specific chat, temporarily disconnecting it from all business bots »*

**Layer** : 211

```tl
account.toggleConnectedBotPaused#646e1097 peer:InputPeer paused:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat to pause |
| <mark>paused</mark> | [`Bool`](type/Bool) | Whether to pause or unpause the chat |

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
$bool = $client->account->toggleConnectedBotPaused(
	peer : $client->inputPeerEmpty(),
	paused : $client->boolFalse(),
);
```