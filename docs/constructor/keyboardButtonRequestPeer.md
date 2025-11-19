# keyboardButtonRequestPeer

**Description** : *Prompts the user to select and share one or more peers with the bot using messages\.sendBotRequestedPeer*

**Layer** : 218

```tl
keyboardButtonRequestPeer#53d7bfd8 text:string button_id:int peer_type:RequestPeerType max_quantity:int = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>button_id</mark> | [`int`](type/int) | Button ID, to be passed to messages.sendBotRequestedPeer |
| <mark>peer_type</mark> | [`RequestPeerType`](type/RequestPeerType) | Filtering criteria to use for the peer selection list shown to the user. The list should display all existing peers of the specified type, and should also offer an option for the user to create and immediately use one or more (up to max_quantity) peers of the specified type, if needed |
| <mark>max_quantity</mark> | [`int`](type/int) | Maximum number of peers that can be chosen |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonRequestPeer(
	text : 'oQDOv1Ne28TXSwhq',
	button_id : 1,
	peer_type : $client->requestPeerTypeUser(
		bot : false,
		premium : true,
	),
	max_quantity : 48,
);
```