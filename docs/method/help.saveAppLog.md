# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 211

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
			time : -791432.17578125,
			type : 'SZkK9AqMNQWv28EO',
			peer : 8002072034266704669,
			data : $client->jsonNull(),
		),
	),
);
```