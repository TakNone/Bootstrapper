# updateReadChannelOutbox

**Description** : *Outgoing messages in a channel/supergroup were read*

**Layer** : 218

```tl
updateReadChannelOutbox#b75f99a9 channel_id:long max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel/supergroup ID |
| <mark>max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadChannelOutbox(
	channel_id : -906650885852330943,
	max_id : 81,
);
```