# updateChannelAvailableMessages

**Description** : *The history of a channel/supergroup was hidden*

**Layer** : 211

```tl
updateChannelAvailableMessages#b23fc698 channel_id:long available_min_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel/supergroup ID |
| <mark>available_min_id</mark> | [`int`](type/int) | Identifier of a maximum unavailable message in a channel due to hidden history |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelAvailableMessages(
	channel_id : -6683955635378202707,
	available_min_id : 16,
);
```