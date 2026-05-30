# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 225

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
			time : 745102.6171875,
			type : 'Z4HyidKuJEF5qGm7',
			peer : 6346944764606095601,
			data : $client->jsonNull(),
		),
	),
);
```