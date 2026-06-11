# messages.sendBotRequestedPeer

**Description** : *Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*

**Layer** : 227

```tl
messages.sendBotRequestedPeer#6c5cf2a7 flags:# peer:InputPeer msg_id:flags.0?int webapp_req_id:flags.1?string button_id:int requested_peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The bot that sent the keyboardButtonRequestPeer button |
| **msg_id** | [`flags.0?int`](type/int) | ID of the message that contained the reply keyboard with the keyboardButtonRequestPeer button |
| **webapp_req_id** | [`flags.1?string`](type/string) | NOTHING |
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
	msg_id : 75,
	webapp_req_id : 'ZIvrBsVA5LStTM8i',
	button_id : 44,
	requested_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```