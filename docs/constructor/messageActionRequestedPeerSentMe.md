# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 216

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
	button_id : 14,
	peers : array(
		$client->requestedPeerUser(
			user_id : 4974326229392055728,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 5343004694153222579,
			),
		),
		$client->requestedPeerChat(
			chat_id : 8473533589346355621,
			title : 'HMpwDu9vnEYyamhc',
			photo : $client->photoEmpty(
				id : 7876768496991386281,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 7140174169538016077,
			title : 'SBEI4KfMA5n2vD7V',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -1692642015369362791,
			),
		),
	),
);
```