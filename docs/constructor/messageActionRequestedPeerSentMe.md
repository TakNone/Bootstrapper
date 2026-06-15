# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 227

```tl
messageActionRequestedPeerSentMe#93b31848 button_id:int peers:Vector<RequestedPeer> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>button_id</mark> | [`int`](type/int) | button_id contained in the keyboardButtonRequestPeer |
| <mark>peers</mark> | [`Vector<RequestedPeer>`](type/RequestedPeer) | Info about the shared peers |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionRequestedPeerSentMe(
	button_id : 93,
	peers : array(
		$client->requestedPeerUser(
			user_id : -4842880838818441812,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 2250644684830034783,
			),
		),
		$client->requestedPeerChat(
			chat_id : -4994605366090078851,
			title : 'gPQNXI0KBzc9dfE7',
			photo : $client->photoEmpty(
				id : -3011565955638169043,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -3084086206417660781,
			title : 'EeVyavq4pwAkJGH1',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -5167978540630344851,
			),
		),
	),
);
```