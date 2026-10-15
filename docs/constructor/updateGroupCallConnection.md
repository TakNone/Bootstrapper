# updateGroupCallConnection

**Description** : *Connection parameters returned after joining a group call, see presentations &raquo; and stream mode &raquo;*

**Layer** : 229

```tl
updateGroupCallConnection#b783982 flags:# presentation:flags.0?true params:DataJSON = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **presentation** | [`flags.0?true`](type/true) | Whether these parameters belong to the separate presentation connection instead of the main connection |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | RTC join response parameters or broadcast-stream metadata, as described above |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallConnection(
	presentation : true,
	params : $client->dataJSON(
		data : 'cfguYP8Aps9zJ1LD',
	),
);
```