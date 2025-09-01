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
			time : 1341828.8515625,
			type : '8Z3PxlOroYuaUbhK',
			peer : 7376644852553604476,
			data : $client->jsonNull(),
		),
	),
);
```