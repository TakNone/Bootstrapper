# messages.getMyStickers

**Description** : *Fetch all stickersets &raquo; owned by the current user*

**Layer** : 216

```tl
messages.getMyStickers#d0b5e1fc offset_id:long limit:int = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset_id</mark> | [`long`](type/long) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->getMyStickers(
	offset_id : 0,
	limit : 21,
);
```