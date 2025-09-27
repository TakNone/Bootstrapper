# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 216

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
			time : 1866739.404296875,
			type : 'LOZd2Ues8SKwCzWT',
			peer : 6872168724308775224,
			data : $client->jsonNull(),
		),
	),
);
```