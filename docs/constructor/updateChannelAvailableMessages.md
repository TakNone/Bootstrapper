# updateChannelAvailableMessages

**Layer** : 214

```tl
updateChannelAvailableMessages#b23fc698 channel_id:long available_min_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | NOTHING |
| <mark>available_min_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelAvailableMessages(
	channel_id : 855748045156728395,
	available_min_id : 49,
);
```