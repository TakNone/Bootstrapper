# inputKeyboardButtonRequestPeer

**Description** : *Prompts the user to select and share one or more peers with the bot using messages\.sendBotRequestedPeer*

**Layer** : 214

```tl
inputKeyboardButtonRequestPeer#c9662d05 flags:# name_requested:flags.0?true username_requested:flags.1?true photo_requested:flags.2?true text:string button_id:int peer_type:RequestPeerType max_quantity:int = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_requested** | [`flags.0?true`](type/true) | Set this flag to request the peer's name |
| **username_requested** | [`flags.1?true`](type/true) | Set this flag to request the peer's @username (if any) |
| **photo_requested** | [`flags.2?true`](type/true) | Set this flag to request the peer's photo (if any) |
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
$keyboardButton = $client->inputKeyboardButtonRequestPeer(
	name_requested : true,
	username_requested : true,
	photo_requested : true,
	text : 'IizuZVdoheKH8c4W',
	button_id : 90,
	peer_type : $client->requestPeerTypeUser(
		bot : true,
		premium : true,
	),
	max_quantity : 26,
);
```