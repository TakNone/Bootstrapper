# messages.sendBotRequestedPeer

**Description** : *Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*

**Layer** : 216

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
	peer : $client->inputPeerEmpty(),
	msg_id : 90,
	button_id : 49,
	requested_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 1348932167666342390,
		),
		$client->inputPeerUser(
			user_id : 7880965571418777416,
			access_hash : -4278491964783941796,
		),
		$client->inputPeerChannel(
			channel_id : 6626210938832233251,
			access_hash : 4462923226576970330,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 33,
			user_id : 6648525837725318628,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 16,
			channel_id : 684771816425723124,
		),
	),
);
```