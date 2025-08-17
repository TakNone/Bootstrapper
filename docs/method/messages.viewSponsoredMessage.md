# messages.viewSponsoredMessage

**Description** : *Mark a specific sponsored message » as read*

**Layer** : 211

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
	random_id : '?(?LiveProto???b',
);
```