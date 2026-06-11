# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 227

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
			time : 1143791.94921875,
			type : 'EHeJVtqFh63wAG7Q',
			peer : 7476096407265134511,
			data : $client->jsonNull(),
		),
	),
);
```