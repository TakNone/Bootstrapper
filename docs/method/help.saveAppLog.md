# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 218

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
			time : -1476256.92578125,
			type : 'HjUmvJ2EzpgqcBbw',
			peer : 662949216914530762,
			data : $client->jsonNull(),
		),
	),
);
```