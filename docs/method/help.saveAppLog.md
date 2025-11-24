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
			time : -138796.103515625,
			type : 'KqYGBjac1IT7ODdN',
			peer : -8169437236472124625,
			data : $client->jsonNull(),
		),
	),
);
```