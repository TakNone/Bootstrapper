# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 211

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
	button_id : 96,
	peers : array(
		$client->requestedPeerUser(
			user_id : 3220744679935668372,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -2227670714618188779,
			),
		),
		$client->requestedPeerChat(
			chat_id : -6238593973642467482,
			title : 'oF4MTSIrEGeLhc73',
			photo : $client->photoEmpty(
				id : 457021089909790805,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 4316100250290947052,
			title : 'Iip0MJt3PX7L6K8H',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 681230993596961863,
			),
		),
	),
);
```