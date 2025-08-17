# inputChannel

**Description** : *Represents a channel*

**Layer** : 211

```tl
inputChannel#f35aec28 channel_id:long access_hash:long = InputChannel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash taken from the channel constructor |

---

## Type

[InputChannel](type/InputChannel)

---

## Example

```php
$inputChannel = $client->inputChannel(
	channel_id : -3585856918420350894,
	access_hash : -3533825397421576703,
);
```