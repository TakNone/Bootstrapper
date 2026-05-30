# updateChannelMessageForwards

**Description** : *The forward counter of a message in a channel has changed*

**Layer** : 225

```tl
updateChannelMessageForwards#d29a27f4 channel_id:long id:int forwards:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| <mark>forwards</mark> | [`int`](type/int) | New forward counter |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelMessageForwards(
	channel_id : -867143614812424077,
	id : 63,
	forwards : 84,
);
```