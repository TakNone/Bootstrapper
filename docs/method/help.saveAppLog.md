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
			time : -889748.2548828125,
			type : 'PkB4IAu36jEmaK9U',
			peer : -8956395050612851682,
			data : $client->jsonNull(),
		),
	),
);
```