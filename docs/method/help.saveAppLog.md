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
			time : -660710.6318359375,
			type : 'GTEozw6j3QksJiNF',
			peer : -8528819535160605542,
			data : $client->jsonNull(),
		),
	),
);
```