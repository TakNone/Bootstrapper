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
	button_id : 48,
	peers : array(
		$client->requestedPeerUser(
			user_id : -1335759878125320260,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -6617221639308751081,
			),
		),
		$client->requestedPeerChat(
			chat_id : 8767995418038731792,
			title : 'tvCONK6gorGE1iPH',
			photo : $client->photoEmpty(
				id : -4884046729912756649,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -9008312372198762529,
			title : 'cdgni4S12wTAJmk7',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -6581735149699583701,
			),
		),
	),
);
```