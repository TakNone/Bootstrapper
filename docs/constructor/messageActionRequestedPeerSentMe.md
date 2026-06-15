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
	button_id : 12,
	peers : array(
		$client->requestedPeerUser(
			user_id : 1430101880215085187,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -8893884438097971946,
			),
		),
		$client->requestedPeerChat(
			chat_id : 4485796016152701541,
			title : 'KS8wdsajgUIx4Eoh',
			photo : $client->photoEmpty(
				id : 4682785291114098837,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -797502260087096737,
			title : 'oXDhA1V5qmsNeTa3',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -2858811018613949165,
			),
		),
	),
);
```