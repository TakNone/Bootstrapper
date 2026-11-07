# help.saveAppLog

**Description** : *Saves logs of application on the server*

**Layer** : 233

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
			time : -1487565.841796875,
			type : 'SaWHC4tknv8db1YG',
			peer : 3403558131714323725,
			data : $client->jsonNull(),
		),
	),
);
```