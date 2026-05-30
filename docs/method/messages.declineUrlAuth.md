# messages.declineUrlAuth

**Layer** : 225

```tl
messages.declineUrlAuth#35436bbc url:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->declineUrlAuth(
	url : 'https://docs.liveproto.dev',
);
```