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
	button_id : 75,
	peers : array(
		$client->requestedPeerUser(
			user_id : -8945068702398457210,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 806074843195596453,
			),
		),
		$client->requestedPeerChat(
			chat_id : -935028127284976501,
			title : '1Yk2L3iPdD4EFCl7',
			photo : $client->photoEmpty(
				id : -3739171673426054498,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 7030801713515971633,
			title : 'BFKJHSo40lDbEuMn',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 7669246342127692181,
			),
		),
	),
);
```