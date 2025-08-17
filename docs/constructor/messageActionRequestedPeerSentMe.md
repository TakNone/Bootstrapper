# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me (the bot) after clicking on a keyboardButtonRequestPeer button (service message received by the bot)*

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
	button_id : 78,
	peers : array(
		$client->requestedPeerUser(
			user_id : -3512622243385936842,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -6794394836283270619,
			),
		),
		$client->requestedPeerChat(
			chat_id : 1162566270784519280,
			title : 'O0mKoFgALcjfnaBw',
			photo : $client->photoEmpty(
				id : 3093284187261082737,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -4933354292288961064,
			title : 'Lts1IEGkOeXzWFKp',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 2092612626816316584,
			),
		),
	),
);
```