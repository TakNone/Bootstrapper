# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 222

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
			time : 1489200.80859375,
			type : 'HAaoVrntZwmEUI85',
			peer : 2730918399146820889,
			data : $client->jsonNull(),
		),
	),
);
```