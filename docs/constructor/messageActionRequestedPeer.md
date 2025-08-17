# messageActionRequestedPeer

**Description** : *Contains info about one or more peers that the we (the user) shared with the bot after clicking on a keyboardButtonRequestPeer button (service message sent by the user)*

**Layer** : 211

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
	button_id : 4,
	peers : array(
		$client->peerUser(
			user_id : 9163351199542377579,
		),
		$client->peerChat(
			chat_id : -2094311023398062990,
		),
		$client->peerChannel(
			channel_id : -2064907773036392562,
		),
	),
);
```