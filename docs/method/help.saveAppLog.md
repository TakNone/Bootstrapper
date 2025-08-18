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
			time : 1145452.1044921875,
			type : 'DHQf802TrZsviGjW',
			peer : 1128716205953008312,
			data : $client->jsonNull(),
		),
	),
);
```