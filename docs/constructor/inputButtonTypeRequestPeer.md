# inputButtonTypeRequestPeer

**Layer** : 229

```tl
inputButtonTypeRequestPeer#3fe268fe flags:# name_requested:flags.0?true username_requested:flags.1?true photo_requested:flags.2?true button_id:int peer_type:RequestPeerType max_quantity:int = ButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **name_requested** | [`flags.0?true`](type/true) | NOTHING |
| **username_requested** | [`flags.1?true`](type/true) | NOTHING |
| **photo_requested** | [`flags.2?true`](type/true) | NOTHING |
| <mark>button_id</mark> | [`int`](type/int) | NOTHING |
| <mark>peer_type</mark> | [`RequestPeerType`](type/RequestPeerType) | NOTHING |
| <mark>max_quantity</mark> | [`int`](type/int) | NOTHING |

---

## Type

[ButtonType](type/ButtonType)

---

## Example

```php
$buttonType = $client->inputButtonTypeRequestPeer(
	name_requested : true,
	username_requested : true,
	photo_requested : true,
	button_id : 40,
	peer_type : $client->requestPeerTypeUser(
		bot : true,
		premium : false,
	),
	max_quantity : 54,
);
```