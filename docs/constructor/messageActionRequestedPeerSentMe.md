# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 222

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
	button_id : 47,
	peers : array(
		$client->requestedPeerUser(
			user_id : -6960188902702607368,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 1579441097852384070,
			),
		),
		$client->requestedPeerChat(
			chat_id : -3161636725511984957,
			title : 'ZhGmsg5kFqafdlPr',
			photo : $client->photoEmpty(
				id : 1140558116393750818,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 2468665601454438443,
			title : 'WDcR6ynaUIZH2XCr',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 1977319854553426375,
			),
		),
	),
);
```