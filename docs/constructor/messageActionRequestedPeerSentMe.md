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
	button_id : 12,
	peers : array(
		$client->requestedPeerUser(
			user_id : -5612085225305320888,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 5833178778516654893,
			),
		),
		$client->requestedPeerChat(
			chat_id : 6459906191969532153,
			title : 'rv1h2oWs5iHnMQGK',
			photo : $client->photoEmpty(
				id : -7625918593861593469,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 1049052705603411811,
			title : 'is2DKEHgtBzRx6o7',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 239941899961301718,
			),
		),
	),
);
```