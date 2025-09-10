# messages.sendBotRequestedPeer

**Description** : *Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*

**Layer** : 214

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
	msg_id : 87,
	button_id : 56,
	requested_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -7004682330811711255,
		),
		$client->inputPeerUser(
			user_id : -959768543853732704,
			access_hash : -8736480295234844212,
		),
		$client->inputPeerChannel(
			channel_id : -9074087765050467255,
			access_hash : -1938027181524546853,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 17,
			user_id : 741205698889207092,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 51,
			channel_id : -81703879379035709,
		),
	),
);
```