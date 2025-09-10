# messages.deleteAccount

**Layer** : 214

```tl
messages.deleteAccount#418d4e0b reason:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reason</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->deleteAccount(
	reason : 'oyzdHIuFJ7XYtkaq',
);
```