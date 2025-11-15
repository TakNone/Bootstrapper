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
	button_id : 36,
	peers : array(
		$client->requestedPeerUser(
			user_id : -2210167121976999912,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -7899146932290314949,
			),
		),
		$client->requestedPeerChat(
			chat_id : 6471750849424767543,
			title : '5XMr2pEjTbFP0ZtA',
			photo : $client->photoEmpty(
				id : 3846038136241555947,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -2889099271252140781,
			title : 'iqTWfIAGY5LSrsC1',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 6462215862309132526,
			),
		),
	),
);
```