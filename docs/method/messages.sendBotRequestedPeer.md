# messages.sendBotRequestedPeer

**Description** : *Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*

**Layer** : 218

```tl
messages.sendBotRequestedPeer#91b2d060 peer:InputPeer msg_id:int button_id:int requested_peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The bot that sent the keyboardButtonRequestPeer button |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message that contained the reply keyboard with the keyboardButtonRequestPeer button |
| <mark>button_id</mark> | [`int`](type/int) | The button_id field from the keyboardButtonRequestPeer constructor |
| <mark>requested_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | The chosen peers |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->sendBotRequestedPeer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 80,
	button_id : 65,
	requested_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```