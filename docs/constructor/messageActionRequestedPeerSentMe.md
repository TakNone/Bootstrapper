# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 233

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
	button_id : 55,
	peers : array(
		$client->requestedPeerUser(
			user_id : 3794655765692494993,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -8962342120692677853,
			),
		),
		$client->requestedPeerChat(
			chat_id : -6847856251447506437,
			title : 'HxRigvmIt7Y5CBOM',
			photo : $client->photoEmpty(
				id : -1926353629403770896,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -8319565198690216444,
			title : '9Tf6OqyVEUZQDbp7',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -1082072515199083527,
			),
		),
	),
);
```