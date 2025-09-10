# messageActionRequestedPeer

**Description** : *Contains info about one or more peers that the we \(the user\) shared with the bot after clicking on a keyboardButtonRequestPeer button \(service message sent by the user\)*

**Layer** : 214

```tl
messageActionRequestedPeer#31518e9b button_id:int peers:Vector<Peer> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>button_id</mark> | [`int`](type/int) | button_id contained in the keyboardButtonRequestPeer |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | The shared peers |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionRequestedPeer(
	button_id : 75,
	peers : array(
		$client->peerUser(
			user_id : 4061293123055477094,
		),
		$client->peerChat(
			chat_id : -6179420126474992033,
		),
		$client->peerChannel(
			channel_id : 9216285264687809794,
		),
	),
);
```