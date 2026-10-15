# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 229

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
			time : -58289.2021484375,
			type : 'aQzs94cLHliWtZ0V',
			peer : -4906868921297037237,
			data : $client->jsonNull(),
		),
	),
);
```