# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 214

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
	button_id : 8,
	peers : array(
		$client->requestedPeerUser(
			user_id : 3371447097610218865,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 4071908460626494907,
			),
		),
		$client->requestedPeerChat(
			chat_id : -8113623369771361935,
			title : 'vPwa8Q6u97AcDeT0',
			photo : $client->photoEmpty(
				id : 8854891674106316037,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -1241628364953316616,
			title : 'lkh0bGjf9m48eXTo',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -1634956092381843025,
			),
		),
	),
);
```