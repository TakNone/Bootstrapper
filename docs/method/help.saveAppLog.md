# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 214

```tl
help.saveAppLog#6f02f748 events:Vector<InputAppEvent> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>events</mark> | [`Vector<InputAppEvent>`](type/InputAppEvent) | List of input events |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->help->saveAppLog(
	events : array(
		$client->inputAppEvent(
			time : -517055.8662109375,
			type : 'OIYftoJ9AbwyKnxM',
			peer : -423138459451807173,
			data : $client->jsonNull(),
		),
	),
);
```