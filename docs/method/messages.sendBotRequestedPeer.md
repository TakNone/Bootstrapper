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
	msg_id : 43,
	button_id : 81,
	requested_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -2020538539617766103,
		),
		$client->inputPeerUser(
			user_id : 7747377667832634218,
			access_hash : -2312577030632694737,
		),
		$client->inputPeerChannel(
			channel_id : -2193095065856124288,
			access_hash : -7306544264273731932,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			user_id : 3281248683160093957,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 45,
			channel_id : 4294626336370133956,
		),
	),
);
```