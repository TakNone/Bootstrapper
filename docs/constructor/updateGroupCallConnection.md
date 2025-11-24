# updateGroupCallConnection

**Description** : *New WebRTC parameters*

**Layer** : 218

```tl
updateGroupCallConnection#b783982 flags:# presentation:flags.0?true params:DataJSON = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **presentation** | [`flags.0?true`](type/true) | Are these parameters related to the screen capture session currently in progress? |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | WebRTC parameters |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallConnection(
	presentation : true,
	params : $client->dataJSON(
		data : 'Ik9FQgwBjouZdi8H',
	),
);
```