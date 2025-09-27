# messages.viewSponsoredMessage

**Description** : *Mark a specific sponsored message &raquo; as read*

**Layer** : 216

```tl
messages.viewSponsoredMessage#269e3643 random_id:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`bytes`](type/bytes) | The ad's unique ID |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->viewSponsoredMessage(
	random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```