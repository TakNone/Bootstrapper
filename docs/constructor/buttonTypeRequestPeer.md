# buttonTypeRequestPeer

**Layer** : 229

```tl
buttonTypeRequestPeer#4f58a237 flags:# button_id:int peer_type:RequestPeerType max_quantity:int = ButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>button_id</mark> | [`int`](type/int) | NOTHING |
| <mark>peer_type</mark> | [`RequestPeerType`](type/RequestPeerType) | NOTHING |
| <mark>max_quantity</mark> | [`int`](type/int) | NOTHING |

---

## Type

[ButtonType](type/ButtonType)

---

## Example

```php
$buttonType = $client->buttonTypeRequestPeer(
	button_id : 30,
	peer_type : $client->requestPeerTypeUser(
		bot : true,
		premium : false,
	),
	max_quantity : 35,
);
```