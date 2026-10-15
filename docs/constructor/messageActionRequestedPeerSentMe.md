# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 229

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
	button_id : 31,
	peers : array(
		$client->requestedPeerUser(
			user_id : 3795546230839586274,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 7394823050638285288,
			),
		),
		$client->requestedPeerChat(
			chat_id : 6247580123765523340,
			title : 'zEgCxfoXN0W36GmY',
			photo : $client->photoEmpty(
				id : -3311606818963539831,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -5172795185904399209,
			title : '0m19fOD85UBLsoh2',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 5474879239410298241,
			),
		),
	),
);
```