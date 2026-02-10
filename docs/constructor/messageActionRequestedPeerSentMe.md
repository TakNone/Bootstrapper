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
	button_id : 12,
	peers : array(
		$client->requestedPeerUser(
			user_id : 7389711889569781673,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 4293913237146784568,
			),
		),
		$client->requestedPeerChat(
			chat_id : -1954252826696716485,
			title : 'aAvmWOM97dXy5iGV',
			photo : $client->photoEmpty(
				id : 4189220085832534697,
			),
		),
		$client->requestedPeerChannel(
			channel_id : 7191297530339212288,
			title : 'h7sj0DlQd9iefx8y',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 1219820591864768428,
			),
		),
	),
);
```