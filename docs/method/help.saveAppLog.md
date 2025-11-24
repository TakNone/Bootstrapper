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
			time : 1313433.4267578125,
			type : 'JPzgaYqvfOlZstIX',
			peer : -8424130722837547571,
			data : $client->jsonNull(),
		),
	),
);
```