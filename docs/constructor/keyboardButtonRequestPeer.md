# keyboardButtonRequestPeer

**Description** : *Prompts the user to select and share one or more peers with the bot using messages\.sendBotRequestedPeer*

**Layer** : 222

```tl
keyboardButtonRequestPeer#5b0f15f5 flags:# style:flags.10?KeyboardButtonStyle text:string button_id:int peer_type:RequestPeerType max_quantity:int = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
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
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 8706342543713548372,
	),
	text : 'hTWDYwRA9n4Qu0vi',
	button_id : 12,
	peer_type : $client->requestPeerTypeUser(
		bot : false,
		premium : false,
	),
	max_quantity : 24,
);
```