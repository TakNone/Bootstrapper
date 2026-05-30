# bots.checkUsername

**Layer** : 225

```tl
bots.checkUsername#87f2219b username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->bots->checkUsername(
	username : 'TakNone',
);
```