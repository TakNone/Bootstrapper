# messageActionRequestedPeer

**Description** : *Contains info about one or more peers that the we \(the user\) shared with the bot after clicking on a keyboardButtonRequestPeer button \(service message sent by the user\)*

**Layer** : 229

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
	button_id : 66,
	peers : array(
		$client->peerUser(
			user_id : -1685302654439884309,
		),
		$client->peerChat(
			chat_id : 9131180402753445915,
		),
		$client->peerChannel(
			channel_id : 4938207729247560484,
		),
	),
);
```