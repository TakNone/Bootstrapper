# messageActionRequestedPeerSentMe

**Description** : *Contains info about one or more peers that the a user shared with the me \(the bot\) after clicking on a keyboardButtonRequestPeer button \(service message received by the bot\)*

**Layer** : 225

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
	button_id : 79,
	peers : array(
		$client->requestedPeerUser(
			user_id : 1775978471281332094,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : 1083826295899754518,
			),
		),
		$client->requestedPeerChat(
			chat_id : -6995477336889588584,
			title : 'gFDtMGHYuero8UOE',
			photo : $client->photoEmpty(
				id : -4954046644085590362,
			),
		),
		$client->requestedPeerChannel(
			channel_id : -4748630738012334659,
			title : 'iD1tUgL3mECNbsyw',
			username : 'TakNone',
			photo : $client->photoEmpty(
				id : -1708952945347825934,
			),
		),
	),
);
```