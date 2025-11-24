# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 218

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
	button_id : 10,
	peers : array(
		$client->requestedPeerUser(
			user_id : -4486188184887241485,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -3948412968098836819,
			),
		),
		$client->requestedPeerChat(
			chat_id : 3213499438648128697,
			title : 'ZFW2DL5bgeht4VPj',
			photo : $client->photoEmpty(
				id : -5319742448907326996,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 2471158435740985527,
			title : 'F625HwK0idjkUIN1',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 1836122557480291305,
			),
		),
	),
);
```